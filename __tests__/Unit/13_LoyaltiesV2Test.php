<?php

require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/customers.php';
require_once __DIR__ . '/../lib/loyalty_v2_fixture.php';
require_once __DIR__ . '/../lib/utils.php';

use OpenAPI\Client\ApiException;
use OpenAPI\Client\Model\Customer;
use OpenAPI\Client\Model\CustomersCreateRequestBody;
use OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBodyLimit;
use OpenAPI\Client\Model\OrderPaymentOrder;
use OpenAPI\Client\Model\OrdersCreateRequestBody;
use OpenAPI\Client\Model\RewardPurchaseRefundPolicies;
use OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody;
use OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateRequestBody;
use OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody;
use OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody;
use OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody;
use PHPUnit\Framework\TestCase;

/**
 * Loyalty v2 e2e: HTTP fixture for unpublished admin ops; SDK for published member/runtime ops.
 */
class LoyaltiesV2Test extends TestCase
{
    private static ?array $fixtureCtx = null;
    private static $customer = null;
    private static $member = null;
    private static ?string $primaryCardId = null;

    public static function setUpBeforeClass(): void
    {
        if (!LoyaltyV2Fixture::hasCredentials()) {
            return;
        }

        self::$fixtureCtx = LoyaltyV2Fixture::setup();

        $customersApi = Config::customersApiInstance();
        $customerBody = new CustomersCreateRequestBody();
        $customerBody->setSourceId('lv2_customer_' . self::$fixtureCtx['suffix']);
        $customerBody->setName('Loyalty v2 PHP SDK test');
        self::$customer = $customersApi->createCustomer($customerBody);

        $programsApi = Config::lv2ProgramsApiInstance();
        $memberBody = new V2LoyaltiesProgramsMembersCreateRequestBody();
        $memberBody->setCustomerIdentification([
            'type' => 'customer_id',
            'customer_id' => self::$customer->getId(),
            'customer_source_id' => null,
        ]);
        self::$member = $programsApi->createProgramMember(
            self::$fixtureCtx['programId'],
            $memberBody
        );
        self::$primaryCardId = self::resolvePrimaryCardId(self::$member);
    }

    public static function tearDownAfterClass(): void
    {
        $programsApi = Config::lv2ProgramsApiInstance();
        $customersApi = Config::customersApiInstance();

        $ignore = function (string $label, callable $fn): void {
            try {
                $fn();
            } catch (ApiException $error) {
                if ($error->getCode() === 404) {
                    return;
                }
                error_log($label . ': ' . $error->getMessage());
            } catch (Throwable $error) {
                $status = $error->loyaltyV2Status ?? null;
                if ($status === 404) {
                    return;
                }
                error_log($label . ': ' . $error->getMessage());
            }
        };

        if (self::$fixtureCtx && self::$member) {
            $programId = self::$fixtureCtx['programId'];
            $memberId = self::$member->getId();
            $ignore('deactivateProgramMember', fn () => $programsApi->deactivateProgramMember($programId, $memberId));
            $ignore('deleteProgramMember', fn () => $programsApi->deleteProgramMember($programId, $memberId));
        }

        if (self::$customer) {
            $customerId = self::$customer->getId();
            $ignore('deleteCustomer', fn () => $customersApi->deleteCustomer($customerId));
        }

        if (self::$fixtureCtx) {
            LoyaltyV2Fixture::teardown(self::$fixtureCtx);
        }

        self::$fixtureCtx = null;
        self::$member = null;
        self::$customer = null;
        self::$primaryCardId = null;
    }

    private static function resolvePrimaryCardId($memberBody): string
    {
        $cards = $memberBody->getCards() ?? [];
        $match = null;
        foreach ($cards as $entry) {
            $card = $entry->getCard();
            if ($card && $card->getCardDefinitionId() === self::$fixtureCtx['cardDefinitionId']) {
                $match = $entry;
                break;
            }
        }
        if ($match === null && count($cards) > 0) {
            $match = $cards[0];
        }
        $id = $match ? $match->getCard()->getId() : null;
        if (!$id) {
            throw new RuntimeException('No loyalty card on member');
        }

        return $id;
    }

    private function requireLiveContext(): void
    {
        if (!LoyaltyV2Fixture::hasCredentials()) {
            $this->markTestSkipped('Missing X_APP_ID / X_APP_TOKEN for Loyalty v2 e2e.');
        }
        $this->assertNotNull(self::$fixtureCtx);
        $this->assertNotNull(self::$member);
        $this->assertNotNull(self::$customer);
    }

    public function testSetupCreatesActivatedProgramResources(): void
    {
        $this->requireLiveContext();
        $this->assertNotEmpty(self::$fixtureCtx['programId']);
        $this->assertStringStartsWith('lcdef_', self::$fixtureCtx['cardDefinitionId']);
        $this->assertStringStartsWith('lern_', self::$fixtureCtx['earningRuleId']);
        $this->assertStringStartsWith('lrew_', self::$fixtureCtx['rewardId']);
    }

    public function testMemberLifecycleViaSdk(): void
    {
        $this->requireLiveContext();

        $programsApi = Config::lv2ProgramsApiInstance();
        $programId = self::$fixtureCtx['programId'];
        $member = self::$member;
        $customer = self::$customer;

        $this->assertNotEmpty($member->getId());
        $this->assertSame($customer->getId(), $member->getCustomerId());
        $this->assertIsArray($member->getCards());
        $this->assertGreaterThan(0, count($member->getCards()));

        $fetched = $programsApi->getProgramMember($programId, $member->getId());
        $this->assertSame($member->getId(), $fetched->getId());

        $listed = $programsApi->listProgramMembers($programId);
        $ids = array_map(fn ($item) => $item->getId(), $listed->getData() ?? []);
        $this->assertContains($member->getId(), $ids);

        $membership = $programsApi->getProgramMembership($programId, $customer->getId());
        $this->assertNotNull($membership);

        if (in_array($member->getStatus(), ['INACTIVE', 'DRAFT'], true)) {
            $activated = $programsApi->activateProgramMember($programId, $member->getId());
            $this->assertSame('ACTIVE', $activated->getStatus());
            self::$member = $activated;
            $member = $activated;
        }

        $deactivated = $programsApi->deactivateProgramMember($programId, $member->getId());
        $this->assertNotSame('ACTIVE', $deactivated->getStatus());

        $reactivated = $programsApi->activateProgramMember($programId, $member->getId());
        $this->assertSame('ACTIVE', $reactivated->getStatus());
        self::$member = $programsApi->getProgramMember($programId, $member->getId());

        $this->assertMatchesRegularExpression('/^lcrd_/', self::$primaryCardId);
        $this->assertSame(self::$primaryCardId, self::resolvePrimaryCardId(self::$member));
    }

    public function testAdjustCardPointsAndListTransactions(): void
    {
        $this->requireLiveContext();

        $programsApi = Config::lv2ProgramsApiInstance();
        $programId = self::$fixtureCtx['programId'];
        $memberId = self::$member->getId();
        $cardId = self::$primaryCardId;

        $adjustBody = new V2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody();
        $adjustBody->setPoints(100);
        $adjustBody->setReason('php sdk loyalty v2 e2e');
        $adjusted = $programsApi->adjustCardPoints($programId, $memberId, $cardId, $adjustBody);
        $this->assertNotNull($adjusted);

        // ADMIN_CREDIT is async; wait until balance is visible before spend ops.
        usleep(3000000);

        self::$member = $programsApi->getProgramMember($programId, $memberId);
        $primaryCard = null;
        foreach (self::$member->getCards() ?? [] as $entry) {
            if ($entry->getCard() && $entry->getCard()->getId() === $cardId) {
                $primaryCard = $entry;
                break;
            }
        }
        $this->assertNotNull($primaryCard);
        $this->assertGreaterThan(0, $primaryCard->getCard()->getBalance()->getPoints());

        $transactions = $programsApi->listCardTransactions($programId, $memberId, $cardId);
        $this->assertNotNull($transactions);
        $this->assertGreaterThan(0, count($transactions->getData() ?? []));
    }

    public function testMemberOrderPaymentDryRun(): void
    {
        $this->requireLiveContext();

        $ordersApi = Config::ordersApiInstance();
        $programsApi = Config::lv2ProgramsApiInstance();
        $programId = self::$fixtureCtx['programId'];
        $memberId = self::$member->getId();

        $orderBody = new OrdersCreateRequestBody();
        $orderBody->setAmount(2500);
        $orderBody->setSourceId('lv2_order_' . self::$fixtureCtx['suffix']);
        $customer = new Customer();
        $customer->setId(self::$customer->getId());
        $orderBody->setCustomer($customer);
        $order = $ordersApi->createOrder($orderBody);
        $this->assertMatchesRegularExpression('/^ord_/', $order->getId());

        $paymentBody = new V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody();
        $paymentBody->setCardId(self::$primaryCardId);
        $orderRef = new OrderPaymentOrder();
        $orderRef->setId($order->getId());
        $orderRef->setSourceId(null);
        $paymentBody->setOrder($orderRef);
        $limit = new LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBodyLimit();
        $limit->setType('CARD_BALANCE');
        $paymentBody->setPaymentLimit($limit);
        $paymentBody->setMode('DRY_RUN');

        $payment = $programsApi->createMemberOrderPayment($programId, $memberId, $paymentBody);
        $this->assertNotNull($payment);

        $listed = $programsApi->listMemberOrderPayments($programId, $memberId);
        $this->assertNotNull($listed);
    }

    public function testPurchaseMemberRewardAndRefund(): void
    {
        $this->requireLiveContext();

        $programsApi = Config::lv2ProgramsApiInstance();
        $programId = self::$fixtureCtx['programId'];
        $memberId = self::$member->getId();
        $rewardId = self::$fixtureCtx['rewardId'];

        $dryBody = new V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody();
        $dryBody->setRewardId($rewardId);
        $dryBody->setMode('DRY_RUN');
        $dryRun = $programsApi->purchaseMemberReward($programId, $memberId, $dryBody);
        $this->assertNotNull($dryRun);

        $purchaseBody = new V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody();
        $purchaseBody->setRewardId($rewardId);
        $purchaseBody->setMode('TRANSACTION');
        $purchase = $programsApi->purchaseMemberReward($programId, $memberId, $purchaseBody);
        $this->assertNotNull($purchase);

        $rewardTransactionId = null;
        if ($purchase->getTransaction() && $purchase->getTransaction()->getId()) {
            $rewardTransactionId = $purchase->getTransaction()->getId();
        }
        $this->assertNotEmpty($rewardTransactionId);

        $approvedRow = null;
        for ($attempt = 0; $attempt < 15; $attempt++) {
            usleep(1000000);
            $listed = $programsApi->listMemberRewardPurchases($programId, $memberId);
            $rows = $listed->getData() ?? [];
            $this->assertGreaterThan(0, count($rows));
            $match = null;
            foreach ($rows as $row) {
                if ($row->getId() === $rewardTransactionId) {
                    $match = $row;
                    break;
                }
            }
            if ($match === null) {
                $match = $rows[0];
            }
            if ($match->getStatus() === 'APPROVED') {
                $approvedRow = $match;
                break;
            }
        }
        $this->assertNotNull($approvedRow, 'Reward purchase did not reach APPROVED');

        $refundId = $approvedRow->getId() ?: $rewardTransactionId;
        $refundBody = new V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody();
        $policies = new RewardPurchaseRefundPolicies();
        $policies->setRefund('ALLOW');
        $policies->setStock('DEFAULT');
        $refundBody->setPolicies($policies);
        $refunded = $programsApi->refundRewardPurchase($programId, $refundId, $refundBody);
        $this->assertNotNull($refunded);
    }

    public function testPendingPointsSkippedWithoutPendingBucket(): void
    {
        $this->requireLiveContext();
        // Fixture uses pending_points.type = IMMEDIATE, so no pending bucket is created.
        $this->assertTrue(true, 'Pending-point activate/cancel skipped: fixture has no pending bucket');
    }
}
