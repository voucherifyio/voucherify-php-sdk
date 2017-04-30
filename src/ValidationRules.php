<?php

namespace Voucherify;

class ValidationRules
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
     * Create validation rule.
     *
     * @throws \Voucherify\ClientException
     */
    public function create($params)
    {
        return $this->client->post("/validation-rules/", $params);
    }

    /**
     * @param string $ruleId Validation rule id.
     * 
     * Get validation rule.
     *
     * @throws \Voucherify\ClientException
     */
    public function get($ruleId)
    {
        return $this->client->get("/validation-rules/" . rawurlencode($ruleId));
    }

    /**
     * @param string $ruleId Validation rule id.
     * @param array|stdClass $params Params object
     * 
     * Upadate validation rule.
     *
     * @throws \Voucherify\ClientException
     */
    public function update($ruleId, $params)
    {
        return $this->client->put("/validation-rules/" . rawurlencode($ruleId), $params);
    }

    /**
     * @param string $ruleId Validation rule id.
     *
     * Delete validation rule.
     *
     * @throws \Voucherify\ClientException
     */
    public function delete($ruleId)
    {
        return $this->client->delete("/validation-rules/" . rawurlencode($ruleId));
    }
}


