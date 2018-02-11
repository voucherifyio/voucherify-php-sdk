<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class CustomersTest extends PHPUnit_Framework_TestCase 
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
            "Content-Type: application/json",
            "X-App-Id: " . self::$apiId,
            "X-App-Token: " . self::$apiKey,
            "X-Voucherify-Channel: PHP-SDK"
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
            ->post("/customers/", [
                "name" => "customer name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->create((object)[
            "name" => "customer name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGet()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/customers/test-customer-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->get("test-customer-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/customers/")
            ->query([ "limit" => 3 ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->getList([ "limit" => 3 ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdateByObject()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/customers/test-customer-id", [
                "id" => "test-customer-id",
                "name" => "customer name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->update((object)[
            "id" => "test-customer-id",
            "name" => "customer name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdateByArray()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/customers/test-customer-id", [
                "id" => "test-customer-id",
                "name" => "customer name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->update([
            "id" => "test-customer-id",
            "name" => "customer name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDelete()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/customers/test-customer-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->customers->delete("test-customer-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
