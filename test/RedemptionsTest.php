<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class RedemptionsTest extends PHPUnit_Framework_TestCase
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
 
    public function testRedeemVoucher()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem("test-code");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem("test-code", (object)[
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem("test-code", [
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    /**
     * DEPRECATED!
     */
    public function testRedeemVoucher_deprecated()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem([
            "voucher" => "test-code",
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRedeemVoucherWithTracking()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/")
            ->query([ "tracking_id" => "test-tracking-id" ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem("test-code", "test-tracking-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRedeemPromotionTier()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/tiers/test-promotion/redemption/", [
                "data" => [
                    "id" => "test_customer_id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem((object)[
            "id" => "test-promotion"
        ], (object)[
            "data" => [
                "id" => "test_customer_id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/promotions/tiers/test-promotion/redemption/", [
                "data" => [
                    "id" => "test_customer_id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->redeem([
            "id" => "test-promotion"
        ], [ 
            "data" => [
                "id" => "test_customer_id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGet()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/redemptions/test-redemption-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->get("test-redemption-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/redemptions/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->getList();

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetListByQuery()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/redemptions/")
            ->query([ "limit" => 100 ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->getList([ "limit" => 100 ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetForVoucher()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/vouchers/test-code/redemption/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->getForVoucher("test-code");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRollbackById()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRollbackWithCustomer()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id", (object)[
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id", [
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRollbackWithReason()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/")
            ->query([ "reason" => "test-reason" ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id", "test-reason");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testRollbackWithCustomerReasonAndTracking()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->query([
                "reason" => "test-reason",
                "tracking_id" => "test-tracking-id"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id", (object)[
            "reason" => "test-reason",
            "tracking_id" => "test-tracking-id",
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->query([
                "reason" => "test-reason",
                "tracking_id" => "test-tracking-id"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->redemptions->rollback("test-redemption-id", [
            "reason" => "test-reason",
            "tracking_id" => "test-tracking-id",
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}