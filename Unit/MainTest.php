<?php
//load SDK
require_once(dirname(dirname(__DIR__)) . '/vendor/autoload.php');

//test
class MainTest extends \Codeception\Test\Unit
{
    /**
     * @TODO, refactor test
     */

    protected $productsApiInstance;
    protected $campaignsApiInstance;
    protected $validationRulesApiInstance;
    protected $customersApiInstance;
    protected $qualificationsApiInstance;
    protected $redemptionsApiInstance;
    protected $stackedDiscountsApiInstance;

    protected function _before()
    {
        //load .env
        $env = parse_ini_file('.env');

        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', $env["X_APP_ID"]);
        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', $env["X_APP_TOKEN"]);
        $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setHost($env["VOUCHERIFY_HOST"]);

        $this->productsApiInstance = new OpenAPI\Client\Api\ProductsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->campaignsApiInstance = new OpenAPI\Client\Api\CampaignsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->validationRulesApiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->customersApiInstance = new OpenAPI\Client\Api\CustomersApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->qualificationsApiInstance = new OpenAPI\Client\Api\QualificationsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->stackedDiscountsApiInstance = new OpenAPI\Client\Api\StackableDiscountsApi(
            new GuzzleHttp\Client(),
            $config
        );
        $this->redemptionsApiInstance = new OpenAPI\Client\Api\RedemptionsApi(
            new GuzzleHttp\Client(),
            $config
        );
    }

    // helper functions
    public function generateRandomString($length = 10)
    {
        $randomString = '';
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $max)];
        }

        return $randomString;
    }

    public function createTwoProducts()
    {
        $products_create_request_body = new \OpenAPI\Client\Model\ProductsCreateRequestBody();
        $products_create_request_body->setSourceId($this->generateRandomString());
        $products_create_request_body->setName($this->generateRandomString());
        $products_create_request_body->setPrice(20000);
        $products_create_request_body->setAttributes(["color", "memory", "processor"]);
        $created_product = $this->productsApiInstance->createProduct($products_create_request_body);
        $products_create_request_body->setSourceId($this->generateRandomString());
        $products_create_request_body->setName($this->generateRandomString());
        $products_create_request_body->setPrice(66000);
        $created_product2 = $this->productsApiInstance->createProduct($products_create_request_body);
        return [$created_product, $created_product2];
    }

    public function createValidationRule()
    {
        $created_products = $this->createTwoProducts();
        $validation_rules_create_request_body = new \OpenAPI\Client\Model\ValidationRulesCreateRequestBody();
        $applicable_to_created_product2 = new \OpenAPI\Client\Model\ApplicableTo();
        $applicable_to_created_product2->setProductId($created_products[0]->getId());
        $applicable_to_created_product2->setObject("product");
        $validation_rules_create_request_body->setApplicableTo(new \OpenAPI\Client\Model\ValidationRuleBaseApplicableTo());
        $validation_rules_create_request_body->getApplicableTo()->setIncluded([$applicable_to_created_product2]);
        $validation_rules_create_request_body->setType("basic");
        $validation_rules_create_request_body->setName($this->generateRandomString());
        return $this->validationRulesApiInstance->createValidationRules($validation_rules_create_request_body);
    }

    public function createDiscountCampaign()
    {
        $campaigns_create_request_body_discount = new \OpenAPI\Client\Model\CampaignsCreateRequestBody();
        $campaigns_create_request_body_discount->setName($this->generateRandomString(12));
        $campaigns_create_request_body_discount->setCampaignType("DISCOUNT_COUPONS");
        $campaigns_create_request_body_discount->setType("AUTO_UPDATE");
        $campaigns_create_request_body_discount->setVoucher(new \OpenAPI\Client\Model\CampaignsCreateRequestBodyVoucher());
        $campaigns_create_request_body_discount->getVoucher()->setType("DISCOUNT_VOUCHER");
        $campaigns_create_request_body_discount->getVoucher()->setDiscount(new \OpenAPI\Client\Model\Discount());
        $campaigns_create_request_body_discount->getVoucher()->getDiscount()->setType("AMOUNT");
        $campaigns_create_request_body_discount->getVoucher()->getDiscount()->setAmountOff(1000);
        return $this->campaignsApiInstance->createCampaign($campaigns_create_request_body_discount);
    }

    public function createPromotionCampaign()
    {
        $promotionTierCreateParams = new \OpenAPI\Client\Model\PromotionTierCreateParams();
        $promotionTierCreateParams->setName($this->generateRandomString());
        $promotionTierCreateParams->setBanner('testBanner');
        $promotionTierCreateParams->setAction(new \OpenAPI\Client\Model\PromotionTierAction());
        $promotionTierCreateParams->getAction()->setDiscount(new \OpenAPI\Client\Model\Discount());
        $promotionTierCreateParams->getAction()->getDiscount()->setType("AMOUNT");
        $promotionTierCreateParams->getAction()->getDiscount()->setAmountOff(1000);
        $campaigns_create_request_body_promotion = new \OpenAPI\Client\Model\CampaignsCreateRequestBody();
        $campaigns_create_request_body_promotion->setName($this->generateRandomString(12));
        $campaigns_create_request_body_promotion->setCampaignType("PROMOTION");
        $campaigns_create_request_body_promotion->setPromotion(new \OpenAPI\Client\Model\CampaignsCreateRequestBodyPromotion());
        $campaigns_create_request_body_promotion->getPromotion()->setTiers([$promotionTierCreateParams]);
        return $this->campaignsApiInstance->createCampaign($campaigns_create_request_body_promotion);
    }

    public function createCustomer()
    {
        $customersCreateRequestBody = new \OpenAPI\Client\Model\CustomersCreateRequestBody();
        $customersCreateRequestBody->setSourceId('test123');
        $customersCreateRequestBody->setName('test123');
        $customersCreateRequestBody->setAddress(new \OpenAPI\Client\Model\CustomerBaseAddress());
        $customersCreateRequestBody->getAddress()->setCountry('US');
        $customersCreateRequestBody->getAddress()->setCity('Vice City');
        $customersCreateRequestBody->getAddress()->setLine1('123');
        $customersCreateRequestBody->getAddress()->setPostalCode('60089');
        return $this->customersApiInstance->createCustomer($customersCreateRequestBody);
    }

    public function deleteCampaign($id)
    {
        return $this->campaignsApiInstance->deleteCampaign($id, true);
    }

    // tests
    public function testCreateTwoProducts()
    {
        $this->createTwoProducts();
    }

    public function testCreateValidationRule()
    {
        $this->createValidationRule();
    }

    public function testCreateAndRemoveDiscountCampaign()
    {
        $created_discount_campaign = $this->createDiscountCampaign();
        $this->deleteCampaign($created_discount_campaign->getId());
    }

    public function testCreateAndRemovePromotionCampaign()
    {
        $created_discount_campaign = $this->createPromotionCampaign();
        $this->deleteCampaign($created_discount_campaign->getId());
    }

    public function testListCampaigns()
    {
        $limit = 2; // int | A limit on the number of objects to be returned. Limit can range between 1 and 100 items.
        $page = 1; // int | Which page of results to return.
        $campaign_type = \OpenAPI\Client\Model\ParameterCampaignType::DISCOUNT_COUPONS->value; // ParameterCampaignType
        $expand = \OpenAPI\Client\Model\ParameterExpandListCampaigns::CATEGORY->value; // ParameterExpandListCampaigns
        $order = \OpenAPI\Client\Model\ParameterOrderListCampaigns::CREATED_AT2->value; // ParameterOrderListCampaigns
        $this->campaignsApiInstance->listCampaigns($limit, $page, $campaign_type, $expand, $order);
    }

    public function testCreateCustomer()
    {
        $this->createCustomer();
    }

    public function testCheckEligibilityAndDoStackedValidationAndRedemption()
        {
            $created_discount_campaign = $this->createDiscountCampaign();

            $created_customer = $this->createCustomer();
            $created_product = $this->createTwoProducts()[0];

            $order_item = new \OpenAPI\Client\Model\OrderItem();
            $order_item->setPrice($created_product->getPrice());
            $order_item->setQuantity(3);
            $order_item->setProductId($created_product->getId());

            // check eligibility
            $qualifications_check_eligibility_request_body = new \OpenAPI\Client\Model\QualificationsCheckEligibilityRequestBody();
            $qualifications_check_eligibility_request_body->setCustomer(new \OpenAPI\Client\Model\Customer());
            $qualifications_check_eligibility_request_body->getCustomer()->setId($created_customer->getId());
            $qualifications_check_eligibility_request_body->setOrder(new \OpenAPI\Client\Model\Order());
            $qualifications_check_eligibility_request_body->getOrder()->setStatus("CREATED");
            $qualifications_check_eligibility_request_body->getOrder()->setItems([$order_item]);
            $qualifications_check_eligibility_request_body->setMode("BASIC");
            $qualifications_check_eligibility_request_body->setScenario("ALL");
            $check_eligibility_result = $this->qualificationsApiInstance->checkEligibility($qualifications_check_eligibility_request_body);

            $applicable_promotion_tiers = array_slice(array_filter($check_eligibility_result->getRedeemables()->getData(), function ($redeemable) {
                return $redeemable->getObject() === 'promotion_tier';
            }), 0, 3);
            $applicable_promotion_tiers_ids = array_map(function ($promotion_tier) {
                return $promotion_tier->getId();
            }, $applicable_promotion_tiers);

            $campaign_voucher = $this->campaignsApiInstance->addVouchersToCampaign($created_discount_campaign->getId(), 1);

            // stacked validation
            $validations_validate_request_body = new \OpenAPI\Client\Model\ValidationsValidateRequestBody();
            $validations_validate_request_body->setOrder(new \OpenAPI\Client\Model\Order());
            $validations_validate_request_body->getOrder()->setStatus("CREATED");
            $validations_validate_request_body->getOrder()->setItems([$order_item]);
            $validations_validate_request_body->setCustomer(new \OpenAPI\Client\Model\Customer());
            $validations_validate_request_body->getCustomer()->setSourceId($created_customer->getSourceId());
            $validations_validate_request_body_redeemables = [];
            foreach ($applicable_promotion_tiers_ids as $promotion_tier_id) {
                $redeemable = new \OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem();
                $redeemable->setId($promotion_tier_id);
                $redeemable->setObject("promotion_tier");
                array_push($validations_validate_request_body_redeemables, $redeemable);
            }
            $voucher_redeemable = new \OpenAPI\Client\Model\StackableValidateRedeemBaseRedeemablesItem();
            $voucher_redeemable->setId($campaign_voucher->getCode());
            $voucher_redeemable->setObject("voucher");
            array_push($validations_validate_request_body_redeemables, $voucher_redeemable);
            $validations_validate_request_body->setRedeemables($validations_validate_request_body_redeemables);
            $this->stackedDiscountsApiInstance->validateStackedDiscounts($validations_validate_request_body);

            // stacked redemption
            $redemptions_redeem_request_body = new \OpenAPI\Client\Model\RedemptionsRedeemRequestBody();
            $redemptions_redeem_request_body->setOrder(new \OpenAPI\Client\Model\Order());
            $redemptions_redeem_request_body->getOrder()->setStatus("CREATED");
            $redemptions_redeem_request_body->getOrder()->setItems([$order_item]);
            $redemptions_redeem_request_body->setCustomer(new \OpenAPI\Client\Model\Customer());
            $redemptions_redeem_request_body->getCustomer()->setSourceId($created_customer->getSourceId());
            $redemptions_redeem_request_body->setRedeemables($validations_validate_request_body_redeemables);
            $this->stackedDiscountsApiInstance->redeemStackedDiscounts($redemptions_redeem_request_body);
        }

        public function testListRedemptions()
        {
            $this->redemptionsApiInstance->listRedemptions(1, 1);
        }
}
