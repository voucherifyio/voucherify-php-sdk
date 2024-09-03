<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/vouchers.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class VouchersTest extends TestCase {
    private $vouchersApiInstance;
    private $voucherify;
    private $voucherCode;

    protected function setUp(): void {
        $this->vouchersApiInstance = Config::vouchersApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
        $this->voucherCode = $this->voucherify->getVoucher()->code;
    }

    public function testGetPreviouslyCreatedVoucher() {
        $voucher = getVoucher($this->vouchersApiInstance, $this->voucherCode);

        $snapshot = 'vouchers/voucher';
        $keysToRemove = ['id', 'code', 'campaign', 'campaign_id', 'url', 'created_at', 'updated_at', 'holder_id', 'related_object_id', 'rule_id', 'count'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $voucher, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with getting previously created voucher');
    }

    public function testDisableVoucher() {
        $disabledVoucher = disableVoucher($this->vouchersApiInstance, $this->voucherCode);
        
        $snapshot = 'vouchers/disabledVoucher';
        $keysToRemove = ['id', 'code', 'campaign', 'campaign_id', 'url', 'created_at', 'updated_at', 'holder_id', 'related_object_id', 'rule_id', 'count'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $disabledVoucher, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with disabling voucher');
    }

    public function testEnableVoucher() {
        $enabledVoucher = enableVoucher($this->vouchersApiInstance, $this->voucherCode);

        $snapshot = 'vouchers/voucher';
        $keysToRemove = ['id', 'code', 'campaign', 'campaign_id', 'url', 'created_at', 'updated_at', 'holder_id', 'related_object_id', 'rule_id', 'count'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $enabledVoucher, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with enabling voucher');
    }

    public function testUpdateLoyaltyCardBalance() {
        $updatedLoyaltyCard = updateLoyaltyCardbalance($this->vouchersApiInstance, $this->voucherify->getLoyaltyCard()->code);
        
        $snapshot = 'vouchers/updatedLoyaltyCardBalance';
        $keysToRemove = ['id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $updatedLoyaltyCard, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with updating loyalty card balance');
    }
}

?>