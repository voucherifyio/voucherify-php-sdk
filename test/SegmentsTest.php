<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class SegmentsTest extends PHPUnit_Framework_TestCase
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
 
    public function testCreateSegmentRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/segments/", [
                 "name" => "test-voucher"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->segments->create((object)[
              "name" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/segments/", [
                 "name" => "test-voucher"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->segments->create([
              "name" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetSegmentRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/segments/test-segment-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->segments->get("test-segment-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDeleteSegmentRule()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/segments/test-segement-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->segments->delete("test-segement-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
