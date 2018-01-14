<?php

namespace Voucherify;

class Promotions
{
    /**
     * @var \Voucherify\ApiClient
     */
    private $client;

    /**
     * @var \Voucherify\Campaigns
     */
    private $campaigns;

    /**
     * @var \Voucherify\PromotionTiers
     */
    public $tiers;

    /**
     * @param \Voucherify\ApiClient $client
     * @param array $dependencies Voucherify namespace references
     */
    public function __construct($client, $dependencies)
    {
        // PRIVATE
        $this->client = $client;
        $this->campaigns = $dependencies["campaigns"];

        // PUBLIC
        $this->tiers = $dependencies["promotionTiers"];
    }

    /**
     * @param array|stdClass $campaign
     *
     * Create promotion campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($campaign)
    {
        if (is_array($campaign)) {
            $campaign["campaign_type"] = "PROMOTION";
        }
        elseif (is_object($campaign)) {
            $campaign->campaign_type = "PROMOTION";
        }

        return $this->campaigns->create($campaign);
    }

    /**
     * @param array|stdClass $params Params object
     * 
     * Validate promotions.
     *
     * @throws \Voucherify\ClientException
     */
    public function validate($params)
    {
        return $this->client->post("/promotions/validation", $params);
    }
}


