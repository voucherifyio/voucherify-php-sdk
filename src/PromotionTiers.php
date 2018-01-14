<?php

namespace Voucherify;

class PromotionTiers
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
     * @param string $promotionId
     * @param array|stdClass $params
     *
     * Add promotion tier to campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($promotionId, $params)
    {
        return $this->client->post("/promotions/" . rawurlencode($promotionId) . "/tiers", $params);
    }

    /**
     * @param string $promotionId
     *
     * List promotion tiers from campaign.
     *
     * @throws \Voucherify\ClientException
     */
    public function getList($promotionId)
    {
        return $this->client->get("/promotions/" . rawurlencode($promotionId) . "/tiers", null);
    }

    /**
     * @param string $promotionTierId
     * @param array|stdClass $params
     *
     * Validate promotion tier.
     *
     * @throws \Voucherify\ClientException
     */
    public function redeem($promotionTierId, $params)
    {
        return $this->client->post("/promotions/tiers/" . rawurlencode($promotionTierId) . "/redemption/", $params, null);
    }

    /**
     * @param array|stdClass $params
     *
     * Update promotion tier.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($params)
    {
        $promotionTierId = "";

        if (is_array($params)) {
            $promotionTierId = $params["id"];
        }
        elseif (is_object($params)) {
            $promotionTierId = $params->id;
        }

        return $this->client->put("/promotions/tiers/" . rawurlencode($promotionTierId), $params, null);
    }

    /**
     * @param string $promotionTierId
     *
     * Delete promotion tier.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($promotionTierId)
    {
        return $this->client->delete("/promotions/tiers/" . rawurlencode($promotionTierId), null, null);
    }
}


