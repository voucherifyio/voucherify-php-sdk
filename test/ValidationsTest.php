<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class ValidationsTest extends PHPUnit_Framework_TestCase
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
 
    public function testValidateVoucher()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/validate")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validations->validateVoucher("test-code");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/validate", [
                "customer" => "test-customer"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validations->validateVoucher("test-code", [
            "customer" => "test-customer"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/test-code/validate", [
                "customer" => "test-customer"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validations->validateVoucher("test-code", (object)[
            "customer" => "test-customer"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
