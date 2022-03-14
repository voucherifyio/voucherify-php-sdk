<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class PromotionsTest extends PHPUnit_Framework_TestCase
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
            ->post("/campaigns", [
                "name" => "test campaign",
                "campaign_type" => "PROMOTION"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->create((object)[
            "name" => "test campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testValidate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/validation", [
                "data" => "test"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->validate((object)[
            "data" => "test"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/validation", [
                "data" => "test"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->validate([
            "data" => "test"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTiersCreate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/test_promotion/tiers", [
                "name" => "test promotion tier name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->create("test_promotion", (object)[
            "name" => "test promotion tier name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTiersGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/promotions/test_promotion/tiers")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->getList("test_promotion");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTiersGetAvailable()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/promotions/tiers")
            ->query([ "is_available" => "true" ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->getAvailable();

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTierRedeem()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/tiers/test_promotion/redemption/", [
                "data" => [
                    "id" => "test_customer_id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->redeem("test_promotion", [
            "data" => [
                "id" => "test_customer_id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTiersUpdate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/promotions/tiers/test_tier", [
                "id" => "test_tier",
                "name" => "test promotion tier name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->update((object)[
            "id" => "test_tier",
            "name" => "test promotion tier name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/promotions/tiers/test_tier", [
                "id" => "test_tier",
                "name" => "test promotion tier name"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->update([
            "id" => "test_tier",
            "name" => "test promotion tier name"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testTiersDelete()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/promotions/tiers/test_promotion_tier")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->promotions->tiers->delete("test_promotion_tier");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}