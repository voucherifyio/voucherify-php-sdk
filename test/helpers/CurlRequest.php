<?php
namespace Voucherify\Test\Helpers;

class CurlRequest
{
    private $reqBaseUrl;
    private $reqMethod;
    private $reqPath;
    private $reqHeaders;
    private $reqParams;
    private $reqBody;
    private $reqReply;
    private $reqError;
    private $reqIsDone = false;

    public function __construct($baseUrl, $headers = null)
    {
        $this->reqBaseUrl = $baseUrl;
        $this->reqHeaders = $headers;
    }

    public function setHeaders($headers)
    {
        $this->reqHeaders = $headers;

        return $this;
    }

    public function setRequest($method, $path = null, $body = null)
    {
        $this->reqMethod = $method;
        $this->reqPath = $path;
        $this->reqBody = $body;

        return $this;
    }

    public function query($qs)
    {
        $this->reqParams = $qs;

        return $this;
    }

    public function get($path)
    {
        return $this->setRequest("GET", $path);
    }

    public function post($path, $body = null)
    {
        return $this->setRequest("POST", $path, $body);
    }

    public function put($path, $body = null)
    {
        return $this->setRequest("PUT", $path, $body);
    }

    public function delete($path, $body = null)
    {
        return $this->setRequest("DELETE", $path, $body);
    }

    public function reply($statusCode, $body = null)
    {
        $this->reqReply = (object)[
            "statusCode" => $statusCode,
            "body" => $body
        ];

        return $this;
    }

    public function replyWithError($error)
    {
        $this->reqError = $error;

        return $this;
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

    private function ensureObject($value)
    {
        if (is_object($value)) {
            return $value;
        }
        if (is_array($value)) {
            $obj = new \stdClass;
            foreach ($value as $k => $v) {
                if (strlen($k)) {
                    if (is_array($v)) {
                        $obj->{$k} = $this->ensureObject($v);
                    } else {
                        $obj->{$k} = $v;
                    }
                }
            }
            return $obj;
        }
        return $value;
    }

    public function match($url, $headers, $method, $body = null)
    {
        if ($this->reqIsDone === true) {
            return false;
        }

        $reqParams = ($this->reqParams ? "?" . $this->encodeParams($this->reqParams) : "");
        $reqUrl = $this->reqBaseUrl . $this->reqPath . $reqParams;
        $body = $body ? json_decode($body) : null;

        if ($reqUrl != $url) {
            return false;
        }
        if ($this->reqMethod != $method) {
            return false;
        }
        if ($this->ensureObject($this->reqHeaders) != $this->ensureObject($headers)) {
            return false;
        }

        if ($this->ensureObject($this->reqBody) != $this->ensureObject($body)) {
            return false;
        }
 
        return true;
    }

    public function getReplyBody()
    {
        if (isset($this->reqError)) {
            return false;
        }
        if (!isset($this->reqReply)) {
            return;
        }
        return json_encode($this->reqReply->body);
    }

    public function getReplyStatusCode()
    {
        if (!isset($this->reqReply)) {
            return;
        }
        return $this->reqReply->statusCode;
    }

    public function getError()
    {
        return $this->reqError;
    }

    public function done()
    {
        $this->reqIsDone = true;
    }

    public function isDone()
    {
        return $this->reqIsDone === true;
    }
}