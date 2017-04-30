<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class ValidationRulesTest extends PHPUnit_Framework_TestCase
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
 
    public function testCreateValidationRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/validation-rules/", [
                "voucher_code" => "test-voucher"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->create((object)[
             "voucher_code" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/validation-rules/", [
                 "voucher_code" => "test-voucher"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->create([
             "voucher_code" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetValidationRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/test-rule-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->get("test-rule-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpadateValidationRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/validation-rules/test-rule-id", [
                "campaign" => "test-campaign"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->update("test-rule-id", (object)[
             "campaign" => "test-campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/validation-rules/test-rule-id", [
                  "campaign" => "test-campaign"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->update("test-rule-id", [
              "campaign" => "test-campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDeleteValidationRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/validation-rules/test-rule-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->delete("test-rule-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
