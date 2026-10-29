<?php

/**
 * Authenticated HTTP helper for Loyalty v2 paths that are not published in the
 * PHP SDK. Runtime member flows should use LV2*Api via Config.
 */

require_once __DIR__ . '/config.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

class LoyaltyV2Http
{
    private static ?Client $client = null;
    private static ?array $env = null;

    private static function env(): array
    {
        if (self::$env === null) {
            // Same .env as Config: SDK root (cwd when Codeception runs).
            $path = dirname(__DIR__, 2) . '/.env';
            if (!is_file($path)) {
                $path = '.env';
            }
            if (!is_file($path)) {
                throw new RuntimeException('Missing .env for Loyalty v2 HTTP calls.');
            }
            self::$env = parse_ini_file($path) ?: [];
        }

        return self::$env;
    }

    private static function host(): string
    {
        $host = rtrim(trim(self::env()['VOUCHERIFY_HOST'] ?? 'https://api.voucherify.io'), '/');
        // Configuration host may include /v1; Loyalty v2 paths are absolute from the API root.
        return preg_replace('#/v1$#i', '', $host);
    }

    private static function client(): Client
    {
        if (self::$client === null) {
            self::$client = new Client([
                'base_uri' => self::host() . '/',
                'http_errors' => false,
                'timeout' => 60,
            ]);
        }

        return self::$client;
    }

    private static function headers(): array
    {
        $env = self::env();
        $appId = $env['X_APP_ID'] ?? null;
        $appToken = $env['X_APP_TOKEN'] ?? null;
        if (!$appId || !$appToken) {
            throw new RuntimeException('X_APP_ID and X_APP_TOKEN are required for Loyalty v2 HTTP calls.');
        }

        return [
            'X-App-Id' => $appId,
            'X-App-Token' => $appToken,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    /**
     * @param string $method
     * @param string $path Absolute path starting with /v2/loyalties/...
     * @param array|object|null $body
     * @param array|null $query
     * @return array|string|null Parsed JSON (assoc array) or raw string
     */
    public static function request(string $method, string $path, $body = null, ?array $query = null)
    {
        $options = [
            'headers' => self::headers(),
            'query' => $query ?: [],
        ];

        if ($body !== null) {
            $options['body'] = json_encode($body, JSON_THROW_ON_ERROR);
        }

        $normalizedPath = ltrim($path, '/');

        try {
            $response = self::client()->request(strtoupper($method), $normalizedPath, $options);
        } catch (RequestException $e) {
            throw new RuntimeException(
                'Loyalty v2 HTTP ' . strtoupper($method) . ' ' . $path . ' transport error: ' . $e->getMessage(),
                0,
                $e
            );
        } catch (GuzzleException $e) {
            throw new RuntimeException(
                'Loyalty v2 HTTP ' . strtoupper($method) . ' ' . $path . ' failed: ' . $e->getMessage(),
                0,
                $e
            );
        }

        $status = $response->getStatusCode();
        $text = (string) $response->getBody();
        $data = null;
        if ($text !== '') {
            try {
                $data = json_decode($text, true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $e) {
                $data = $text;
            }
        }

        if ($status < 200 || $status >= 300) {
            $excerpt = is_string($data)
                ? substr($data, 0, 500)
                : substr(json_encode($data), 0, 500);
            $error = new RuntimeException(
                'Loyalty v2 HTTP ' . strtoupper($method) . ' ' . $path . ' failed: ' . $status . ' ' . $excerpt
            );
            $error->loyaltyV2Status = $status;
            $error->loyaltyV2Body = $data;
            throw $error;
        }

        return $data;
    }

    public static function createProgram($body)
    {
        return self::request('POST', '/v2/loyalties/programs', $body);
    }

    public static function getProgram(string $programId)
    {
        return self::request('GET', '/v2/loyalties/programs/' . rawurlencode($programId));
    }

    public static function updateProgram(string $programId, $body)
    {
        return self::request('PUT', '/v2/loyalties/programs/' . rawurlencode($programId), $body);
    }

    public static function activateProgram(string $programId)
    {
        return self::request('POST', '/v2/loyalties/programs/' . rawurlencode($programId) . '/activate');
    }

    public static function deactivateProgram(string $programId)
    {
        return self::request('POST', '/v2/loyalties/programs/' . rawurlencode($programId) . '/deactivate');
    }

    public static function deleteProgram(string $programId)
    {
        return self::request('DELETE', '/v2/loyalties/programs/' . rawurlencode($programId));
    }

    public static function createCardDefinition($body)
    {
        return self::request('POST', '/v2/loyalties/card-definitions', $body);
    }

    public static function activateCardDefinition(string $cardDefinitionId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/card-definitions/' . rawurlencode($cardDefinitionId) . '/activate'
        );
    }

    /**
     * Card definitions have no deactivate path; draft is the soft transition.
     */
    public static function draftCardDefinition(string $cardDefinitionId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/card-definitions/' . rawurlencode($cardDefinitionId) . '/draft'
        );
    }

    public static function deactivateCardDefinition(string $cardDefinitionId)
    {
        return self::draftCardDefinition($cardDefinitionId);
    }

    public static function deleteCardDefinition(string $cardDefinitionId)
    {
        return self::request(
            'DELETE',
            '/v2/loyalties/card-definitions/' . rawurlencode($cardDefinitionId)
        );
    }

    public static function createEarningRule($body)
    {
        return self::request('POST', '/v2/loyalties/earning-rules', $body);
    }

    public static function activateEarningRule(string $earningRuleId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/earning-rules/' . rawurlencode($earningRuleId) . '/activate'
        );
    }

    public static function deactivateEarningRule(string $earningRuleId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/earning-rules/' . rawurlencode($earningRuleId) . '/deactivate'
        );
    }

    public static function deleteEarningRule(string $earningRuleId)
    {
        return self::request(
            'DELETE',
            '/v2/loyalties/earning-rules/' . rawurlencode($earningRuleId)
        );
    }

    public static function createReward($body)
    {
        return self::request('POST', '/v2/loyalties/rewards', $body);
    }

    public static function activateReward(string $rewardId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/rewards/' . rawurlencode($rewardId) . '/activate'
        );
    }

    public static function deactivateReward(string $rewardId)
    {
        return self::request(
            'POST',
            '/v2/loyalties/rewards/' . rawurlencode($rewardId) . '/deactivate'
        );
    }

    public static function deleteReward(string $rewardId)
    {
        return self::request(
            'DELETE',
            '/v2/loyalties/rewards/' . rawurlencode($rewardId)
        );
    }

    public static function batchAssignCardDefinitions(string $programId, $body)
    {
        return self::request(
            'POST',
            '/v2/loyalties/programs/' . rawurlencode($programId) . '/card-definitions/batch',
            $body
        );
    }

    public static function batchAssignEarningRules(string $programId, $body)
    {
        return self::request(
            'POST',
            '/v2/loyalties/programs/' . rawurlencode($programId) . '/earning-rules/batch',
            $body
        );
    }

    public static function batchAssignRewards(string $programId, $body)
    {
        return self::request(
            'POST',
            '/v2/loyalties/programs/' . rawurlencode($programId) . '/rewards/batch',
            $body
        );
    }
}
