<?php

namespace Voucherify;

class AsyncActions
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
     * @param string $id
     *
     * Get Async Action details.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($id)
    {
        return $this->client->get("/async-actions/" . rawurlencode($id), null);
    }

    /**
     * @param array|stdClass $filter
     *
     * Get a filtered list of Async Actions. The filter can include following properties:
     * - limit    - number
     * - end_date - date in iso format
     *
     * @throws \Voucherify\ClientException
     */
    public function getList($filter = null)
    {
        return $this->client->get("/async-actions/", $filter);
    }

}