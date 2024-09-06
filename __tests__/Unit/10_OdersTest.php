<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/orders.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class OrdersTest extends TestCase
{
    private $ordersApiInstance;
    private $voucherify;

    protected function setUp(): void
    {
        $this->ordersApiInstance = Config::ordersApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateOrder()
    {
        $createdOrder = createOrder($this->ordersApiInstance, $this->voucherify->getCustomer()->id);

        $snapshot = 'orders/createdOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);   
        
        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdOrder), 'Error during test with creating order');

        $createdOrderJSON = json_decode($createdOrder);
        $this->voucherify->setOrder($createdOrderJSON);
    }

    public function testGetPreviouslyStatusCreatedOrder()
    {
        $order = getOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);

        $snapshot = 'orders/getOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $order), 'Error during test with getting previously created order');
    }

    public function testUpdateOrderAsPaid()
    {
        $updatedOrder = updateOrder($this->ordersApiInstance, $this->voucherify->getOrder()->id);
        $snapshot = 'orders/updatedOrder';
        $keysToRemove = ['id', 'created_at', 'customer_id', 'updated_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $updatedOrder), 'Error during test with updating order');
    }
}
