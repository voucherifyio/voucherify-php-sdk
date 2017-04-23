<?php

namespace Voucherify;

class VoucherifyClient
{
    /**
     * @var \Voucherify\ApiClient
     */
    private $client;

    /**
     * @var \Voucherify\Customers
     */
    public $customers;

    /**
     * @var \Voucherify\Distributions
     */
    public $distributions;

    /**
     * @var \Voucherify\Redemptions
     */
    public $redemptions;

    /**
     * @var \Voucherify\Vouchers
     */
    public $vouchers;

    /**
     * @param string $apiId
     * @param string $apiKey
     */
    public function __construct($apiId, $apiKey)
    {
        $this->client = new ApiClient($apiId, $apiKey);

        $this->campaigns = new Campaigns($this->client);
        $this->customers = new Customers($this->client);
        $this->distributions = new Distributions($this->client);
        $this->redemptions = new Redemptions($this->client);
        $this->vouchers = new Vouchers($this->client);

        /* ********* BACKWARD COMPATIBILITY ********* */

        $this->customer = $this->customers;
    }

    /* ********* BACKWARD COMPATIBILITY ********* */

    /**
     * @var Customer
     */
    public $customer;

    /**
     * @param string $code
     *
     * Get voucher details.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($code)
    {
        return $this->vouchers->get($code);
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
        return $this->vouchers->create($voucher);
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
        return $this->vouchers->update($voucher_update);
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
        return $this->vouchers->enable($code);
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
        return $this->vouchers->disable($code);
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
        return $this->distributions->publish($campaignName);
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
        return $this->vouchers->delete($code, $force);
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
        return $this->redemptions->getForVoucher($code);
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
        return $this->redemptions->redeem($code, $trackingId);
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
        $params = (object)[];
        $params->tracking_id = $trackingId;
        $params->reason = $reason;

        return $this->redemptions->rollback($redemptionId, $params);
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
        return $this->vouchers->getList($filter);
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
        return $this->redemptions->getList($filter);
    }
}