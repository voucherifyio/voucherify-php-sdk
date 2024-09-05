<?php

class VoucherifyData
{
    private static $instance = null;

    private $product = null;
    private $customer = null;
    private $discountCampaign = null;
    private $promotionCampaign = null;
    private $loyaltyCampaign = null;
    private $voucher = null;
    private $voucherWithMoreThanValidationRule = null;
    private $loyaltyCard = null;
    private $productIds = [];
    private $sku = null;
    private $validationRule = null;
    private $order = null;

    private function __construct() {}
    private function __clone() {}

    // Metoda statyczna do uzyskania instancji singletona
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setDiscountCampaign($discountCampaign)
    {
        $this->discountCampaign = $discountCampaign;
    }

    public function getDiscountCampaign()
    {
        return $this->discountCampaign;
    }

    public function setPromotionCampaign($promotionCampaign)
    {
        $this->promotionCampaign = $promotionCampaign;
    }

    public function getPromotionCampaign()
    {
        return $this->promotionCampaign;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function addProductId($productId)
    {
        $this->productIds[] = $productId;
    }

    public function getProductIds()
    {
        return $this->productIds;
    }

    public function setValidationRule($validationRule)
    {
        $this->validationRule = $validationRule;
    }

    public function getValidationRule()
    {
        return $this->validationRule;
    }

    public function setVoucherWithMoreThanValidationRule($voucher)
    {
        $this->voucherWithMoreThanValidationRule = $voucher;
    }

    public function getVoucherWithMoreThanValidationRule()
    {
        return $this->voucherWithMoreThanValidationRule;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setVoucher($voucher)
    {
        $this->voucher = $voucher;
    }

    public function getVoucher()
    {
        return $this->voucher;
    }

    public function setLoyaltyCampaign($loyaltyCampaign)
    {
        $this->loyaltyCampaign = $loyaltyCampaign;
    }

    public function getLoyaltyCampaign()
    {
        return $this->loyaltyCampaign;
    }

    public function setLoyaltyCard($loyaltyCard)
    {
        $this->loyaltyCard = $loyaltyCard;
    }

    public function getLoyaltyCard()
    {
        return $this->loyaltyCard;
    }

    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }
}

?>
