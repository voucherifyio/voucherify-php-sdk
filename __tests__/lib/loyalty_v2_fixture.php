<?php

/**
 * HTTP-only Loyalty v2 program setup / teardown for PHP SDK e2e.
 */

require_once __DIR__ . '/loyalty_v2_http.php';
require_once __DIR__ . '/utils.php';

class LoyaltyV2Fixture
{
    private static function uniqueSuffix(): string
    {
        return dechex((int) (microtime(true) * 1000)) . '_' . random_int(0, 999999);
    }

    private static function buildCardDefinitionBody(string $name, bool $enablePayWithPoints = false): array
    {
        return [
            'name' => $name,
            'type' => 'INDIVIDUAL',
            'status' => 'DRAFT',
            'points_expiration' => ['type' => 'NO_EXPIRATION'],
            'pending_points' => ['type' => 'IMMEDIATE'],
            'spending_limits' => [
                'global' => ['type' => 'NO_LIMIT', 'limits' => null],
                'transactions' => ['type' => 'NO_LIMIT', 'limits' => null],
            ],
            // Order payments require EXCHANGE_RATIO; default is NO_PAYMENTS (423).
            'pay_with_points' => $enablePayWithPoints
                ? [
                    'type' => 'EXCHANGE_RATIO',
                    'exchange_ratio' => ['formula' => 1],
                ]
                : ['type' => 'NO_PAYMENTS'],
        ];
    }

    private static function requireId(array $response, string $label): string
    {
        $id = $response['id'] ?? null;
        if (!$id) {
            throw new RuntimeException(
                $label . ' returned no id: ' . substr(json_encode($response), 0, 500)
            );
        }

        return $id;
    }

    /**
     * Creates a Loyalty v2 program with two card definitions, earning rule,
     * reward (points spending), assignments, and activation — via HTTP only.
     *
     * @return array{
     *   suffix: string,
     *   programId: string,
     *   cardDefinitionId: string,
     *   rewardCardDefinitionId: string,
     *   earningRuleId: string,
     *   rewardId: string,
     *   programName: string
     * }
     */
    public static function setup(): array
    {
        $suffix = self::uniqueSuffix();
        $programName = 'php_sdk_lv2_program_' . $suffix;
        $cardName = 'php_sdk_lv2_card_' . $suffix;
        $earningRuleName = 'php_sdk_lv2_earn_' . $suffix;
        $rewardName = 'php_sdk_lv2_reward_' . $suffix;

        $program = LoyaltyV2Http::createProgram(['name' => $programName]);
        $programId = self::requireId($program, 'createProgram');

        $cardDefinition = LoyaltyV2Http::createCardDefinition(
            self::buildCardDefinitionBody($cardName, true)
        );
        $cardDefinitionId = self::requireId($cardDefinition, 'createCardDefinition');
        LoyaltyV2Http::activateCardDefinition($cardDefinitionId);

        // Reward spend source and credit target must be different card definitions.
        $rewardCardDefinition = LoyaltyV2Http::createCardDefinition(
            self::buildCardDefinitionBody('php_sdk_lv2_reward_card_' . $suffix)
        );
        $rewardCardDefinitionId = self::requireId(
            $rewardCardDefinition,
            'createCardDefinition (reward target)'
        );
        LoyaltyV2Http::activateCardDefinition($rewardCardDefinitionId);

        $earningRule = LoyaltyV2Http::createEarningRule([
            'name' => $earningRuleName,
            'status' => 'DRAFT',
            'trigger' => [
                'event' => 'customer.order.paid',
            ],
            'earnings' => [
                [
                    'effects' => [
                        [
                            'type' => 'POINTS',
                            'points' => [
                                'value' => 100,
                                'card_definition_id' => $cardDefinitionId,
                            ],
                        ],
                    ],
                ],
            ],
        ]);
        $earningRuleId = self::requireId($earningRule, 'createEarningRule');
        LoyaltyV2Http::activateEarningRule($earningRuleId);

        $reward = LoyaltyV2Http::createReward([
            'name' => $rewardName,
            'type' => 'DIGITAL',
            'status' => 'DRAFT',
            'material' => null,
            'digital' => [
                'type' => 'LOYALTY_CARD_POINTS',
                'discount_coupons' => null,
                'gift_vouchers' => null,
                'loyalty_card_points' => [
                    'points' => 5,
                    'card_definition_id' => $rewardCardDefinitionId,
                ],
            ],
            'costs' => [
                [
                    'spending' => [
                        [
                            'points' => 10,
                            'card_definition_id' => $cardDefinitionId,
                        ],
                    ],
                ],
            ],
        ]);
        $rewardId = self::requireId($reward, 'createReward');
        LoyaltyV2Http::activateReward($rewardId);

        LoyaltyV2Http::batchAssignCardDefinitions($programId, [
            'assign' => [
                ['id' => $cardDefinitionId],
                ['id' => $rewardCardDefinitionId],
            ],
        ]);
        LoyaltyV2Http::batchAssignEarningRules($programId, [
            'assign' => [['id' => $earningRuleId]],
        ]);
        LoyaltyV2Http::batchAssignRewards($programId, [
            'assign' => [
                [
                    'id' => $rewardId,
                    'stock' => ['type' => 'UNLIMITED'],
                ],
            ],
        ]);

        LoyaltyV2Http::activateProgram($programId);

        return [
            'suffix' => $suffix,
            'programId' => $programId,
            'cardDefinitionId' => $cardDefinitionId,
            'rewardCardDefinitionId' => $rewardCardDefinitionId,
            'earningRuleId' => $earningRuleId,
            'rewardId' => $rewardId,
            'programName' => $programName,
        ];
    }

    /**
     * Best-effort teardown for resources created by setup().
     *
     * Order: deactivate+delete program first (clears assignments), then
     * deactivate+delete earning rule and reward, then delete card definitions.
     */
    public static function teardown(?array $ctx): void
    {
        if ($ctx === null) {
            return;
        }

        $ignore = function (string $label, callable $fn): void {
            try {
                $fn();
            } catch (Throwable $error) {
                $status = $error->loyaltyV2Status ?? null;
                if ($status === 404) {
                    return;
                }
                error_log('Loyalty v2 teardown ' . $label . ': ' . $error->getMessage());
            }
        };

        $programId = $ctx['programId'] ?? null;
        $cardDefinitionId = $ctx['cardDefinitionId'] ?? null;
        $rewardCardDefinitionId = $ctx['rewardCardDefinitionId'] ?? null;
        $earningRuleId = $ctx['earningRuleId'] ?? null;
        $rewardId = $ctx['rewardId'] ?? null;

        if ($programId) {
            $ignore('deactivateProgram', fn () => LoyaltyV2Http::deactivateProgram($programId));
            $ignore('deleteProgram', fn () => LoyaltyV2Http::deleteProgram($programId));
        }

        if ($earningRuleId) {
            $ignore('deactivateEarningRule', fn () => LoyaltyV2Http::deactivateEarningRule($earningRuleId));
        }
        if ($rewardId) {
            $ignore('deactivateReward', fn () => LoyaltyV2Http::deactivateReward($rewardId));
        }

        usleep(500000);

        if ($earningRuleId) {
            $ignore('deleteEarningRule', fn () => LoyaltyV2Http::deleteEarningRule($earningRuleId));
        }
        if ($rewardId) {
            $ignore('deleteReward', fn () => LoyaltyV2Http::deleteReward($rewardId));
        }
        foreach ([$cardDefinitionId, $rewardCardDefinitionId] as $id) {
            if ($id) {
                $ignore(
                    'deleteCardDefinition ' . $id,
                    fn () => LoyaltyV2Http::deleteCardDefinition($id)
                );
            }
        }
    }

    public static function hasCredentials(): bool
    {
        $path = dirname(__DIR__, 2) . '/.env';
        if (!is_file($path)) {
            $path = '.env';
        }
        if (!is_file($path)) {
            return false;
        }
        $env = parse_ini_file($path) ?: [];

        return !empty($env['X_APP_ID']) && !empty($env['X_APP_TOKEN']);
    }
}
