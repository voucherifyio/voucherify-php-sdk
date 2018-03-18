<?php

use Voucherify\Utils;

class UtilsTest extends PHPUnit_Framework_TestCase
{
    public function testVerifyWebhookSignature()
    {
        // /////////////////////////////////////// HAPPY PATH (STRING)

        $signature = "776247e1a5ed607c7d1ad00d2b0f5760d4a8d5ab680b86acbcea2d3d56e55fa3";
        $data = "Example test message";
        $secretKey = "secret_01234567890_secret";

        $result = Utils::verifyWebhookSignature($signature, $data, $secretKey);
        $this->assertEquals($result, true);

        // /////////////////////////////////////// HAPPY PATH (OBJECT)

        $signature = "e87e23da6caa7407a6177cc84ba1b26f58e1a68e24f08eba6ee023c8932b111a";
        $data = (object)[
            "item1" => 123,
            "item2" => "message",
            "item3" => (object)[
                "a" => 1,
                "b" => 2
            ],
            "item4" => [ "a", "b", "c" ]
        ];
        $secretKey = "secret_01234567890_secret";

        $result = Utils::verifyWebhookSignature($signature, $data, $secretKey);
        $this->assertEquals($result, true);

        // /////////////////////////////////////// HAPPY PATH (ARRAY)

        $signature = "62cd3e5dcbce78cbfadc2b8f67cde4d6853b6cea467bbbf37328193662ee040e";
        $data = ["item_a", "item_b", "item_c"];
        $secretKey = "secret_01234567890_secret";

        $result = Utils::verifyWebhookSignature($signature, $data, $secretKey);
        $this->assertEquals($result, true);

        // /////////////////////////////////////// HAPPY PATH (NULL)

        $signature = "6a660d319bc87b480a48b68cd089d3c3f5e2c787a6feeb637cf0d62562560fba";
        $data = NULL;
        $secretKey = "secret_01234567890_secret";

        $result = Utils::verifyWebhookSignature($signature, $data, $secretKey);
        $this->assertEquals($result, true);

        // /////////////////////////////////////// UNHAPPY PATH (INVALID SIGNATURE)

        $signature = "invalid_signature";
        $data = "Example test message";
        $secretKey = "secret_01234567890_secret";

        $result = Utils::verifyWebhookSignature($signature, $message, $secretKey);

        $this->assertEquals($result, false);
    }
}