<?php

namespace Voucherify;

class VoucherifyRequest {
    /**
     * @var string
     */
    private static $apiURL = "https://api.voucherify.io/v1";

    /**
     * @var string
     */
    private $apiID;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @param string $apiID
     * @param string $apiKey
     */
    public function __construct($apiID, $apiKey) {
        $this->setApiID($apiID);
        $this->setApiKey($apiKey);
    }

    private function getHeaders() {
        return [
            "Content-Type: application/json",
            "X-App-Id: " . $this->apiID,
            "X-App-Token: " . $this->apiKey,
            "X-Voucherify-Channel: PHP-SDK"
        ];
    }

    private function encodeParams($params) {
        if (!is_array($params) && !is_object($params)) {
            return $params;
        }

        $result = array();
        foreach ($params as $key => $value) {
            if (is_null($value)) {
                continue;
            }
            $result[] = urlencode($key) . "=" . urlencode($value);
        }
        return implode("&", $result);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param array|null $params
     * @param string|array|object|null $data
     *
     * @throws Voucherify\ClientException
     */
    protected function apiRequest($method, $endpoint, $params, $data) {

        $setParams = $params && in_array($method, ["GET", "POST", "DELETE"]);
        $setData = $data && in_array($method, ["POST", "PUT", "DELETE"]);

        $method = strtoupper($method);
        $url = self::$apiURL . $endpoint . ($setParams ? "?" . $this->encodeParams($params) : "");

        $options = array();
        $options[CURLOPT_URL] = $url;
        $options[CURLOPT_HTTPHEADER] = $this->getHeaders();
        $options[CURLOPT_RETURNTRANSFER] = true;
        $options[CURLOPT_CUSTOMREQUEST] = $method;
        $options[CURLOPT_POSTFIELDS] = $setData ? json_encode($data) : NULL;

        $curl = curl_init();

        curl_setopt_array($curl, $options);

        $result = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);
        curl_close($curl);

        // Connection errors
        if ($result === false) {
            throw new ClientException($error);
        } // Invalid status code
        else if ($statusCode >= 400) {
            throw new ClientException("Unexpected status code: " . $statusCode . " - Details: " . $result);
        }

        return json_decode($result);
    }

    /**
     * @param string $apiKey
     */
    protected function setApiKey($apiKey) {
        $this->apiKey = $apiKey;
    }

    /**
     * @param string $apiID
     */
    protected function setApiID($apiID) {
        $this->apiID = $apiID;
    }
}