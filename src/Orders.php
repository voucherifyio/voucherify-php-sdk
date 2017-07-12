<?php

namespace Voucherify;

class Orders
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
     * @param stdClass $order
     *
     * Create order.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($order)
    {
        return $this->client->post("/orders/", $order, null);
    }

    /**
     * @param string $orderId
     *
     * Get order details.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($orderId)
    {
        return $this->client->get("/orders/" . rawurlencode($orderId), null);
    }

    /**
     * @param array|stdClass $order Object with order fields for update
     *
     * Update order.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($order)
    {
        $orderId = "";

        if (is_array($order)) {
            $orderId = $order["id"];
        }
        elseif (is_object($order)) {
            $orderId = $order->id;
        }

        return $this->client->put("/orders/" . rawurlencode($orderId), $order, null);
    }

    /**
     * @throws \Voucherify\ClientException
     */
    public function getList()
    {
        return $this->client->get("/orders/");
    }
}