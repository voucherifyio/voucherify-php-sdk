<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\ValidationRulesApi;
use OpenAPI\Client\Model\ValidationRulesAssignmentsCreateRequestBody;
use OpenAPI\Client\Model\ValidationRulesAssignmentsCreateResponseBody;

function createValidationRuleAssignment(ValidationRulesApi $validationRulesApiInstance, string $validationRuleId, string $voucherCode): ?ValidationRulesAssignmentsCreateResponseBody {
    $validationRule = new ValidationRulesAssignmentsCreateRequestBody();
    $validationRule->setRelatedObjectId('voucher');
    $validationRule->setRelatedObjectId($voucherCode);

    try {
        $createdValRule = $validationRulesApiInstance->createValidationRuleAssignment($validationRuleId, null, $validationRule);
        return $createdValRule;
    } catch (Error $err) {
        error_log('Error during creating validation rule: ' . $err);
        return null;
    }
}
?>