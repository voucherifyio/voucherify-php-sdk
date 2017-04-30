<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class ProductsTest extends PHPUnit_Framework_TestCase
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
            ->post("/products/", [
                 "name" => "test-product"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->create((object)[
            "name" => "test-product"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/products/", [
                "name" => "test-product"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->create([
            "name" => "test-product"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGet()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/products/test-product-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->get("test-product-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/products/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->getList();

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/products/?limit=10")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->getList([ "limit" => 10 ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/products/test-product-id", [
                "name" => "Product Name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->update([
            "id" => "test-product-id",
            "name" => "Product Name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDelete()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/products/test-product-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->delete("test-product-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testCreateSku()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/products/test-product-id/skus", [
                 "sku" => "test-sku"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->createSku("test-product-id", (object)[
            "sku" => "test-sku"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/products/test-product-id/skus", [
                 "sku" => "test-sku"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->createSku("test-product-id", [
            "sku" => "test-sku"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetSku()
    {
         CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/products/test-product-id/skus/test-sku-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->getSku("test-product-id", "test-sku-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetSkus()
    {
         CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/products/test-product-id/skus/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->getSkus("test-product-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpdateSku()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/products/test-product-id/skus/test-sku-id", [
                "attributes" => "attributes-object"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->updateSku("test-product-id", (object)[
            "id" => "test-sku-id",
            "attributes" => "attributes-object"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/products/test-product-id/skus/test-sku-id", [
                "attributes" => "attributes-object"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->updateSku("test-product-id", [
            "id" => "test-sku-id",
            "attributes" => "attributes-object"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDeleteSku()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/products/test-product-id/skus/test-sku-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->products->deleteSku("test-product-id", "test-sku-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
