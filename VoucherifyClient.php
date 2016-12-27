<?php

namespace Voucherify;

class VoucherifyClient extends VoucherifyRequest
{
    /**
     * @var Customer
     */
    public $customer;

    /**
     * VoucherifyClient constructor.
     *
     * @param string $apiID
     * @param string $apiKey
     */
    public function __construct($apiID, $apiKey)
    {
        parent::__construct($apiID, $apiKey);

        $this->customer = new Customer($apiID, $apiKey);
    }

    /**
     * @param string $code
     *
     * Get voucher details
     *
     * @throws \Voucherify\ClientException
     */
    public function get($code)
    {
        return $this->apiRequest("GET", "/vouchers/" . urlencode($code), null, null);
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
            return $this->apiRequest("POST", "/vouchers/" . urlencode($voucher->code), null, $voucher);
        } else {
            return $this->apiRequest("POST", "/vouchers/", null, $voucher);
        }
    }

    /**
     * @param stdClass $voucher_update
     *
     * Update voucher.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($voucher_update)
    {
        return $this->apiRequest("PUT", "/vouchers/" . urlencode($voucher_update->code), null, $voucher_update);
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
        return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/enable", null, null);
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
        return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/disable", null, null);
    }

    /**
     * @param $campaignName
     * @return mixed
     * @internal param string $code Enable voucher with given code.*
     * Enable voucher with given code.
     *
     */
    public function publish($campaignName)
    {
        $payload = null;

        if (gettype($campaignName) === "string") {
            $payload = ["campaign" => $campaignName];
        }

        if (gettype($campaignName) === "object") {
            $payload = $campaignName;
        }

        return $this->apiRequest("POST", "/vouchers/publish", null, $payload);
    }

    /**
     * @param string $code
     * @param boolean|null $force
     *
     * Delete voucher by code
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($code, $force = null)
    {
        return $this->apiRequest("DELETE", "/vouchers/" . urlencode($code), ["force" => $force ? "true" : "false"],
            null);
    }

    /**
     * @param string $code
     *
     * Get voucher redemption
     *
     * @throws \Voucherify\ClientException
     */
    public function redemption($code)
    {
        return $this->apiRequest("GET", "/vouchers/" . urlencode($code) . "/redemption/", null, null);
    }

    /**
     * @param string|array $code Voucher code or array with voucher (code), customer profile and order amount
     * @param string|null $trackingId Provided tracking id
     *
     * Redeem voucher
     *
     * @throws \Voucherify\ClientException
     */
    public function redeem($code, $trackingId)
    {
        $context = array();
        if (is_array($code)) {
            $context = $code;
            $code = $context["voucher"];
            unset($context["voucher"]);
        }
        return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/redemption/",
            ["tracking_id" => $trackingId], $context);
    }

    /**
     * @param string $redemptionId
     * @param string|null $trackingId
     * @param string|null $reason
     *
     * Rollback redemption. This operation creates a rollback entry in voucher's redemption history (`redemption.redemption_entries`)
     * and gives 1 redemption back to the pool (decreases `redeemed_quantity` by 1).
     *
     * @throws \Voucherify\ClientException
     */
    public function rollback($redemptionId, $trackingId = null, $reason = null)
    {
        return $this->apiRequest("POST", "/redemptions/" . urlencode($redemptionId) . "/rollback/",
            ["tracking_id" => $trackingId, "reason" => $reason], null);
    }

    /**
     * @param array|stdClass $filter
     *
     * Get a filtered list of vouchers. The filter can include following properties:
     * - code_query - string
     * - limit      - number (default 10)
     * - skip       - number (default 0)
     * - campaign   - string
     * - category   - string
     * - customer   - string
     *
     * @throws \Voucherify\ClientException
     */
    public function vouchers($filter)
    {
        return $this->apiRequest("GET", "/vouchers/", $filter, null);
    }

    /**
     * @param array|stdClass $filter
     *
     * Get a filtered list of redemptions. The filter can include following properties:
     * - limit      - number (default 100)
     * - page       - number (default 0)
     * - start_date - string (ISO8601 format, default is the beginning of current month)
     * - end_date   - string (ISO8601 format, default is the end of current month)
     * - result     - string (Success|Failure-NotExist|Failure-Inactive)
     * - customer   - string
     *
     * @throws \Voucherify\ClientException
     */
    public function redemptions($filter)
    {
        return $this->apiRequest("GET", "/redemptions/", $filter, null);
    }
}
