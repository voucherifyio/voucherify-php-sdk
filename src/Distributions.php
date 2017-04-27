<?php

namespace Voucherify;

class Distributions
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
     * @param string|array|stdClass $params Campaign name or params object
     * 
     * Publish voucher.
     *
     * @throws \Voucherify\ClientException
     */
    public function publish($params)
    {
        $payload = null;

        if (is_string($params)) {
            $payload = ["campaign" => $params];
        }
        elseif (is_object($params) || is_array($params)) {
            $payload = $params;
        }

        return $this->client->post("/vouchers/publish", $payload, null);
    }

    /**
     * @param array|stdClass $params Export configuration
     * 
     * Create export.
     *
     * @throws \Voucherify\ClientException
     */
    public function createExport($params)
    {
        return $this->client->post("/exports/", $params);
    }

    /**
     * @param string $exportId
     * 
     * Get export.
     *
     * @throws \Voucherify\ClientException
     */
    public function getExport($exportId)
    {
        return $this->client->get("/exports/" . rawurlencode($exportId));
    }

    /**
     * @param string $exportId
     * 
     * Delete export.
     *
     * @throws \Voucherify\ClientException
     */
    public function deleteExport($exportId)
    {
        return $this->client->delete("/exports/" . rawurlencode($exportId));
    }

    /**
     * List publications.
     *
     * @throws \Voucherify\ClientException
     */
    public function getPublications()
    {
        return $this->client->get("/publications");
    }
}