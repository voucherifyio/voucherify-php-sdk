<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/campaigns.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class CampaignsTest extends TestCase
{
    private $campaignsApiInstance;
    private $validationRulesApiInstance;
    private $voucherify;

    protected function setUp(): void
    {
        $this->campaignsApiInstance = Config::campaignsApiInstance();
        $this->validationRulesApiInstance = Config::validationRulesApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreateValidationRuleWithApplicableTo()
    {
        $createdValidationRule = createValidationRuleApplicableTo($this->validationRulesApiInstance, $this->voucherify->getProduct()->id);

        $snapshot = 'campaigns/createdValidationRuleApplicableTo';
        $keysToRemove = ['name', 'id', 'created_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdValidationRule), 'Error during test with creating validation rule applicable to');

        $createdValidationRuleJSON = json_decode($createdValidationRule);
        $this->voucherify->setValidationRule($createdValidationRuleJSON);
    }

    public function testCreateDiscountCampaignWithApplicableToValidationRule()
    {
        $createdCampaign = createDiscountCampaign($this->campaignsApiInstance, $this->voucherify->getValidationRule()->id);

        $snapshot = 'campaigns/createdDiscountCampaignWithValidationRule';
        $keysToRemove = ['name', 'id', 'created_at', 'rule_id', 'related_object_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdCampaign), 'Error during test with creating discount campaign with applicable validation rule');

        $createdCampaignJSON = json_decode($createdCampaign);
        $this->voucherify->setDiscountCampaign($createdCampaignJSON);
    }

    public function testCreatePromotionCampaign()
    {
        $createdCampaign = createPromotionCampaign($this->campaignsApiInstance);

        $snapshot = 'campaigns/createdPromotionCampaign';
        $keysToRemove = ['name', 'id', 'created_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdCampaign), 'Error during test with creating promotion campaign');

        $createdCampaignJSON = json_decode($createdCampaign);
        $this->voucherify->setPromotionCampaign($createdCampaignJSON);
    }

    public function testCreateLoyaltyCampaign()
    {
        $createdCampaign = createLoyaltyCampaign($this->campaignsApiInstance);

        $snapshot = 'campaigns/createdLoyaltyCampaign';
        $keysToRemove = ['id', 'name', 'created_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdCampaign), 'Error during test with creating loyalty campaign');

        $createdCampaignJSON = json_decode($createdCampaign);
        $this->voucherify->setLoyaltyCampaign($createdCampaignJSON);
    }

    public function testDeletePromotionCampaign()
    {
        $deletedPromotionCampaign = deleteCampaign($this->campaignsApiInstance, $this->voucherify->getPromotionCampaign()->id);

        $this->assertNotNull($deletedPromotionCampaign, 'Error during test with deleting promotion campaign');
    }

    public function testAddVoucherToCampaign()
    {
        $createdVoucher = addVouchersToCampaign($this->campaignsApiInstance, $this->voucherify->getDiscountCampaign()->id, 1);

        $snapshot = 'campaigns/addedVoucherToCampaign';
        $keysToRemove = ['id', 'code', 'campaign', 'campaign_id', 'url', 'created_at', 'rule_id', 'related_object_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdVoucher), 'Error during test with adding voucher to campaign');

        $createdVoucherJSON = json_decode($createdVoucher);
        $this->voucherify->setVoucher($createdVoucherJSON);
    }

    public function testCreateBundleOfVouchers()
    {
        $asyncAction = addVouchersToCampaign($this->campaignsApiInstance, $this->voucherify->getDiscountCampaign()->id, 5);

        $snapshot = 'campaigns/createdBundleOfVouchers';
        $keysToRemove = ['async_action_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $asyncAction), 'Error during test with creating bundle of vouchers');
    }

    public function testAddLoyaltyCardToCampaign()
    {
        $createdLoyaltyCard = addVouchersToCampaign($this->campaignsApiInstance, $this->voucherify->getLoyaltyCampaign()->id, 1);

        $snapshot = 'campaigns/createdLoyaltyCard';
        $keysToRemove = ['id', 'code', 'campaign', 'campaign_id', 'url', 'created_at'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdLoyaltyCard), 'Error during test with adding loyalty card to campaign');

        $createdLoyaltyCardJSON = json_decode($createdLoyaltyCard);
        $this->voucherify->setLoyaltyCard($createdLoyaltyCardJSON);
    }

    public function testCreateCampaignWithValidationRuleMoreThan()
    {
        $validationRule = createValidationRuleMoreThan($this->validationRulesApiInstance);
        $campaign = createDiscountCampaign($this->campaignsApiInstance, $validationRule->getId());

        $validationRuleSnapshot = 'campaigns/createdValidationRuleMoreThan';
        $campaignSnapshot = 'campaigns/createdDiscountCampaignWithValidationRule';
        $keysToRemove = ['name', 'id', 'created_at', 'rule_id', 'related_object_id'];
        $filteredSnapshot = filterSnapshot($validationRuleSnapshot, $keysToRemove);
        $filteredSnapshot2 = filterSnapshot($campaignSnapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $validationRule), 'Error during test with creating validation rule more than');
        $this->assertTrue(validateDeepMatch($filteredSnapshot2, $campaign), 'Error during test with creating discount campaign');

        $voucher = addVouchersToCampaign($this->campaignsApiInstance, $campaign->getId(), 1);
        $voucherJSON = json_decode($voucher);

        $this->voucherify->setVoucherWithMoreThanValidationRule($voucherJSON);
    }
}
