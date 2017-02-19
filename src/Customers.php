<?php

namespace Voucherify;

class Customers
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
     * @param stdClass $customer
     *
     * Create customer.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($customer)
    {
        return $this->client->post("/customers/", $customer, null);
    }

    /**
     * @param string $customerId
     *
     * Get customer details.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($customerId)
    {
        return $this->client->get("/customers/" . urlencode($customerId), null);
    }

    /**
     * @param array|stdClass $customer Object with customer fields for update
     *
     * Update customer.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($customer)
    {
        $customerId = "";

        if (is_array($customer)) {
            $customerId = $customer["id"];
        }
        elseif (is_object($customer)) {
            $customerId = $customer->id;
        }

        return $this->client->put("/customers/" . urlencode($customerId), $customer, null);
    }

    /**
     * @param string $customerId Customer ID to delete
     *
     * Delete customer.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($customerId)
    {
        return $this->client->delete("/customers/" . urlencode($customerId), null, null);
    }
}