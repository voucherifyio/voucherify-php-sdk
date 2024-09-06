<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/validations.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class ValidationsTest extends TestCase
{
    private $validationsApiInstance;
    private $voucherify;
    private $voucherCode;
    private $productId;
    private $customer;

    protected function setUp(): void
    {
        $this->validationsApiInstance = Config::validationsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
        $this->voucherCode = $this->voucherify->getVoucher()->code;
        $this->productId = $this->voucherify->getProduct()->id;
        $this->customer = $this->voucherify->getCustomer();
    }

    public function testCreateValidateStackedApplicableDiscounts()
    {
        $validationResult = validateStackedDiscounts($this->validationsApiInstance, $this->voucherCode, $this->productId, $this->customer, 20000);
        $snapshot = 'validations/validatedStackedApplicableDiscounts';
        $keysToRemove = ['id', 'product_id', 'customer_id', 'tracking_id', 'stacking_rules', 'repeat', 'skip_initially', 'target'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);
        $this->assertTrue(validateDeepMatch($filteredSnapshot, $validationResult), 'Error during test with creating validate stacked applicable discounts');
        $this->assertThat($validationResult->getStackingRules()->getRedeemablesApplicationMode(), $this->logicalOr($this->stringContains('ALL'), $this->stringContains('PARTIAL')));
        $this->assertIsNumeric($validationResult->getStackingRules()->getRedeemablesLimit());
    }


    public function testCreateValidateStackedInapplicableDiscounts()
    {
        $voucherMoreThanValidationRule = $this->voucherify->getVoucherWithMoreThanValidationRule()->code;
        $validationResult = validateStackedDiscounts($this->validationsApiInstance, $voucherMoreThanValidationRule, $this->productId, $this->customer, 1000);

        $snapshot = 'validations/validatedStackedInapplicableDiscounts';
        $keysToRemove = ['id', 'details', 'request_id', 'tracking_id', 'stacking_rules', 'redeemables'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $validationResult), 'Error during test with creating validate stacked inapplicable discounts');
        $this->assertIsArray($validationResult->getRedeemables());
        $this->assertThat($validationResult->getStackingRules()->getRedeemablesApplicationMode(), $this->logicalOr($this->stringContains('ALL'), $this->stringContains('PARTIAL')));
        $this->assertIsNumeric($validationResult->getStackingRules()->getRedeemablesLimit());
    }
}
