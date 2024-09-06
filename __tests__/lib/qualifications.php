<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\QualificationsApi;
use OpenAPI\Client\Model\Customer;
use OpenAPI\Client\Model\QualificationsCheckEligibilityRequestBody;
use OpenAPI\Client\Model\QualificationsCheckEligibilityResponseBody;
use OpenAPI\Client\Model\QualificationsOption;
use OpenAPI\Client\Model\OrderCalculated;
use OpenAPI\Client\Model\QualificationsFiltersCondition;
use OpenAPI\Client\Model\QualificationsOptionFilters;
use OpenAPI\Client\Model\QualificationsOptionFiltersResourceType;

function checkEligibility(QualificationsApi $qualificationsApiInstance, string $customerId, int $limit): ?QualificationsCheckEligibilityResponseBody
{
    $qualification = new QualificationsCheckEligibilityRequestBody();
    $qualificationOption = new QualificationsOption();
    $resourceType = new QualificationsOptionFiltersResourceType();
    $filters = new QualificationsOptionFilters();
    $filterCondition = new QualificationsFiltersCondition();
    $customer = new Customer();
    $order = new OrderCalculated();

    $customer->setId($customerId);
    $order->setAmount(20000);
    $filterCondition->setIn(['voucher']);
    $resourceType->setConditions($filterCondition);
    $filters->setResourceType($resourceType);
    $qualificationOption->setLimit($limit);
    $qualificationOption->setFilters($filters);

    $qualification->setCustomer($customer);
    $qualification->setOrder($order);
    $qualification->setOptions($qualificationOption);

    try {
        $checkedEligibity = $qualificationsApiInstance->checkEligibility($qualification);
        return $checkedEligibity;
    } catch (Error $err) {
        error_log('Error during checking eligibility: ' . $err);
        return null;
    }
}
