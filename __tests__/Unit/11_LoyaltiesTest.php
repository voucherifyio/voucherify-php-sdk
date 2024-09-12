<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/loyalties.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class LoyaltiesTest extends TestCase
{
    private $loyaltiesApiInstance;
    private $voucherify;
    private $loyaltyCardCode;

    protected function setUp(): void
    {
        $this->loyaltiesApiInstance = Config::loyaltiesApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
        $this->loyaltyCardCode = $this->voucherify->getLoyaltyCard()->code;
    }

    public function testUpdateLoyaltyMemberCardBalanceBy1000Points()
    {
        $updatedLoyaltyCard = updateLoyaltyMemberCardbalance($this->loyaltiesApiInstance, $this->loyaltyCardCode);

        $snapshot = 'loyalties/updatedLoyaltyMemberCardBalanceBy1000Points';
        $keysToRemove = ['id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $updatedLoyaltyCard), 'Error during test with updating loyalty member card balance');
    }

    public function testListLoyaltyMemberCardTransactions()
    {
        $transactions = listLoyaltyMemberCardTransactions($this->loyaltiesApiInstance, $this->loyaltyCardCode);

        $snapshot = 'loyalties/listedLoyaltyMemberCardTransactions';
        $keysToRemove = ['id', 'voucher_id', 'campaign_id', 'created_at', 'campaign_id', 'source_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $transactions), 'Error during test with listing loyalty member card transactions');
    }
}
