<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class OrdersTest extends PHPUnit_Framework_TestCase 
{ 
    protected static $headers;
    protected static $apiId;
    protected static $apiKey;
    protected static $client;

    public static function setUpBeforeClass()
    {
        self::$apiId = "c70a6f00-cf91-4756-9df5-47628850002b";
        self::$apiKey = "3266b9f8-e246-4f79-bdf0-833929b1380c";
        self::$headers = [
            "content-type: application/json",
            "x-app-id: " . self::$apiId,
            "x-app-token: " . self::$apiKey,
            "x-voucherify-channel: PHP-SDK"
        ];
        self::$client = new VoucherifyClient(self::$apiId, self::$apiKey);

        CurlMock::enable();
    }

    public static function tearDownAfterClass()
    {
        CurlMock::disable();
    }
 
    public function testCreate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/orders/", [
                "customer" => [ "name" => "customer name" ],
                "amount" => 20050
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->orders->create((object)[
            "customer" => [ "name" => "customer name" ],
            "amount" => 20050
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGet()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/orders/test-order-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->orders->get("test-order-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdateByObject()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/orders/test-order-id", [
                "id" => "test-order-id",
                "status" => "PAID"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->orders->update((object)[
            "id" => "test-order-id",
            "status" => "PAID"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdateByArray()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/orders/test-order-id", [
                "id" => "test-order-id",
                "status" => "PAID"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->orders->update([
            "id" => "test-order-id",
            "status" => "PAID"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/orders/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->orders->getList();

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
