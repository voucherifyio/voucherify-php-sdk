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

    public function testCreate()
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

    public function testGet()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/test-rule-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->get("test-rule-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetList()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->getList();

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/?limit=10")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->getList([ "limit" => 10 ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testUpadate()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/validation-rules/test-rule-id", [
                "campaign" => "test-campaign"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->update((object)[
            "id" => "test-rule-id",
            "campaign" => "test-campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->put("/validation-rules/test-rule-id", [
                  "campaign" => "test-campaign"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->update([
            "id" => "test-rule-id",
            "campaign" => "test-campaign"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDelete()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/validation-rules/test-rule-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->delete("test-rule-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testCreateAssignment()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/validation-rules/test-rule-id/assignments", [
                "name" => "test-assignment",
                "voucher" => "test-voucher"
            ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->createAssignment("test-rule-id", (object)[
            "name" => "test-assignment",
            "voucher" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->post("/validation-rules/test-rule-id/assignments", [
                 "name" => "test-assignment",
                 "voucher" => "test-voucher"
             ])
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->createAssignment("test-rule-id", [
            "name" => "test-assignment",
            "voucher" => "test-voucher"
        ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testGetAssignments()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/test-rule-id/assignments")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->getAssignments("test-rule-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->get("/validation-rules/test-rule-id/assignments?limit=10")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->getAssignments("test-rule-id", [ "limit" => 10 ]);

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }

    public function testDeleteAssignment()
    {
        CurlMock::register("https://api.voucherify.io/v1", self::$headers)
            ->delete("/validation-rules/test-rule-id/assignments/test-assignment-id")
            ->reply(200, [ "status" => "ok" ]);

        $result = self::$client->validationRules->deleteAssignment("test-rule-id", "test-assignment-id");

        $this->assertEquals($result, (object)[ "status" => "ok" ]);

        CurlMock::done();
    }
}
