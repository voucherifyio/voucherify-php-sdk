<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\CustomersApi;
use OpenAPI\Client\Model\CustomersCreateRequestBody;
use OpenAPI\Client\Model\CustomersCreateResponseBody;
use OpenAPI\Client\Model\ReferrerAddress;

function createCustomer(CustomersApi $customersApiInstance): ?CustomersCreateResponseBody {
    $customerRequestBody = new CustomersCreateRequestBody();
    $address = new ReferrerAddress();

    $address->setCountry('US');
    $address->setCity('New York');
    $address->setLine1('5th Avenue');
    $address->setLine2('1/2');
    $address->setPostalCode('11-111');
    
    $customerRequestBody->setSourceId(generateRandomString());
    $customerRequestBody->setName('John Doe');
    $customerRequestBody->setAddress($address);
    
    try {
        $createdCustomer = $customersApiInstance->createCustomer($customerRequestBody);
        return $createdCustomer;
    } catch (Error $err) {
        error_log('Error during creating customer: ' . $err);
        return null;
    }
}

function deleteCustomer(CustomersApi $customersApiInstance, string $customerId) {
    try {
        $deletedCustomer = $customersApiInstance->customerPermanentlyDeletion($customerId);
        return $deletedCustomer;
    } catch (Error $err) {
        error_log('Error during deleting customer: ' . $err);
        return null;
    }
}
?>