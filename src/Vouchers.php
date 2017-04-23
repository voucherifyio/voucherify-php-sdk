<?php

namespace Voucherify;

class Vouchers
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
     * @param stdClass $voucher
     *
     * Create voucher.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($voucher)
    {
        if (isset($voucher->code)) {
            return $this->client->post("/vouchers/" . rawurlencode($voucher->code), $voucher, null);
        }
        else {
            return $this->client->post("/vouchers/", $voucher, null);
        }
    }

    /**
     * @param string $code
     *
     * Get voucher details.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($code)
    {
        return $this->client->get("/vouchers/" . rawurlencode($code), null);
    }

    /**
     * @param array|stdClass $voucher
     *
     * Update voucher.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($voucher)
    {
        $code = "";

        if (is_array($voucher)) {
            $code = $voucher["code"];
        }
        elseif (is_object($voucher)) {
            $code = $voucher->code;
        }

        return $this->client->put("/vouchers/" . rawurlencode($code), $voucher, null);
    }

    /**
     * @param string $code
     * @param boolean|null $force
     *
     * Delete voucher by code.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($code, $force = null)
    {
        $options = (object)[];
        $options->qs = [ "force" => ($force ? "true" : "false") ];

        return $this->client->delete("/vouchers/" . rawurlencode($code), null, $options);
    }

    /**
     * @param array|stdClass $filter
     *
     * Get a filtered list of vouchers. The filter can include following properties:
     * - limit      - number (default 10)
     * - page       - number (default 0)
     * - campaign   - string
     * - category   - string
     *
     * @throws \Voucherify\ClientException
     */
    public function getList($filter = null)
    {
        return $this->client->get("/vouchers/", $filter);
    }

    /**
     * @param string $code
     *
     * Enable voucher with given code.
     *
     * @throws \Voucherify\ClientException
     */
    public function enable($code)
    {
        return $this->client->post("/vouchers/" . rawurlencode($code) . "/enable", null, null);
    }

    /**
     * @param string $code
     *
     * Disable voucher with given code.
     *
     * @throws \Voucherify\ClientException
     */
    public function disable($code)
    {
        return $this->client->post("/vouchers/" . rawurlencode($code) . "/disable", null, null);
    }

    /**
     * @param string $code
     *
     * Increase Gif-Card type voucher's balance.
     *
     * @throws \Voucherify\ClientException
     */
    public function addBalance($code, $balance)
    {
        $payload = (object)[];
        $payload->amount = $balance;

        return $this->client->post("/vouchers/" . rawurlencode($code) . "/balance", $payload, null);
    }

    /**
     * @param stdClass[] $vouchers
     *
     * Import vouchers to the repository.
     */
    public function import($vouchers)
    {
        return $this->client->post("/vouchers/import", $vouchers);
    }
}