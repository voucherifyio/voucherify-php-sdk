<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class DistributionsTest extends PHPUnit_Framework_TestCase 
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
 
    public function testPublishByCampaignName()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/publish", [
                "campaign" => "test-campaign"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->distributions->publish("test-campaign");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testPublishByVoucherObject()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/publish", [
                "campaign" => "test-campaign",
                "voucher" => "test-voucher"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->distributions->publish((object)[
            "campaign" => "test-campaign",
            "voucher" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testPublishByVoucherArray()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/vouchers/publish", [
                "campaign" => "test-campaign",
                "voucher" => "test-voucher"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->distributions->publish([
            "campaign" => "test-campaign",
            "voucher" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
