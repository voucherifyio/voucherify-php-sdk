<?php

namespace Voucherify;

class Redemptions
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
     * @param string|array $code Voucher code or array with voucher (code), customer profile and order amount
     * @param string|null $params Provided tracking id
     *
     * Redeem voucher
     *
     * @throws \Voucherify\ClientException
     */
    public function redeem($code, $params = null)
    {
        $payload = null;
        $options = null;

        if (is_string($code) && !is_string($params)) {
            $payload = $params;
        }
        if (is_array($code)) {
            $payload = $code;
            $code = $payload["voucher"];
            unset($payload["voucher"]);
        }

        // Backward compatibility - Check if params is string -> tracking_id
        if (is_string($params)) {
            $options = (object)[];
            $options->qs = ["tracking_id" => $params];
        }

        return $this->client->post("/vouchers/" . rawurlencode($code) . "/redemption/", $payload, $options);
    }

    /**
     * @param string| $redemptionId
     *
     * Get redemption.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($redemptionId)
    {
        return $this->client->get("/redemptions/" . rawurlencode($redemptionId));
    }

    /**
     * @param array|stdClass $filter
     *
     * Get a filtered list of redemptions. The filter can include following properties:
     * - limit      - number (default 100)
     * - page       - number (default 0)
     * - start_date - string (ISO8601 format, default is the beginning of current month)
     * - end_date   - string (ISO8601 format, default is the end of current month)
     * - result     - string (SUCCESS|FAILURE)
     * - customer   - string
     *
     * @throws \Voucherify\ClientException
     */
    public function getList($filter = null)
    {
        return $this->client->get("/redemptions/", $filter);
    }

    /**
     * @param string $code
     *
     * Get voucher redemption
     *
     * @throws \Voucherify\ClientException
     */
    public function getForVoucher($code)
    {
        return $this->client->get("/vouchers/" . rawurlencode($code) . "/redemption/", null);
    }

    /**
     * @param string $redemptionId
     * @param string|array|stdClass|null $params
     *
     * Rollback redemption. This operation creates a rollback entry in voucher's redemption history (`redemption.redemption_entries`)
     * and gives 1 redemption back to the pool (decreases `redeemed_quantity` by 1).
     *
     * @throws \Voucherify\ClientException
     */
    public function rollback($redemptionId, $params = null)
    {
        $payload = null;
        $options = (object)[ "qs" => null ];

        if (is_string($params)) {
            $options->qs = (object)[ "reason" => $params ];
        }
        elseif (is_object($params)) {

            if (isset($params->reason)) {
                if (!isset($options->qs)) {
                    $options->qs = (object)[];
                }
                $options->qs->reason = $params->reason;
            }

            if (isset($params->tracking_id)) {
                if (!isset($options->qs)) {
                    $options->qs = (object)[];
                }
                $options->qs->tracking_id = $params->tracking_id;
            }

            if (isset($params->customer)) {
                $payload = (object)[ "customer" => $params->customer ];
            }
        }
        elseif (is_array($params)) {

            if (isset($params["reason"])) {
                if (!isset($options->qs)) {
                    $options->qs = (object)[];
                }
                $options->qs->reason = $params["reason"];
            }

            if (isset($params["tracking_id"])) {
                if (!isset($options->qs)) {
                    $options->qs = (object)[];
                }
                $options->qs->tracking_id = $params["tracking_id"];
            }

            if (isset($params["customer"])) {
                $payload = (object)[ "customer" => $params["customer"] ];
            }
        }

        return $this->client->post("/redemptions/" . rawurlencode($redemptionId) . "/rollback/", $payload, $options);
    }
}