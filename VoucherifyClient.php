<?php

namespace Voucherify {
    
    class VoucherifyClient {
        
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
            if (!is_array($params)) {
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
        private function apiRequest($method, $endpoint, $params, $data) {
            
            $setParams  = $params   && in_array($method, [ "GET", "POST" ]);
            $setData    = $data     && in_array($method, [ "POST", "PUT", "DELETE"]);
            
            $method = strtoupper($method);
            $url = self::$apiURL . $endpoint . ($setParams ? "?" . $this->encodeParams($params) : "");
           
            $options = array();
            $options[CURLOPT_URL]               = $url;
            $options[CURLOPT_HTTPHEADER]        = $this->getHeaders();
            $options[CURLOPT_RETURNTRANSFER]    = true; 
            $options[CURLOPT_CUSTOMREQUEST]     = $method;
            $options[CURLOPT_POSTFIELDS]        = $setData ? json_encode($data) : NULL;
            
            $curl = curl_init();
            
            curl_setopt_array($curl, $options);
            
            $result         = curl_exec($curl);
            $statusCode     = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $error          = curl_error($curl);
            curl_close($curl);
                
            // Connection errors
            if ($result === false) {
                throw new ClientException($error);
            }
            // Invalid status code
            else if ($statusCode >= 400) {
                throw new ClientException("Unexpected status code: " . $statusCode . " - Details: " . $result);
            }
            
            return json_decode($result);
        }
        
        /**
         * @param string $apiKey
         */
        public function setApiKey($apiKey) {
            $this->apiKey = $apiKey;
        }
        
        /**
         * @param string $apiID
         */
        public function setApiID($apiID) {
            $this->apiID = $apiID;
        }
        
        /**
         * @param string $code
         *
         * Get voucher details
         *
         * @throws Voucherify\ClientException
         */
        public function get($code) {
            return $this->apiRequest("GET", "/vouchers/" . urlencode($code), NULL, NULL);
        }
        
        /**
         * @param stdClass $voucher
         *
         * Create voucher.
         *
         * @throws Voucherify\ClientException
         */
        public function create($voucher) {
            if (isset($voucher->code)) {
                return $this->apiRequest("POST", "/vouchers/" . urlencode($voucher->code), NULL, $voucher);    
            } else {
                return $this->apiRequest("POST", "/vouchers/", NULL, $voucher);    
            }
        }
        
        /**
         * @param string $code
         *
         * Enable voucher with given code.
         *
         * @throws Voucherify\ClientException
         */
        public function enable($code) {
            return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/enable", NULL, NULL);
        }
        
        /**
         * @param string $code
         *
         * Disable voucher with given code.
         *
         * @throws Voucherify\ClientException
         */
        public function disable($code) {
            return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/disable", NULL, NULL);
        }
        
        /**
         * @param string $code 
         *
         * Get voucher redemption
         *
         * @throws Voucherify\ClientException
         */
        public function redemption($code) {
            return $this->apiRequest("GET", "/vouchers/" . urlencode($code) . "/redemption/", NULL, NULL);
        }
        
        /**
         * @param string|array $code Voucher code or array with voucher and customer items 
         * @param string|null $trackingId Provided tracking id 
         *
         * Redeem voucher
         *
         * @throws Voucherify\ClientException
         */
        public function redeem($code, $trackingId) {
            $context = array();
            if (is_array($code)) {
                $context = $code;
                $code = $context["voucher"];
                unset($context["voucher"]);
            }        
            return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/redemption/", [ "tracking_id" => $trackingId ], $context);
        }
        
        /**
         * @param array $filter
         *
         * Get a filtered list of redemptions. The filter can include following properties:
         * - limit      - number (default 100)
         * - page       - number (default 0)
         * - start_date - string (ISO8601 format, default is the beginning of current month)
         * - end_date   - string (ISO8601 format, default is the end of current month)
         * - result     - string (Success|Failure-NotExist|Failure-Inactive)
         
         * @throws Voucherify\ClientException
         */
        public function redemptions($filter) {
            return $this->apiRequest("GET", "/redemptions/", $filter, NULL);    
        }
    }
}
?>
