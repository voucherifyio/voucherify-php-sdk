<?php
require_once __DIR__ . '/utils.php';

use OpenAPI\Client\Api\CampaignsApi;
use OpenAPI\Client\Api\ValidationRulesApi;
use OpenAPI\Client\Model\ValidationRulesCreateRequestBody;
use OpenAPI\Client\Model\ValidationRule;
use OpenAPI\Client\Model\ValidationRulesCreateResponseBody;
use OpenAPI\Client\Model\ValidationRuleApplicableTo;
use OpenAPI\Client\Model\ApplicableTo;
use OpenAPI\Client\Model\CampaignsCreateRequestBody;
use OpenAPI\Client\Model\CampaignsCreateResponseBody;
use OpenAPI\Client\Model\CampaignsCreateRequestBodyVoucher;
use OpenAPI\Client\Model\Discount;
use OpenAPI\Client\Model\CampaignsCreateRequestBodyPromotion;
use OpenAPI\Client\Model\CampaignsVouchersCreateCombinedResponseBody;
use OpenAPI\Client\Model\CampaignLoyaltyCard;
use \OpenAPI\Client\Model\Error;

function createValidationRuleApplicableTo(ValidationRulesApi $validationRulesApiInstance, $productId): ?ValidationRulesCreateResponseBody
{
    $validationRule = new ValidationRulesCreateRequestBody();
    $validationRuleApplicableTo = new ValidationRuleApplicableTo();
    $applicableTo = new ApplicableTo();

    $applicableTo->setObject("product");
    $applicableTo->setId($productId);

    $validationRuleApplicableTo->setIncluded([$applicableTo]);

    $validationRule->setName(generateRandomString());
    $validationRule->setApplicableTo($validationRuleApplicableTo);
    $validationRule->setType('basic');

    try {
        $createdValidaitonRule = $validationRulesApiInstance->createValidationRules($validationRule);
        return $createdValidaitonRule;
    } catch (Error $err) {
        error_log('Error during creating validation rule: ' . $err);
        return null;
    }
}

function createValidationRuleMoreThan(ValidationRulesApi $validationRulesApiInstance,): ?ValidationRulesCreateResponseBody
{
    $validationRuleRequestBody = new ValidationRulesCreateRequestBody();
    $rule = new ValidationRule();

    $conditions = [
        '$more_than' => [500000]
    ];

    $rule = [
        'name' => 'order.amount',
        'conditions' => $conditions,
        'rules' => new stdClass()
    ];

    $validationRuleRequestBody->setName(generateRandomString());
    $validationRuleRequestBody->setRules((object) ["1" => $rule]);
    $validationRuleRequestBody->setType('basic');

    try {
        $createdValidationRule = $validationRulesApiInstance->createValidationRules($validationRuleRequestBody);
        return $createdValidationRule;
    } catch (Error $err) {
        error_log('Error during creating validation rule: ' . $err);
        return null;
    }
}

function createDiscountCampaign(CampaignsApi $campaignsApiInstance, $validationRuleId): ?CampaignsCreateResponseBody
{
    $campaign = new CampaignsCreateRequestBody();
    $voucher = new CampaignsCreateRequestBodyVoucher();
    $discount = new Discount();

    $discount->setType('AMOUNT');
    $discount->setAmountOff(1000);

    $voucher->setType('DISCOUNT_VOUCHER');
    $voucher->setDiscount($discount);

    $campaign->setCampaignType('DISCOUNT_COUPONS');
    $campaign->setName(generateRandomString());
    $campaign->setType('AUTO_UPDATE');
    $campaign->setValidationRules([$validationRuleId]);
    $campaign->setVoucher($voucher);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating discount campaign: ' . $err);
        return null;
    }
}

function createPromotionCampaign(CampaignsApi $campaignsApiInstance): ?CampaignsCreateResponseBody
{
    $campaign = new CampaignsCreateRequestBody();
    $promotion = new CampaignsCreateRequestBodyPromotion();
    $discount = new Discount();

    $discount->setType('AMOUNT');
    $discount->setAmountOff(1000);

    $promotion->setTiers([
        "name" => generateRandomString(),
        "banner" => generateRandomString(),
        "action" => $discount
    ]);

    $campaign->setCampaignType('PROMOTION');
    $campaign->setName(generateRandomString());
    $campaign->setPromotion($promotion);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating promotion campaign: ' . $err);
        return null;
    }
}

function createLoyaltyCampaign(CampaignsApi $campaignsApiInstance): ?CampaignsCreateResponseBody
{
    $campaign = new CampaignsCreateRequestBody();
    $voucher = new CampaignsCreateRequestBodyVoucher();
    $loyaltyCard = new CampaignLoyaltyCard();

    $loyaltyCard->setPoints(1000);

    $voucher->setType('LOYALTY_CARD');
    $voucher->setLoyaltyCard($loyaltyCard);

    $campaign->setCampaignType('LOYALTY_PROGRAM');
    $campaign->setName(generateRandomString());
    $campaign->setVoucher($voucher);

    try {
        $createdCampaign = $campaignsApiInstance->createCampaign($campaign);
        return $createdCampaign;
    } catch (Error $err) {
        error_log('Error during creating loyalty campaign: ' . $err);
        return null;
    }
}

function deleteCampaign(CampaignsApi $campaignsApiInstance, string $campaignId)
{
    try {
        $deletedCampaign = $campaignsApiInstance->deleteCampaign($campaignId);
        return $deletedCampaign;
    } catch (Error $err) {
        error_log('Error during deleting campaign: ' . $err);
        return null;
    }
}

function addVouchersToCampaign(CampaignsApi $campaignsApiInstance, string $campaignId, int $vouchersCount): ?CampaignsVouchersCreateCombinedResponseBody
{
    try {
        $createdVoucher = $campaignsApiInstance->addVouchersToCampaign($campaignId, $vouchersCount);
        return $createdVoucher;
    } catch (Error $err) {
        error_log('Error during adding vouchers to campaign: ' . $err);
        return null;
    }
}

function generateAndReturnVouchersAddedToCampaign(CampaignsApi $campaignsApiInstance, string $campaignId, int $voucherCount)
{
    $vouchers = [];

    try {
        for ($i = 0; $i < $voucherCount; $i++) {
            $voucher = $campaignsApiInstance->addVouchersToCampaign($campaignId, 1);
            $vouchers[] = $voucher->getCode();
        }

        return $vouchers;
    } catch (Error $err) {
        error_log('Error during adding vouchers to campaign: ' . $err);
        return null;
    }
}
