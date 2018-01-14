<?php

namespace Voucherify;

class Validations
{
    /**
     * @var \Voucherify\ApiClient
     */
    private $client;

    /**
     * @var \Voucherify\Promotions
     */
    private $promotions;

    /**
     * @param \Voucherify\ApiClient $client
     */
    public function __construct($client, $dependencies)
    {
        $this->client = $client;
        $this->promotions = $dependencies["promotions"];
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

    /**
     * @param string|array|stdClass $params Voucher code or Promotion data
     * @param array|stdClass $context Voucher validation context data
     *
     * Validate voucher or promotion.
     *
     * @throws \Voucherify\ClientException
     */
    public function validate($params, $context = null)
    {
        $validatePromotion = is_array($params) || is_object($params);

        if ($validatePromotion) {
            return $this->promotions->validate($params);
        }
        return $this->validateVoucher($params, $context);
    }
}