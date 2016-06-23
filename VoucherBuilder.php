<?php

    namespace Voucherify {
    
        class VoucherBuilder {
            
            private $_voucher;
            
            public function __construct() {
                $this->_voucher = (object)[];
            }
           
            public function setCode($code) {
                $this->_voucher->code = $code;
                return $this;
            }
            
            public function setCampaign($campaign) {
                $this->_voucher->campaign = $campaign;
                return $this;
            }
            
            public function setCategory($category) {
                $this->_voucher->category = $category;
                return $this;
            }
            
            public function setAmountDiscount($amount_off) {
                $this->_voucher->type = "DISCOUNT_VOUCHER";
                $this->_voucher->discount = (object) [
                    "type" => "AMOUNT",
                    "amount_off" => $amount_off * 100
                ];
                return $this;
            }
            
            public function setPercentDiscount($percent_off) {
                $this->_voucher->type = "DISCOUNT_VOUCHER";
                $this->_voucher->discount = (object) [
                    "type" => "PERCENT",
                    "percent_off" => $percent_off
                ];
                return $this;
            }
            
            public function setUnitDiscount($unit_off, $unit_type) {
                $this->_voucher->type = "DISCOUNT_VOUCHER";
                $this->_voucher->discount = (object) [
                    "type" => "UNIT",
                    "unit_off" => $unit_off,
                    "unit_type" => $unit_type
                ];
                return $this;
            }
            
            public function setGiftAmount($amount) {
                $this->_voucher->type = "GIFT_VOUCHER"
                $this->_voucher->gift = (object) [
                    "amount" => $amount * 100
                ];
                return $this;
            }
            
            public function setStartDate($start_date) {
                if ($start_date instanceof \DateTime) {
                    $start_date = $start_date->format(\DateTime::ISO8601);
                }
                $this->_voucher->start_date = $start_date;
                return $this;
            }
            
            public function setExpirationDate($expiration_date) {
                if ($expiration_date instanceof \DateTime) {
                    $expiration_date = $expiration_date->format(\DateTime::ISO8601);
                }
                $this->_voucher->expiration_date = $expiration_date;
                return $this;
            }
            
            public function setRedemptionLimit($redemption_limit) {
                $this->_voucher->redemption = (object) [
                    "quantity" => $redemption_limit
                ];
                return $this;
            }
            
            public function setActive($active) {
                $this->_voucher->active = $active;
            }
            
            public function build() {
                return $this->_voucher;
            }
        }
    }
    
?>