<?php

namespace Voucherify;

class Campaigns
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
     * @param stdClass $campaign
     *
     * Create campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($campaign)
    {
        return $this->client->post("/campaigns", $campaign);
    }

    /**
     * @param string $name - campaign name
     * @param stdClass $voucher
     *
     * Add voucher to campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function addVoucher($name, $voucher)
    {
        // campaigns/name/vouchers/code
        return $this->client->post("/campaigns/" . rawurlencode($name) . "/vouchers/", $voucher);
    }

    /**
     * @param string $name - campaign name
     * @param stdClass[] $vouchers
     *
     * Imports vouchers to an existing campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function importVouchers($name, $vouchers)
    {
        return $this->client->post("/campaigns/" . rawurlencode($name) . "/import", $vouchers);
    }

    /**
     * @param string $name
     * @param boolean|null $force
     *
     * Delete campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($name, $force = null)
    {
        $options = (object)[];
        $options->qs = [ "force" => ($force ? "true" : "false") ];

        return $this->client->delete("/campaigns/" . rawurlencode($name), null, $options);
    }
}