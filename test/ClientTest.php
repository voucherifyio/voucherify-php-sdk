<?php

use Voucherify\Test\Helpers\CurlMock;

use Voucherify\VoucherifyClient;
use Voucherify\ClientException;

class ClientTest extends PHPUnit_Framework_TestCase 
{ 
    protected static $headers;
    protected static $apiId;
    Protected static $apiKey;

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

        CurlMock::enable();
    }

    public static function tearDownAfterClass()
    {
        CurlMock::disable();
    }

    public function testInitialization()
    {
        try {
            $client = new VoucherifyClient(null, self::$apiKey);
        }
        catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "ApiId is required");
        }

        try {
            $client = new VoucherifyClient(self::$apiId, null);
        }
        catch (Exception $e) {
            $this->assertEquals($e->getMessage(), "ApiKey is required");
        }
    }
    
    public function testErrorHandling()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/customers/", [ "name" => "customer name" ])
            ->reply(400, [
                "message" => "Duplicate resource key",
                "details" => "Campaign with name: test campaign already exists.",
                "key" => "duplicate_resource_key"
            ]);

        try {
            $client = new VoucherifyClient(self::$apiId, self::$apiKey);
            $client->customers->create([ "name" => "customer name"]);
        }
        catch (ClientException $e) {
            $this->assertEquals($e, new ClientException([
                "code" => 400,
                "message" => "Duplicate resource key",
                "details" => "Campaign with name: test campaign already exists.",
                "key" => "duplicate_resource_key"
            ]));
        }
    }
}