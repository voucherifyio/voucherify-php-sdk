<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/qualifications.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class QualificationsTest extends TestCase {
    private $qualificationsApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->qualificationsApiInstance = Config::qualificationsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCheckEligibility() {
        $customerId = $this->voucherify->getCustomer()->id;
        $checkedEligibility = checkEligibility($this->qualificationsApiInstance, $customerId, 5);

        $snapshot = 'qualifications/checkedEligibility';
        $keysToRemove = ['id', 'created_at', 'tracking_id', 'more_starting_after', 'redeemables'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $checkedEligibility, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with checking eligibility');
    }
}

?>