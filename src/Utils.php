<?php

namespace Voucherify;

class Utils
{
    /**
     * @param array|stdClass $params Params object
     * 
     * Verify webhook signature
     *
     * @throws \Voucherify\ClientException
     */
    public static function verifyWebhookSignature($signature, $message, $secretKey)
    {
        $data = "";

        if (is_string($message)) {
            $data = $message;
        } else {
            $data = json_encode($message);
        }
        return hash_hmac("sha256", $data, $secretKey) == $signature;
    }
}


