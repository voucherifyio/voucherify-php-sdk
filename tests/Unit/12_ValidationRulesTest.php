<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/validationRules.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class ValidationRulesTest extends TestCase
{
    private $validationRulesApiInstance;
    private $voucherify;

    protected function setUp(): void
    {
        $this->validationRulesApiInstance = Config::validationRulesApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateValidationRule()
    {
        $validationRuleId = $this->voucherify->getValidationRule()->id;
        $voucherCode = $this->voucherify->getVoucher()->code;
        $createdValRule = createValidationRuleAssignment($this->validationRulesApiInstance, $validationRuleId, $voucherCode);

        $snapshot = 'validationRules/createdValidationRule';
        $keysToRemove = ['id', 'rule_id', 'related_object_id', 'created_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdValRule), 'Error during test with creating validation rule');
    }
}
