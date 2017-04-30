<?php

namespace Voucherify;

class Segments
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
     * @param array|stdClass $params Params object
     * 
     * Create segment.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($params)
    {
        return $this->client->post("/segments/", $params);
    }

    /**
     * @param string $segmentId Segement id.
     * 
     * Get segment.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($segmentId)
    {
        return $this->client->get("/segments/" . rawurlencode($segmentId));
    }

    /**
     * @param string $segmentId Segement id.
     * 
     * Delete segment.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($segmentId)
    {
        return $this->client->delete("/segments/" . rawurlencode($segmentId));
    }
}


