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
        // TODO
    }
}
