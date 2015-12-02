<?php

namespace Voucherify {
    
    class VoucherifyClient {
        
        /**
         * @var string
         */
        private static $apiURL = "http://api.voucherify.io/v1";
        
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
            
            $result = curl_exec($curl); 
            
            curl_close($curl); 
            
            return json_decode($result);
        }
        
        public function setApiKey($apiKey) {
            $this->apiKey = $apiKey;
        }
        
        public function setApiID($apiID) {
            $this->apiID = $apiID;
        }
        
        public function get($code) {
            return $this->apiRequest("GET", "/vouchers/" . urlencode($code), NULL, NULL);
        }
        
        public function redemption($code) {
            return $this->apiRequest("GET", "/vouchers/" . urlencode($code) . "/redemption/", NULL, NULL);
        }
        
        public function redeem($code, $trackingId) {       
            $context = array();
            if (is_array($code)) {
                $context = $code;
                $code = $context["voucher"];
                unset($context["voucher"]);
            }  
            return $this->apiRequest("POST", "/vouchers/" . urlencode($code) . "/redemption/", [ "tracking_id" => $trackingId ], $context);
        }
    }
}
?>