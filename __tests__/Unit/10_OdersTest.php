<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/orders.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class OrdersTest extends TestCase {
    private $ordersApiInstance;
    private $voucherify;

    protected function setUp(): void {
        $this->ordersApiInstance = Config::ordersApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateOrder() {
        $createdOrder = createOrder($this->ordersApiInstance, $this->voucherify->getCustomer()->id);

        $snapshot = 'orders/createdOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $createdOrder, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating order');

        $createdOrderJSON = json_decode($createdOrder);
        $this->voucherify->setOrder($createdOrderJSON);
    }

    public function testGetPreviouslyStatusCreatedOrder() {
        $order = getOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);

        $snapshot = 'orders/createdOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $order, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with creating order');
    }

    public function testUpdateOrderAsPaid() {
        $updatedOrder = updateOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);

        $snapshot = 'orders/updatedOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id', 'updated_at'];
        [$filteredSnapshot, $filteredResponse] = validatePayloads($snapshot, $updatedOrder, $keysToRemove);

        $this->assertEquals($filteredSnapshot, $filteredResponse, 'Error during test with updating order');
    }
}
?>