<?php
namespace Voucherify\Test\Helpers;

use phpmock\spy\Spy;
use phpmock\MockBuilder;
use phpmock\MockRegistry;
use phpmock\functions\FixedValueFunction;

class CurlMock
{
    /**
     * @var CurlMock - singleton
     */
    private static $instance = null;

    private $enabled = false;
    private $mocks = [];
    private $requests = [];

    private function __construct()
    {
        $namespace = "Voucherify";

        // Initialize mock builder
        $builder = new MockBuilder();
        $builder->setNamespace($namespace);

        // Build `curl_init` mock
        $this->mocks[] =
            $builder->setName("curl_init")
                    ->setFunction(function() {
                        return $this->_curl_init();
                    })
                    ->build();

        // Build `curl_setopt_array` mock
        $this->mocks[] =
            $builder->setName("curl_setopt_array")
                    ->setFunction(function($curl, $options) {
                        return $this->_curl_setopt_array($curl, $options);
                    })
                    ->build();

        // Build `curl_exec` mock
        $this->mocks[] =
            $builder->setName("curl_exec")
                    ->setFunction(function($curl) {
                        return $this->_curl_exec($curl);
                    })
                    ->build();


        // Build `curl_getinfo` mock
        $this->mocks[] =
            $builder->setName("curl_getinfo")
                    ->setFunction(function($curl, $param) {
                        return $this->_curl_getinfo($curl, $param);
                    })
                    ->build();

        // Build `curl_error` mock
        $this->mocks[] =
            $builder->setName("curl_error")
                    ->setFunction(function($curl) {
                        return $this->_curl_error($curl);
                    })
                    ->build();

        // Build `curl_close` mock
        $this->mocks[] =
            $builder->setName("curl_close")
                    ->setFunction(function($curl) {
                        return $this->_curl_close($curl);
                    })
                    ->build();
    }

    private function __clone()
    {
        throw new Exception("Clone is not allowed");
    }

    private function _curl_init()
    {
        // Return mocked instance (used in other functions)
        return (object)[
            "__isMock" => true,
            "options" => null,
            "reply" => (object)[
                "statusCode" => null,
                "payload" => null
            ],
            "error" => null,
            "index" => null,
            "request" => null
        ];
    }

    private function _curl_setopt_array($curl, $options)
    {
        if (!is_object($curl) || !isset($curl->__isMock)) {
            throw new Exception("Curl must be a mocked object");
        }
        $curl->options = $options;
    }

    private function _curl_exec($curl)
    {
        if (!is_object($curl) || !isset($curl->__isMock)) {
            throw new \Exception("Curl must be a mocked object");
        }
        $url = $curl->options[CURLOPT_URL];
        $headers = $curl->options[CURLOPT_HTTPHEADER];
        $method = $curl->options[CURLOPT_CUSTOMREQUEST];
        $body = $curl->options[CURLOPT_POSTFIELDS];
        $match;

        foreach ($this->requests as $index => $request) {
            if ($request->match($url, $headers, $method, $body)) {
                $match = (object)[
                    "index" => $index,
                    "request" => $request
                ];
                break;
            }
        }
        if (!isset($match)) {
            throw new \Exception("Request mock for url '" . $url . "' not found");
        }

        $curl->index = $match->index;
        $curl->request = $match->request;

        return $curl->request->getReplyBody();
    }

    private function _curl_getinfo($curl, $param)
    {
        if (!is_object($curl) || !isset($curl->__isMock)) {
            throw new \Exception("Curl must be a mocked object");
        }
        if (!isset($curl->request)) {
            throw new \Exception("Curl request property is missing");
        }
        if ($param != CURLINFO_HTTP_CODE) {
            return;
        }

        return $curl->request->getReplyStatusCode();
    }

    private function _curl_error($curl)
    {
        if (!is_object($curl) || !isset($curl->__isMock)) {
            throw new \Exception("Curl is not mocked object");
        }
        if (!isset($curl->request)) {
            throw new \Exception("Curl request property is missing");
        }

        return $curl->request->getError();
    }

    private function _curl_close($curl)
    {
        if (!is_object($curl) || !isset($curl->__isMock)) {
            throw new \Exception("Curl is not mocked object");
        }
        if (!isset($curl->request)) {
            throw new \Exception("Curl request property is missing");
        }

        $curl->request->done();
    }

    public function enableMock()
    {
        if (!$this->enabled) {
            // Enable all mocks
            $this->enabled = true;

            foreach ($this->mocks as $name => $mock) {
                $mock->enable();
            }
        }
        return $this;
    }

    public function disableMock()
    {
        if ($this->enabled) {
            // Disable all mocks
            $this->enabled = false;

            foreach ($this->mocks as $name => $mock) {
                $mock->disable();
            }
        }
        return $this;
    }

    public function registerRequest($baseUrl, $headers)
    {
        $request = new CurlRequest($baseUrl, $headers);

        // Add request to queue
        $this->requests[] = $request;

        return $request;
    }

    /**
     * Get / initialize default instance
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Enable default instance
     */
    public static function enable()
    {
        return self::getInstance()->enableMock();
    }

    /**
     * Disable default instance
     */
    public static function disable()
    {
        return self::getInstance()->disableMock();
    }

    /**
     * Register curl request mock
     */
    public static function register($baseUrl, $headers)
    {
        return self::getInstance()->registerRequest($baseUrl, $headers);
    }
}
