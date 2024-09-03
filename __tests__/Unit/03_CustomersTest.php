<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/customers.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class CustomersTest extends TestCase {
    private $customersApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->customersApiInstance = Config::customersApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateCustomer() {
        $createdCustomer = createCustomer($this->customersApiInstance);

        $snapshot = 'customers/createdCustomer';
        $keysToRemove = ['id', 'source_id', 'created_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdCustomer, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating customer');

        $createdCustomerJSON = json_decode($createdCustomer);
        $this->voucherify->setCustomer($createdCustomerJSON);

    }

    public function testCreateAndDeleteCustomer() {
        $createdCustomer = createCustomer($this->customersApiInstance);
        $deletedCustomer = deleteCustomer($this->customersApiInstance, $createdCustomer->getId());

        $createdCustomerSnapshot = 'customers/createdCustomer';
        $deletedCustomerSnapshot = 'customers/deletedCustomerPermanently';
        $keysToRemove = ['id', 'source_id', 'created_at', 'related_object_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($createdCustomerSnapshot, $createdCustomer, $keysToRemove);
        [$filteredSnapshot2, $filteredResponse2] = validatePayloads($deletedCustomerSnapshot, $deletedCustomer, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating customer');
        $this->assertEquals($filteredSnapshot2, $filteredResponse2, 'Error during test with deleting customer permanently');
    }
}
?>