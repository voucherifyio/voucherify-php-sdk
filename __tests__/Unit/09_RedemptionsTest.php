<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/redemptions.php';
require_once __DIR__ . '/../lib/campaigns.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class RedemptionsTest extends TestCase {
    private $redemptionsApiInstance;
    private $campaignsApiInstance;
    private $voucherify;
    private $voucherCode;

    protected function setUp(): void {
        $this->redemptionsApiInstance = Config::redemptionsApiInstance();
        $this->campaignsApiInstance = Config::campaignsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
        $this->voucherCode = $this->voucherify->getVoucher()->code;
    }

    public function testRedeemStackedApplicableDiscounts() {
        //CANNOT TEST SNAPSHOT BECAUSE OF DYNAMIC KEY OBJECT. WE CAN REMOVE "Redemptions" PARENT OBJECT BUT THEN FIRST "Redemptions" 
        //OBJECT WILL BE REMOVED TOO. IN THAT CASE WE NEED TO TEST IT IN THE OTHER WAY THAN COMPARE SNAPSHOT
        $redemptionResult = redeemStackedDiscounts($this->redemptionsApiInstance, $this->voucherCode);

        $this->assertNotNull($redemptionResult);
        $this->assertIsArray($redemptionResult->getRedemptions());
        $this->assertNotEmpty($redemptionResult->getRedemptions());
        $this->assertIsArray($redemptionResult->getSkippedRedeemables());
        $this->assertIsArray($redemptionResult->getInapplicableRedeemables());
    }

    public function testRedeemStackedSkippedDiscounts() {
        $vouchers = generateAndReturnVouchersAddedToCampaign($this->campaignsApiInstance, $this->voucherify->getDiscountCampaign()->id, 30);
        $redemptionResult = redeemStackedDiscounts($this->redemptionsApiInstance, $vouchers);

        $this->assertNotNull($redemptionResult);
        $this->assertIsArray($redemptionResult->getRedemptions());
        $this->assertNotEmpty($redemptionResult->getRedemptions());
        $this->assertIsArray($redemptionResult->getSkippedRedeemables());
        $this->assertNotEmpty($redemptionResult->getSkippedRedeemables());
        $this->assertIsArray($redemptionResult->getInapplicableRedeemables());
    }
}
?> 