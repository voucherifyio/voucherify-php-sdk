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
 
    public function testRedeemByCode()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/")
            ->reply(200, []);

        self::$client->redemptions->redeem("test-code");

        CurlMock::done();
    }

    /**
     * DEPRECATED!
     */
    public function testRedeemByVoucher_deprecated()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, []);

        self::$client->redemptions->redeem([
            "voucher" => "test-code",
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRedeemByVoucherObject()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, []);

        self::$client->redemptions->redeem("test-code", (object)[
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRedeemByVoucherArray()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, []);

        self::$client->redemptions->redeem("test-code", [
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRedeemWithTracking()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/redemption/")
            ->query([ "tracking_id" => "test-tracking-id" ])
            ->reply(200, []);

        self::$client->redemptions->redeem("test-code", "test-tracking-id");

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/redemptions/")
            ->reply(200, []);

        self::$client->redemptions->getList();

        CurlMock::done();
    }

    public function testGetListByQuery()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/redemptions/")
            ->query([ "limit" => 100 ])
            ->reply(200, []);

        self::$client->redemptions->getList([ "limit" => 100 ]);

        CurlMock::done();
    }

    public function testGetForVoucher()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/vouchers/test-code/redemption/")
            ->reply(200, []);

        self::$client->redemptions->getForVoucher("test-code");

        CurlMock::done();
    }

    public function testRollbackById()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/")
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id");

        CurlMock::done();
    }

    public function testRollbackWithCustomerByObject()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id", (object)[
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRollbackWithCustomerByArray()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/", [
                "customer" => [
                    "id" => "test-customer-id"
                ]
            ])
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id", [
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRollbackWithReason()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/redemptions/test-redemption-id/rollback/")
            ->query([ "reason" => "test-reason" ])
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id", "test-reason");

        CurlMock::done();
    }

    public function testRollbackWithCustomerReasonAndTrackingByObject()
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
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id", (object)[
            "reason" => "test-reason",
            "tracking_id" => "test-tracking-id",
            "customer" => (object)[
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }

    public function testRollbackWithCustomerReasonAndTrackingByArray()
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
            ->reply(200, []);

        self::$client->redemptions->rollback("test-redemption-id", [
            "reason" => "test-reason",
            "tracking_id" => "test-tracking-id",
            "customer" => [
                "id" => "test-customer-id"
            ]
        ]);

        CurlMock::done();
    }
}