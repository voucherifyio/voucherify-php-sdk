<?php

namespace Voucherify;

class ApiClient
{
    /**
     * @var string
     */
    private $basePath = "https://api.voucherify.io/v1";

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
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @var array|stdClass
     */
    private $options;

    /**
     * @param string $apiID
     * @param string $apiKey
     * @param string $apiVersion - default null
     * @param string $apiUrl - default null
     */
    public function __construct($apiId, $apiKey, $apiVersion = null, $apiUrl = null)
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

        if (isset($apiUrl)) {
            $this->basePath = $apiUrl;
        }
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

    private function getConnectionOption($name, $default) 
    {
        $hasValue = isset($this->options, $this->options[$name]);

        echo("-- ". $name . " hasValue: " . $hasValue . " " . $this->options[$name]);

        return $hasValue ? $this->options[$name] : $default;
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
        $url = $this->basePath . $endpoint . ($setParams ? "?" . $this->encodeParams($params) : "");

        $options = array();
        $options[CURLOPT_URL] = $url;
        $options[CURLOPT_HTTPHEADER] = $this->headers;
        $options[CURLOPT_RETURNTRANSFER] = true;
        $options[CURLOPT_CUSTOMREQUEST] = $method;
        $options[CURLOPT_POSTFIELDS] = $setBody ? json_encode($body) : null;
        $options[CURLOPT_CONNECTTIMEOUT] = $this->getConnectionOption("connectTimeout", 300);
        $options[CURLOPT_TIMEOUT_MS] = $this->getConnectionOption("timeout", 0);

        $curl = curl_init();

        if (isset($this->logger)) {
            $context = [ "options" => $options ];
            $this->logger->info("[ApiClient][Request] Curl request;", $context);
        }

        curl_setopt_array($curl, $options);

        $result = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        if (isset($this->logger)) {
            $context = [ "result" => $result, "statusCode" => $statusCode, "error" => $error ];
            $this->logger->info("[ApiClient][Request] Curl response;", $context);
        }

        if ($result === false) {
            throw new ClientException($error);
        }
        elseif ($statusCode >= 400) {
            $error = json_decode($result);
            throw new ClientException($error, $statusCode);
        }

        return json_decode($result);
    }

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param array $options
     */
    public function setConnectionOptions($options)
    {
        $this->options = $options;
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
