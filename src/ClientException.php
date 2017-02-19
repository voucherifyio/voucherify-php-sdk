<?php 

namespace Voucherify;

class ClientException extends \Exception
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $details;

    /**
     * @param {string|array|stdClass} message - string message or api response object
     * @param {integer} code
     *
     * Create new ClientException.
     */
    public function __construct($message, $code = 0) {
        $key = null;
        $details = null;

        if (is_object($message)) {
            $key     = $message->key;
            $details = $message->details;
            $code    = $message->code;
            $message = $message->message;
        }
        else if (is_array($message)) {
            $key     = $message["key"];
            $details = $message["details"];
            $code    = $message["code"];
            $message = $message["message"];
        }
    
        // Initialize parent
        parent::__construct($message, $code);

        $this->key = $key;
        $this->details = $details;
    }

    /**
     * Get key
     *
     * @return {string}
     */
    public function getKey() {
        return $this->key;
    }

    /**
     * Get details
     *
     * @return {string}
     */
    public function getDetails() {
        return $this->details;
    }

    /**
     * Get client error data
     *
     * @return {stdClass} Client error data
     */
    public function getError() {
        return (object) [
            "code"    => $this->getCode(),
            "message" => $this->getMessage(),
            "details" => $this->getDetails(),
            "key"     => $this->getKey()
        ];
    }

    public function __toString() {
        $statusCode = $this->code;
        $error = json_encode($this->getError());

        return __CLASS__ . ": Unexpected status code: " . $statusCode . " - Details: " . $error;
    }
}
