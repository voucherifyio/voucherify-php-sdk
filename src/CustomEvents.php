<?php

namespace Voucherify;

class CustomEvents
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
     * @param string $event
     * @param array|stdClass $customer
     * @param array|stdClass|null $metadata
     * @param array|stdClass|null $referral
     * @param array|stdClass|null $loyalty
     *
     * Track a custom event.
     *
     * @throws \Voucherify\ClientException
     */

    public function track($event, $customer, $metadata = null, $referral = null, $loyalty = null)
    {
        $params = [
            'event'    => $event,
            'customer' => $customer,
        ];

        if ($metadata) {
            $params['metadata'] = $metadata;
        }

        if ($referral) {
            $params['referral'] = $referral;
        }

        if ($loyalty) {
            $params['loyalty'] = $loyalty;
        }

        return $this->client->post("/events", $params);
    }
}
