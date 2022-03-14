<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class CampaignsTest extends PHPUnit_Framework_TestCase 
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
                "name" => "test campaign"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->create((object)[
            "name" => "test campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testAddVoucher()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/campaigns/test%20campaign/vouchers/", [
                "params" => "test-params"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->addVoucher("test campaign", (object)[
            "params" => "test-params"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/campaigns/test%20campaign/vouchers/", null)
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->addVoucher("test campaign");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testAddVoucherWithCode()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/campaigns/test%20campaign/vouchers/test-code", [
                "params" => "test-params"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->addVoucherWithCode("test campaign", "test-code", (object)[
            "params" => "test-params"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/campaigns/test%20campaign/vouchers/test-code", null)
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->addVoucherWithCode("test campaign", "test-code");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testImportVouchers()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/campaigns/test%20campaign/import", [
                [ "code" => "test-code" ]
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->importVouchers("test campaign", (object)[
            [ "code" => "test-code" ]
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDelete()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/campaigns/test%20campaign")
            ->query([ "force" => "false" ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->delete("test campaign");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDeletePermamently()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/campaigns/test%20campaign")
            ->query([ "force" => "true" ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->campaigns->delete("test campaign", true);
        
        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}