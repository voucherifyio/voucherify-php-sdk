<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/validations.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class ValidationsTest extends TestCase {
    private $validationsApiInstance;
    private $voucherify;
    private $voucherCode;
    private $productId;
    private $customer;

    protected function setUp(): void {
        $this->validationsApiInstance = Config::validationsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
        $this->voucherCode = $this->voucherify->getVoucher()->code;
        $this->productId = $this->voucherify->getProduct()->id;
        $this->customer = $this->voucherify->getCustomer();
    }

    public function testCreateValidateStackedApplicableDiscounts() {
        $validationResult = validateStackedDiscounts($this->validationsApiInstance, $this->voucherCode, $this->productId, $this->customer, 20000);

        $snapshot = 'validations/validatedStackedApplicableDiscounts';
        $keysToRemove = ['id', 'product_id', 'customer_id', 'tracking_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $validationResult, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating validate stacked applicable discounts');
    }

    public function testCreateValidateStackedInapplicableDiscounts() {
        $voucherMoreThanValidationRule = $this->voucherify->getVoucherWithMoreThanValidationRule()->code;
        $validationResult = validateStackedDiscounts($this->validationsApiInstance, $voucherMoreThanValidationRule, $this->productId, $this->customer, 1000);

        $snapshot = 'validations/validatedStackedInapplicableDiscounts';
        $keysToRemove = ['id', 'details', 'request_id', 'tracking_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $validationResult, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating validate stacked inapplicable discounts');
    }

    public function testCreateValidateStackedSkippedDiscounts() {
        $randomVoucherCodes = generateRandomVoucherCodes($this->voucherCode, 29);
        $voucherCodes = array_merge([$this->voucherCode], $randomVoucherCodes);

        $validationResult = validateStackedDiscounts($this->validationsApiInstance, $voucherCodes, $this->productId, $this->customer, 20000);
        
        $snapshot = 'validations/validatedStackedSkippedDiscounts';
        $keysToRemove = ['id', 'details', 'product_id', 'details', 'tracking_id', 'request_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $validationResult, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating validate stacked skipped discounts');
    }
}
?>