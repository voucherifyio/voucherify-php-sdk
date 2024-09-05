<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/publications.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class PublicationsTest extends TestCase
{
    private $publicationsApiInstance;
    private $voucherify;

    protected function setUp(): void
    {
        $this->publicationsApiInstance = Config::publicationsApiInstance();
        $this->voucherify = VoucherifyData::getInstance();
    }

    public function testCreatePublications()
    {
        $campaignName = $this->voucherify->getDiscountCampaign()->id;
        $customerId = $this->voucherify->getCustomer()->id;
        $createdPublication = createPublication($this->publicationsApiInstance, $customerId, $campaignName);

        $snapshot = 'publications/createdPublication';
        $keysToRemove = ['id', 'created_at', 'customer_id', 'tracking_id', 'source_id', 'vouchers_id', 'code', 'campaign', 'campaign_id', 'url', 'updated_at', 'holder_id', 'referrer_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdPublication), 'Error during test with creating publication');
    }
}
