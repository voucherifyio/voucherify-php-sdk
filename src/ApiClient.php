<?php

namespace Voucherify;

class ApiClient
{
    /**
     * @var string
     */
    private static $basePath = "https://api.voucherify.io/v1";

    /**
     * @var string
     */
    private $apiId;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var array
     */
    private $headers;

    /**
     * @param string $apiID
     * @param string $apiKey
     * @param string $apiVersion
     */
    public function __construct($apiId, $apiKey, $apiVersion = null)
    {
        if (!isset($apiId)) {
            throw new \Exception("ApiId is required");
        }
        if (!isset($apiKey)) {
            throw new \Exception("ApiKey is required");
        }

        $this->apiId = $apiId;
        $this->apiKey = $apiKey;
        $this->headers = [
            "Content-Type: application/json",
            "X-App-Id: " . $this->apiId,
            "X-App-Token: " . $this->apiKey,
            "X-Voucherify-Channel: PHP-SDK"
        ];

        if (isset($apiVersion)) {
            $this->headers[] = "X-Voucherify-API-Version: " . $apiVersion;
        }
    }

    private function encodeParams($params)
    {
        if (!is_array($params) && !is_object($params)) {
            return $params;
        }

        $result = array();
        foreach ($params as $key => $value) {
            if (is_null($value)) {
                continue;
            }
            $result[] = rawurlencode($key) . "=" . rawurlencode($value);
        }
        return implode("&", $result);
    }

    /**
     * @param string $method
     * @param string $endpoint
     * @param string|array|stdClass|null $params
     * @param string|array|stdClass|null $body
     *
     * @throws \Voucherify\ClientException
     */
    private function request($method, $endpoint, $params, $body)
    {
        $setParams = $params && in_array($method, ["GET", "POST", "DELETE"]);
        $setBody = $body && in_array($method, ["POST", "PUT", "DELETE"]);

        $method = strtoupper($method);
        $url = self::$basePath . $endpoint . ($setParams ? "?" . $this->encodeParams($params) : "");

        $options = array();
        $options[CURLOPT_URL] = $url;
        $options[CURLOPT_HTTPHEADER] = $this->headers;
        $options[CURLOPT_RETURNTRANSFER] = true;
        $options[CURLOPT_CUSTOMREQUEST] = $method;
        $options[CURLOPT_POSTFIELDS] = $setBody ? json_encode($body) : null;

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
        elseif ($statusCode >= 400) {
            $error = json_decode($result);
            throw new ClientException($error, $statusCode);
        }

        return json_decode($result);
    }

    /**
     * @param string $path
     * @param string|array|stdClass|null $qs
     */
    public function get($path, $qs = null)
    {
        return $this->request("GET", $path, $qs, null);
    }

    /**
     * @param string $path
     * @param string|array|stdClass|null $body
     * @param array|stdClass|null $options
     */
    public function post($path, $body, $options = null)
    {
        $qs = null;

        if (is_array($options)) {
            $qs = $options["qs"];
        }
        elseif (is_object($options)) {
            $qs = $options->qs;
        }

        return $this->request("POST", $path, $qs, $body);
    }

    /**
     * @param string $path
     * @param string|array|stdClass|null $body
     * @param array|stdClass|null $options
     */
    public function put($path, $body, $options = null)
    {
        return $this->request("PUT", $path, null, $body);
    }

    /**
     * @param string $path
     * @param string|array|stdClass|null $body
     * @param array|stdClass|null $options
     */
    public function delete($path, $body = null, $options = null)
    {
        $qs = null;

        if (is_array($options)) {
            $qs = $options["qs"];
        }
        elseif (is_object($options)) {
            $qs = $options->qs;
        }

        return $this->request("DELETE", $path, $qs, $body);
    }
}
