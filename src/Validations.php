<?php

namespace Voucherify;

class Validations
{
    /**
     * @var \Voucherify\ApiClient
     */
    private $client;

    /**
     * @param \Voucherify\ApiClient $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param string $code Voucher code
     * @param array|stdClass $params Params object
     * 
     * Validate voucher.
     *
     * @throws \Voucherify\ClientException
     */
    public function validateVoucher($code, $params = null)
    {
        return $this->client->post("/vouchers/" . rawurlencode($code) . "/validate", $params);
    }
}