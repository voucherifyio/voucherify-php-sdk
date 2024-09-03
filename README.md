# OpenAPIClient-php

Voucherify promotion engine REST API. Please see https://docs.voucherify.io/docs for more details.

For more information, please visit [https://www.voucherify.io/contact-support](https://www.voucherify.io/contact-support).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AsyncActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$async_action_id = 'async_action_id_example'; // string | Unique ID of the asynchronous operation.

try {
    $result = $apiInstance->getAsyncAction($async_action_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncActionsApi->getAsyncAction: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.voucherify.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AsyncActionsApi* | [**getAsyncAction**](docs/Api/AsyncActionsApi.md#getasyncaction) | **GET** /v1/async-actions/{asyncActionId} | Get Async Action
*AsyncActionsApi* | [**listAsyncActions**](docs/Api/AsyncActionsApi.md#listasyncactions) | **GET** /v1/async-actions | List Async Actions
*CampaignsApi* | [**addVoucherWithSpecificCodeToCampaign**](docs/Api/CampaignsApi.md#addvoucherwithspecificcodetocampaign) | **POST** /v1/campaigns/{campaignId}/vouchers/{code} | Add Voucher with Specific Code to Campaign
*CampaignsApi* | [**addVouchersToCampaign**](docs/Api/CampaignsApi.md#addvoucherstocampaign) | **POST** /v1/campaigns/{campaignId}/vouchers | Add Vouchers to Campaign
*CampaignsApi* | [**createCampaign**](docs/Api/CampaignsApi.md#createcampaign) | **POST** /v1/campaigns | Create Campaign
*CampaignsApi* | [**deleteCampaign**](docs/Api/CampaignsApi.md#deletecampaign) | **DELETE** /v1/campaigns/{campaignId} | Delete Campaign
*CampaignsApi* | [**disableCampaign**](docs/Api/CampaignsApi.md#disablecampaign) | **POST** /v1/campaigns/{campaignId}/disable | Disable Campaign
*CampaignsApi* | [**enableCampaign**](docs/Api/CampaignsApi.md#enablecampaign) | **POST** /v1/campaigns/{campaignId}/enable | Enable Campaign
*CampaignsApi* | [**getCampaign**](docs/Api/CampaignsApi.md#getcampaign) | **GET** /v1/campaigns/{campaignId} | Get Campaign
*CampaignsApi* | [**importVouchersToCampaign**](docs/Api/CampaignsApi.md#importvoucherstocampaign) | **POST** /v1/campaigns/{campaignId}/import | Import Vouchers to Campaign
*CampaignsApi* | [**importVouchersToCampaignUsingCsv**](docs/Api/CampaignsApi.md#importvoucherstocampaignusingcsv) | **POST** /v1/campaigns/{campaignId}/importCSV | Import Vouchers to Campaign by CSV
*CampaignsApi* | [**listCampaigns**](docs/Api/CampaignsApi.md#listcampaigns) | **GET** /v1/campaigns | List Campaigns
*CampaignsApi* | [**updateCampaign**](docs/Api/CampaignsApi.md#updatecampaign) | **PUT** /v1/campaigns/{campaignId} | Update Campaign
*CategoriesApi* | [**createCategory**](docs/Api/CategoriesApi.md#createcategory) | **POST** /v1/categories | Create Category
*CategoriesApi* | [**deleteCategory**](docs/Api/CategoriesApi.md#deletecategory) | **DELETE** /v1/categories/{categoryId} | Delete Category
*CategoriesApi* | [**getCategory**](docs/Api/CategoriesApi.md#getcategory) | **GET** /v1/categories/{categoryId} | Get Category
*CategoriesApi* | [**listCategories**](docs/Api/CategoriesApi.md#listcategories) | **GET** /v1/categories | List Categories
*CategoriesApi* | [**updateCategory**](docs/Api/CategoriesApi.md#updatecategory) | **PUT** /v1/categories/{categoryId} | Update Category
*ClientSideApi* | [**checkEligibilityClientSide**](docs/Api/ClientSideApi.md#checkeligibilityclientside) | **POST** /client/v1/qualifications | Check Eligibility (client-side)
*ClientSideApi* | [**listPromotionTiersClientSide**](docs/Api/ClientSideApi.md#listpromotiontiersclientside) | **GET** /client/v1/promotions/tiers | List Promotion Tiers (client-side)
*ClientSideApi* | [**redeemStackedDiscountsClientSide**](docs/Api/ClientSideApi.md#redeemstackeddiscountsclientside) | **POST** /client/v1/redemptions | Redeem Stackable Discounts (client-side)
*ClientSideApi* | [**trackCustomEventClientSide**](docs/Api/ClientSideApi.md#trackcustomeventclientside) | **POST** /client/v1/events | Track Custom Event (client-side)
*ClientSideApi* | [**validateStackedDiscountsClientSide**](docs/Api/ClientSideApi.md#validatestackeddiscountsclientside) | **POST** /client/v1/validations | Validate Stackable Discounts (client-side)
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /v1/customers | Create Customer
*CustomersApi* | [**customerPermanentlyDeletion**](docs/Api/CustomersApi.md#customerpermanentlydeletion) | **POST** /v1/customers/{customerId}/permanent-deletion | Delete Customer Permanently
*CustomersApi* | [**deleteCustomer**](docs/Api/CustomersApi.md#deletecustomer) | **DELETE** /v1/customers/{customerId} | Delete Customer
*CustomersApi* | [**getCustomer**](docs/Api/CustomersApi.md#getcustomer) | **GET** /v1/customers/{customerId} | Get Customer
*CustomersApi* | [**importCustomersUsingCsv**](docs/Api/CustomersApi.md#importcustomersusingcsv) | **POST** /v1/customers/importCSV | Import and Update Customers using CSV
*CustomersApi* | [**listCustomerActivity**](docs/Api/CustomersApi.md#listcustomeractivity) | **GET** /v1/customers/{customerId}/activity | List Customer Activity
*CustomersApi* | [**listCustomerRedeemables**](docs/Api/CustomersApi.md#listcustomerredeemables) | **GET** /v1/customers/{customerId}/redeemables | List Customer&#39;s Redeemables
*CustomersApi* | [**listCustomerSegments**](docs/Api/CustomersApi.md#listcustomersegments) | **GET** /v1/customers/{customerId}/segments | List Customer&#39;s Segments
*CustomersApi* | [**listCustomers**](docs/Api/CustomersApi.md#listcustomers) | **GET** /v1/customers | List Customers
*CustomersApi* | [**updateCustomer**](docs/Api/CustomersApi.md#updatecustomer) | **PUT** /v1/customers/{customerId} | Update Customer
*CustomersApi* | [**updateCustomersConsents**](docs/Api/CustomersApi.md#updatecustomersconsents) | **PUT** /v1/customers/{customerId}/consents | Update Customer&#39;s consents [Deprecated]
*CustomersApi* | [**updateCustomersInBulk**](docs/Api/CustomersApi.md#updatecustomersinbulk) | **POST** /v1/customers/bulk/async | Update Customers in Bulk
*CustomersApi* | [**updateCustomersMetadataInBulk**](docs/Api/CustomersApi.md#updatecustomersmetadatainbulk) | **POST** /v1/customers/metadata/async | Update Customers&#39; Metadata in Bulk
*EventsApi* | [**trackCustomEvent**](docs/Api/EventsApi.md#trackcustomevent) | **POST** /v1/events | Track Custom Event
*ExportsApi* | [**createExport**](docs/Api/ExportsApi.md#createexport) | **POST** /v1/exports | Create Export
*ExportsApi* | [**deleteExport**](docs/Api/ExportsApi.md#deleteexport) | **DELETE** /v1/exports/{exportId} | Delete Export
*ExportsApi* | [**downloadExport**](docs/Api/ExportsApi.md#downloadexport) | **GET** /v1/exports/{export_Id} | Download Export
*ExportsApi* | [**getExport**](docs/Api/ExportsApi.md#getexport) | **GET** /v1/exports/{exportId} | Get Export
*ExportsApi* | [**listExports**](docs/Api/ExportsApi.md#listexports) | **GET** /v1/exports | List Exports
*LoyaltiesApi* | [**addMember**](docs/Api/LoyaltiesApi.md#addmember) | **POST** /v1/loyalties/{campaignId}/members | Add Member
*LoyaltiesApi* | [**createEarningRule**](docs/Api/LoyaltiesApi.md#createearningrule) | **POST** /v1/loyalties/{campaignId}/earning-rules | Create Earning Rule
*LoyaltiesApi* | [**createInBulkLoyaltyTiers**](docs/Api/LoyaltiesApi.md#createinbulkloyaltytiers) | **POST** /v1/loyalties/{campaignId}/tiers | Create loyalty tiers
*LoyaltiesApi* | [**createLoyaltyProgram**](docs/Api/LoyaltiesApi.md#createloyaltyprogram) | **POST** /v1/loyalties | Create Loyalty Campaign
*LoyaltiesApi* | [**createPointsExpirationExport**](docs/Api/LoyaltiesApi.md#createpointsexpirationexport) | **POST** /v1/loyalties/{campaignId}/points-expiration/export | Create Points Expiration Export
*LoyaltiesApi* | [**createRewardAssignment1**](docs/Api/LoyaltiesApi.md#createrewardassignment1) | **POST** /v1/loyalties/{campaignId}/rewards | Create Reward Assignment
*LoyaltiesApi* | [**deleteEarningRule**](docs/Api/LoyaltiesApi.md#deleteearningrule) | **DELETE** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Delete Earning Rule
*LoyaltiesApi* | [**deleteLoyaltyProgram**](docs/Api/LoyaltiesApi.md#deleteloyaltyprogram) | **DELETE** /v1/loyalties/{campaignId} | Delete Loyalty Campaign
*LoyaltiesApi* | [**deleteRewardAssignment1**](docs/Api/LoyaltiesApi.md#deleterewardassignment1) | **DELETE** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Delete Reward Assignment
*LoyaltiesApi* | [**disableEarningRule**](docs/Api/LoyaltiesApi.md#disableearningrule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable | Disable Earning Rule
*LoyaltiesApi* | [**enableEarningRule**](docs/Api/LoyaltiesApi.md#enableearningrule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/enable | Enable Earning Rule
*LoyaltiesApi* | [**exportLoyaltyCardTransactions**](docs/Api/LoyaltiesApi.md#exportloyaltycardtransactions) | **POST** /v1/loyalties/members/{memberId}/transactions/export | Export Loyalty Card Transactions
*LoyaltiesApi* | [**exportLoyaltyCardTransactions1**](docs/Api/LoyaltiesApi.md#exportloyaltycardtransactions1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transactions/export | Export Loyalty Card Transactions
*LoyaltiesApi* | [**getEarningRule**](docs/Api/LoyaltiesApi.md#getearningrule) | **GET** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Get Earning Rule
*LoyaltiesApi* | [**getLoyaltyProgram**](docs/Api/LoyaltiesApi.md#getloyaltyprogram) | **GET** /v1/loyalties/{campaignId} | Get Loyalty Campaign
*LoyaltiesApi* | [**getLoyaltyTier**](docs/Api/LoyaltiesApi.md#getloyaltytier) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId} | Get Loyalty Tier
*LoyaltiesApi* | [**getMember**](docs/Api/LoyaltiesApi.md#getmember) | **GET** /v1/loyalties/members/{memberId} | Get Member
*LoyaltiesApi* | [**getMember1**](docs/Api/LoyaltiesApi.md#getmember1) | **GET** /v1/loyalties/{campaignId}/members/{memberId} | Get Member
*LoyaltiesApi* | [**getRewardAssignment1**](docs/Api/LoyaltiesApi.md#getrewardassignment1) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId} | Get Reward Assignment
*LoyaltiesApi* | [**getRewardAssignment2**](docs/Api/LoyaltiesApi.md#getrewardassignment2) | **GET** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Get Reward Assignment
*LoyaltiesApi* | [**getRewardDetails**](docs/Api/LoyaltiesApi.md#getrewarddetails) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId}/reward | Get Reward Details
*LoyaltiesApi* | [**listEarningRules**](docs/Api/LoyaltiesApi.md#listearningrules) | **GET** /v1/loyalties/{campaignId}/earning-rules | List Earning Rules
*LoyaltiesApi* | [**listLoyaltyCardTransactions**](docs/Api/LoyaltiesApi.md#listloyaltycardtransactions) | **GET** /v1/loyalties/members/{memberId}/transactions | List Loyalty Card Transactions
*LoyaltiesApi* | [**listLoyaltyCardTransactions1**](docs/Api/LoyaltiesApi.md#listloyaltycardtransactions1) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/transactions | List Loyalty Card Transactions
*LoyaltiesApi* | [**listLoyaltyPrograms**](docs/Api/LoyaltiesApi.md#listloyaltyprograms) | **GET** /v1/loyalties | List Loyalty Campaigns
*LoyaltiesApi* | [**listLoyaltyTierEarningRules**](docs/Api/LoyaltiesApi.md#listloyaltytierearningrules) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/earning-rules | List Loyalty Tier Earning Rules
*LoyaltiesApi* | [**listLoyaltyTierRewards**](docs/Api/LoyaltiesApi.md#listloyaltytierrewards) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/rewards | List Loyalty Tier Rewards
*LoyaltiesApi* | [**listLoyaltyTiers**](docs/Api/LoyaltiesApi.md#listloyaltytiers) | **GET** /v1/loyalties/{campaignId}/tiers | List Loyalty Tiers
*LoyaltiesApi* | [**listMemberActivity**](docs/Api/LoyaltiesApi.md#listmemberactivity) | **GET** /v1/loyalties/members/{memberId}/activity | List Member Activity
*LoyaltiesApi* | [**listMemberActivity1**](docs/Api/LoyaltiesApi.md#listmemberactivity1) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/activity | List Member Activity
*LoyaltiesApi* | [**listMemberLoyaltyTier**](docs/Api/LoyaltiesApi.md#listmemberloyaltytier) | **GET** /v1/loyalties/members/{memberId}/tiers | List Member&#39;s Loyalty Tiers
*LoyaltiesApi* | [**listMemberRewards**](docs/Api/LoyaltiesApi.md#listmemberrewards) | **GET** /v1/loyalties/members/{memberId}/rewards | List Member Rewards
*LoyaltiesApi* | [**listMembers**](docs/Api/LoyaltiesApi.md#listmembers) | **GET** /v1/loyalties/{campaignId}/members | List Members
*LoyaltiesApi* | [**listPointsExpiration**](docs/Api/LoyaltiesApi.md#listpointsexpiration) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/points-expiration | Get Points Expiration
*LoyaltiesApi* | [**listRewardAssignments1**](docs/Api/LoyaltiesApi.md#listrewardassignments1) | **GET** /v1/loyalties/{campaignId}/reward-assignments | List Reward Assignments
*LoyaltiesApi* | [**listRewardAssignments2**](docs/Api/LoyaltiesApi.md#listrewardassignments2) | **GET** /v1/loyalties/{campaignId}/rewards | List Reward Assignments
*LoyaltiesApi* | [**redeemReward**](docs/Api/LoyaltiesApi.md#redeemreward) | **POST** /v1/loyalties/members/{memberId}/redemption | Redeem Reward
*LoyaltiesApi* | [**redeemReward1**](docs/Api/LoyaltiesApi.md#redeemreward1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/redemption | Redeem Reward
*LoyaltiesApi* | [**transferPoints**](docs/Api/LoyaltiesApi.md#transferpoints) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transfers | Transfer Loyalty Points
*LoyaltiesApi* | [**updateEarningRule**](docs/Api/LoyaltiesApi.md#updateearningrule) | **PUT** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Update Earning Rule
*LoyaltiesApi* | [**updateLoyaltyCardBalance**](docs/Api/LoyaltiesApi.md#updateloyaltycardbalance) | **POST** /v1/loyalties/members/{memberId}/balance | Add or Remove Loyalty Card Balance
*LoyaltiesApi* | [**updateLoyaltyCardBalance1**](docs/Api/LoyaltiesApi.md#updateloyaltycardbalance1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/balance | Add or Remove Loyalty Card Balance
*LoyaltiesApi* | [**updateLoyaltyProgram**](docs/Api/LoyaltiesApi.md#updateloyaltyprogram) | **PUT** /v1/loyalties/{campaignId} | Update Loyalty Campaign
*LoyaltiesApi* | [**updateRewardAssignment1**](docs/Api/LoyaltiesApi.md#updaterewardassignment1) | **PUT** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Update Reward Assignment
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /v1/orders | Create Order
*OrdersApi* | [**createOrderExport**](docs/Api/OrdersApi.md#createorderexport) | **POST** /v1/orders/export | Create Orders Export
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /v1/orders/{orderId} | Get Order
*OrdersApi* | [**importOrders**](docs/Api/OrdersApi.md#importorders) | **POST** /v1/orders/import | Import Orders
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /v1/orders | List Orders
*OrdersApi* | [**updateOrder**](docs/Api/OrdersApi.md#updateorder) | **PUT** /v1/orders/{orderId} | Update Order
*ProductCollectionsApi* | [**createProductCollection**](docs/Api/ProductCollectionsApi.md#createproductcollection) | **POST** /v1/product-collections | Create Product Collection
*ProductCollectionsApi* | [**deleteProductCollection**](docs/Api/ProductCollectionsApi.md#deleteproductcollection) | **DELETE** /v1/product-collections/{productCollectionId} | Delete Product Collection
*ProductCollectionsApi* | [**getProductCollection**](docs/Api/ProductCollectionsApi.md#getproductcollection) | **GET** /v1/product-collections/{productCollectionId} | Get Product Collection
*ProductCollectionsApi* | [**listProductCollections**](docs/Api/ProductCollectionsApi.md#listproductcollections) | **GET** /v1/product-collections | List Product Collections
*ProductCollectionsApi* | [**listProductsInCollection**](docs/Api/ProductCollectionsApi.md#listproductsincollection) | **GET** /v1/product-collections/{productCollectionId}/products | List Products in Collection
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /v1/products | Create Product
*ProductsApi* | [**createSku**](docs/Api/ProductsApi.md#createsku) | **POST** /v1/products/{productId}/skus | Create SKU
*ProductsApi* | [**deleteProduct**](docs/Api/ProductsApi.md#deleteproduct) | **DELETE** /v1/products/{productId} | Delete Product
*ProductsApi* | [**deleteSku**](docs/Api/ProductsApi.md#deletesku) | **DELETE** /v1/products/{productId}/skus/{skuId} | Delete SKU
*ProductsApi* | [**getProduct**](docs/Api/ProductsApi.md#getproduct) | **GET** /v1/products/{productId} | Get Product
*ProductsApi* | [**getSku**](docs/Api/ProductsApi.md#getsku) | **GET** /v1/skus/{skuId} | Get SKU
*ProductsApi* | [**importProductsUsingCsv**](docs/Api/ProductsApi.md#importproductsusingcsv) | **POST** /v1/products/importCSV | Import Products using CSV
*ProductsApi* | [**importSkusUsingCsv**](docs/Api/ProductsApi.md#importskususingcsv) | **POST** /v1/skus/importCSV | Import SKUs using CSV
*ProductsApi* | [**listProducts**](docs/Api/ProductsApi.md#listproducts) | **GET** /v1/products | List Products
*ProductsApi* | [**listSkusInProduct**](docs/Api/ProductsApi.md#listskusinproduct) | **GET** /v1/products/{productId}/skus | List SKUs in Product
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /v1/products/{productId} | Update Product
*ProductsApi* | [**updateProductsInBulk**](docs/Api/ProductsApi.md#updateproductsinbulk) | **POST** /v1/products/bulk/async | Update Products in Bulk
*ProductsApi* | [**updateProductsMetadataInBulk**](docs/Api/ProductsApi.md#updateproductsmetadatainbulk) | **POST** /v1/products/metadata/async | Update Products&#39; Metadata in Bulk
*ProductsApi* | [**updateSku**](docs/Api/ProductsApi.md#updatesku) | **PUT** /v1/products/{productId}/skus/{skuId} | Update SKU
*PromotionsApi* | [**addPromotionTierToCampaign**](docs/Api/PromotionsApi.md#addpromotiontiertocampaign) | **POST** /v1/promotions/{campaignId}/tiers | Add Promotion Tier to Campaign
*PromotionsApi* | [**createPromotionStack**](docs/Api/PromotionsApi.md#createpromotionstack) | **POST** /v1/promotions/{campaignId}/stacks | Create Promotion Stack
*PromotionsApi* | [**deletePromotionStack**](docs/Api/PromotionsApi.md#deletepromotionstack) | **DELETE** /v1/promotions/{campaignId}/stacks/{stackId} | Delete Promotion Stack
*PromotionsApi* | [**deletePromotionTier**](docs/Api/PromotionsApi.md#deletepromotiontier) | **DELETE** /v1/promotions/tiers/{promotionTierId} | Delete Promotion Tier
*PromotionsApi* | [**disablePromotionTier**](docs/Api/PromotionsApi.md#disablepromotiontier) | **POST** /v1/promotions/tiers/{promotionTierId}/disable | Disable Promotion Tier
*PromotionsApi* | [**enablePromotionTier**](docs/Api/PromotionsApi.md#enablepromotiontier) | **POST** /v1/promotions/tiers/{promotionTierId}/enable | Enable Promotion Tier
*PromotionsApi* | [**getPromotionStack**](docs/Api/PromotionsApi.md#getpromotionstack) | **GET** /v1/promotions/{campaignId}/stacks/{stackId} | Get Promotion Stack
*PromotionsApi* | [**getPromotionTier**](docs/Api/PromotionsApi.md#getpromotiontier) | **GET** /v1/promotions/tiers/{promotionTierId} | Get Promotion Tier
*PromotionsApi* | [**listAllPromotionStacks**](docs/Api/PromotionsApi.md#listallpromotionstacks) | **GET** /v1/promotions/stacks | List Promotion Stacks
*PromotionsApi* | [**listPromotionStacksInCampaign**](docs/Api/PromotionsApi.md#listpromotionstacksincampaign) | **GET** /v1/promotions/{campaignId}/stacks | List Promotion Stacks in Campaign
*PromotionsApi* | [**listPromotionTiers**](docs/Api/PromotionsApi.md#listpromotiontiers) | **GET** /v1/promotions/tiers | List Promotion Tiers
*PromotionsApi* | [**listPromotionTiersFromCampaign**](docs/Api/PromotionsApi.md#listpromotiontiersfromcampaign) | **GET** /v1/promotions/{campaignId}/tiers | List Promotion Tiers from Campaign
*PromotionsApi* | [**updatePromotionStack**](docs/Api/PromotionsApi.md#updatepromotionstack) | **PUT** /v1/promotions/{campaignId}/stacks/{stackId} | Update Promotion Stack
*PromotionsApi* | [**updatePromotionTier**](docs/Api/PromotionsApi.md#updatepromotiontier) | **PUT** /v1/promotions/tiers/{promotionTierId} | Update Promotion Tier
*PublicationsApi* | [**createPublication**](docs/Api/PublicationsApi.md#createpublication) | **POST** /v1/publications | Create Publication
*PublicationsApi* | [**createPublication1**](docs/Api/PublicationsApi.md#createpublication1) | **GET** /v1/publications/create | Create Publication
*PublicationsApi* | [**listPublications**](docs/Api/PublicationsApi.md#listpublications) | **GET** /v1/publications | List Publications
*QualificationsApi* | [**checkEligibility**](docs/Api/QualificationsApi.md#checkeligibility) | **POST** /v1/qualifications | Check Eligibility
*RedemptionsApi* | [**getRedemption**](docs/Api/RedemptionsApi.md#getredemption) | **GET** /v1/redemptions/{redemptionId} | Get Redemption
*RedemptionsApi* | [**getVoucherRedemptions**](docs/Api/RedemptionsApi.md#getvoucherredemptions) | **GET** /v1/vouchers/{code}/redemption | Get Voucher&#39;s Redemptions
*RedemptionsApi* | [**listRedemptions**](docs/Api/RedemptionsApi.md#listredemptions) | **GET** /v1/redemptions | List Redemptions
*RedemptionsApi* | [**redeemStackedDiscounts**](docs/Api/RedemptionsApi.md#redeemstackeddiscounts) | **POST** /v1/redemptions | Redeem Stackable Discounts
*RedemptionsApi* | [**rollbackRedemption**](docs/Api/RedemptionsApi.md#rollbackredemption) | **POST** /v1/redemptions/{redemptionId}/rollback | Rollback Redemption
*RedemptionsApi* | [**rollbackStackedRedemptions**](docs/Api/RedemptionsApi.md#rollbackstackedredemptions) | **POST** /v1/redemptions/{parentRedemptionId}/rollbacks | Rollback Stackable Redemptions
*RewardsApi* | [**createReward**](docs/Api/RewardsApi.md#createreward) | **POST** /v1/rewards | Create Reward
*RewardsApi* | [**createRewardAssignment**](docs/Api/RewardsApi.md#createrewardassignment) | **POST** /v1/rewards/{rewardId}/assignments | Create Reward Assignment
*RewardsApi* | [**deleteReward**](docs/Api/RewardsApi.md#deletereward) | **DELETE** /v1/rewards/{rewardId} | Delete Reward
*RewardsApi* | [**deleteRewardAssignment**](docs/Api/RewardsApi.md#deleterewardassignment) | **DELETE** /v1/rewards/{rewardId}/assignments/{assignmentId} | Delete Reward Assignment
*RewardsApi* | [**getReward**](docs/Api/RewardsApi.md#getreward) | **GET** /v1/rewards/{rewardId} | Get Reward
*RewardsApi* | [**getRewardAssignment**](docs/Api/RewardsApi.md#getrewardassignment) | **GET** /v1/rewards/{rewardId}/assignments/{assignmentId} | Get Reward Assignment
*RewardsApi* | [**listRewardAssignments**](docs/Api/RewardsApi.md#listrewardassignments) | **GET** /v1/rewards/{rewardId}/assignments | List Reward Assignments
*RewardsApi* | [**listRewards**](docs/Api/RewardsApi.md#listrewards) | **GET** /v1/rewards | List Rewards
*RewardsApi* | [**updateReward**](docs/Api/RewardsApi.md#updatereward) | **PUT** /v1/rewards/{rewardId} | Update Reward
*RewardsApi* | [**updateRewardAssignment**](docs/Api/RewardsApi.md#updaterewardassignment) | **PUT** /v1/rewards/{rewardId}/assignments/{assignmentId} | Update Reward Assignment
*SegmentsApi* | [**createSegment**](docs/Api/SegmentsApi.md#createsegment) | **POST** /v1/segments | Create Segment
*SegmentsApi* | [**deleteSegment**](docs/Api/SegmentsApi.md#deletesegment) | **DELETE** /v1/segments/{segmentId} | Delete Segment
*SegmentsApi* | [**getSegment**](docs/Api/SegmentsApi.md#getsegment) | **GET** /v1/segments/{segmentId} | Get Segment
*ValidationRulesApi* | [**createValidationRuleAssignment**](docs/Api/ValidationRulesApi.md#createvalidationruleassignment) | **POST** /v1/validation-rules/{validationRuleId}/assignments | Create Validation Rules Assignments
*ValidationRulesApi* | [**createValidationRules**](docs/Api/ValidationRulesApi.md#createvalidationrules) | **POST** /v1/validation-rules | Create Validation Rules
*ValidationRulesApi* | [**deleteValidationRuleAssignment**](docs/Api/ValidationRulesApi.md#deletevalidationruleassignment) | **DELETE** /v1/validation-rules/{validationRuleId}/assignments/{assignmentId} | Delete Validation Rule Assignment
*ValidationRulesApi* | [**deleteValidationRules**](docs/Api/ValidationRulesApi.md#deletevalidationrules) | **DELETE** /v1/validation-rules/{validationRuleId} | Delete Validation Rule
*ValidationRulesApi* | [**getValidationRule**](docs/Api/ValidationRulesApi.md#getvalidationrule) | **GET** /v1/validation-rules/{validationRuleId} | Get Validation Rule
*ValidationRulesApi* | [**listValidationRuleAssignments**](docs/Api/ValidationRulesApi.md#listvalidationruleassignments) | **GET** /v1/validation-rules/{validationRuleId}/assignments | List Validation Rule Assignments
*ValidationRulesApi* | [**listValidationRules**](docs/Api/ValidationRulesApi.md#listvalidationrules) | **GET** /v1/validation-rules | List Validation Rules
*ValidationRulesApi* | [**listValidationRulesAssignments**](docs/Api/ValidationRulesApi.md#listvalidationrulesassignments) | **GET** /v1/validation-rules-assignments | List Validation Rules&#39; Assignment(s)
*ValidationRulesApi* | [**updateValidationRule**](docs/Api/ValidationRulesApi.md#updatevalidationrule) | **PUT** /v1/validation-rules/{validationRuleId} | Update Validation Rule
*ValidationsApi* | [**validateStackedDiscounts**](docs/Api/ValidationsApi.md#validatestackeddiscounts) | **POST** /v1/validations | Validate Stackable Discounts
*VouchersApi* | [**createVoucher**](docs/Api/VouchersApi.md#createvoucher) | **POST** /v1/vouchers/{code} | Create Voucher
*VouchersApi* | [**deleteVoucher**](docs/Api/VouchersApi.md#deletevoucher) | **DELETE** /v1/vouchers/{code} | Delete Voucher
*VouchersApi* | [**disableVoucher**](docs/Api/VouchersApi.md#disablevoucher) | **POST** /v1/vouchers/{code}/disable | Disable Voucher
*VouchersApi* | [**enableVoucher**](docs/Api/VouchersApi.md#enablevoucher) | **POST** /v1/vouchers/{code}/enable | Enable Voucher
*VouchersApi* | [**exportVoucherTransactions**](docs/Api/VouchersApi.md#exportvouchertransactions) | **POST** /v1/vouchers/{code}/transactions/export | Export Voucher Transactions
*VouchersApi* | [**generateRandomCode**](docs/Api/VouchersApi.md#generaterandomcode) | **POST** /v1/vouchers | Generate Random Code
*VouchersApi* | [**getVoucher**](docs/Api/VouchersApi.md#getvoucher) | **GET** /v1/vouchers/{code} | Get Voucher
*VouchersApi* | [**importVouchers**](docs/Api/VouchersApi.md#importvouchers) | **POST** /v1/vouchers/import | Import Vouchers
*VouchersApi* | [**importVouchersUsingCsv**](docs/Api/VouchersApi.md#importvouchersusingcsv) | **POST** /v1/vouchers/importCSV | Import Vouchers using CSV
*VouchersApi* | [**listVoucherTransactions**](docs/Api/VouchersApi.md#listvouchertransactions) | **GET** /v1/vouchers/{code}/transactions | List Voucher Transactions
*VouchersApi* | [**listVouchers**](docs/Api/VouchersApi.md#listvouchers) | **GET** /v1/vouchers | List Vouchers
*VouchersApi* | [**releaseValidationSession**](docs/Api/VouchersApi.md#releasevalidationsession) | **DELETE** /v1/vouchers/{code}/sessions/{sessionKey} | Release Validation Session
*VouchersApi* | [**updateVoucher**](docs/Api/VouchersApi.md#updatevoucher) | **PUT** /v1/vouchers/{code} | Update Voucher
*VouchersApi* | [**updateVoucherBalance**](docs/Api/VouchersApi.md#updatevoucherbalance) | **POST** /v1/vouchers/{code}/balance | Add or Remove Voucher Balance
*VouchersApi* | [**updateVouchersInBulk**](docs/Api/VouchersApi.md#updatevouchersinbulk) | **POST** /v1/vouchers/bulk/async | Update Vouchers in Bulk
*VouchersApi* | [**updateVouchersMetadataInBulk**](docs/Api/VouchersApi.md#updatevouchersmetadatainbulk) | **POST** /v1/vouchers/metadata/async | Update Vouchers&#39; Metadata in Bulk

## Models

- [AccessSettingsCampaignAssignmentsList](docs/Model/AccessSettingsCampaignAssignmentsList.md)
- [ApplicableTo](docs/Model/ApplicableTo.md)
- [ApplicableToResultList](docs/Model/ApplicableToResultList.md)
- [AreaStoreCampaignAssignment](docs/Model/AreaStoreCampaignAssignment.md)
- [AsyncActionBase](docs/Model/AsyncActionBase.md)
- [AsyncActionGetResponseBody](docs/Model/AsyncActionGetResponseBody.md)
- [AsyncActionsListResponseBody](docs/Model/AsyncActionsListResponseBody.md)
- [BusValRuleAssignment](docs/Model/BusValRuleAssignment.md)
- [CampaignBase](docs/Model/CampaignBase.md)
- [CampaignLoyaltyCard](docs/Model/CampaignLoyaltyCard.md)
- [CampaignLoyaltyCardExpirationRules](docs/Model/CampaignLoyaltyCardExpirationRules.md)
- [CampaignLoyaltyVoucher](docs/Model/CampaignLoyaltyVoucher.md)
- [CampaignLoyaltyVoucherRedemption](docs/Model/CampaignLoyaltyVoucherRedemption.md)
- [CampaignVoucher](docs/Model/CampaignVoucher.md)
- [CampaignVoucherRedemption](docs/Model/CampaignVoucherRedemption.md)
- [CampaignsCreateRequestBody](docs/Model/CampaignsCreateRequestBody.md)
- [CampaignsCreateRequestBodyPromotion](docs/Model/CampaignsCreateRequestBodyPromotion.md)
- [CampaignsCreateRequestBodyVoucher](docs/Model/CampaignsCreateRequestBodyVoucher.md)
- [CampaignsCreateRequestBodyVoucherRedemption](docs/Model/CampaignsCreateRequestBodyVoucherRedemption.md)
- [CampaignsCreateResponseBody](docs/Model/CampaignsCreateResponseBody.md)
- [CampaignsDeleteResponseBody](docs/Model/CampaignsDeleteResponseBody.md)
- [CampaignsGetResponseBody](docs/Model/CampaignsGetResponseBody.md)
- [CampaignsImportCreateResponseBody](docs/Model/CampaignsImportCreateResponseBody.md)
- [CampaignsImportCsvCreateResponseBody](docs/Model/CampaignsImportCsvCreateResponseBody.md)
- [CampaignsImportVoucherItem](docs/Model/CampaignsImportVoucherItem.md)
- [CampaignsImportVoucherItemRedemption](docs/Model/CampaignsImportVoucherItemRedemption.md)
- [CampaignsListResponseBody](docs/Model/CampaignsListResponseBody.md)
- [CampaignsUpdateRequestBody](docs/Model/CampaignsUpdateRequestBody.md)
- [CampaignsUpdateRequestBodyOptions](docs/Model/CampaignsUpdateRequestBodyOptions.md)
- [CampaignsUpdateResponseBody](docs/Model/CampaignsUpdateResponseBody.md)
- [CampaignsVouchersCreateCombinedResponseBody](docs/Model/CampaignsVouchersCreateCombinedResponseBody.md)
- [CampaignsVouchersCreateCombinedResponseBodyGift](docs/Model/CampaignsVouchersCreateCombinedResponseBodyGift.md)
- [CampaignsVouchersCreateCombinedResponseBodyLoyaltyCard](docs/Model/CampaignsVouchersCreateCombinedResponseBodyLoyaltyCard.md)
- [CampaignsVouchersCreateCombinedResponseBodyPublish](docs/Model/CampaignsVouchersCreateCombinedResponseBodyPublish.md)
- [CampaignsVouchersCreateCombinedResponseBodyRedemption](docs/Model/CampaignsVouchersCreateCombinedResponseBodyRedemption.md)
- [CampaignsVouchersCreateInBulkRequestBody](docs/Model/CampaignsVouchersCreateInBulkRequestBody.md)
- [CampaignsVouchersCreateInBulkRequestBodyRedemption](docs/Model/CampaignsVouchersCreateInBulkRequestBodyRedemption.md)
- [CampaignsVouchersCreateRequestBody](docs/Model/CampaignsVouchersCreateRequestBody.md)
- [CampaignsVouchersCreateRequestBodyRedemption](docs/Model/CampaignsVouchersCreateRequestBodyRedemption.md)
- [CampaignsVouchersCreateResponseBody](docs/Model/CampaignsVouchersCreateResponseBody.md)
- [CampaignsVouchersCreateResponseBodyGift](docs/Model/CampaignsVouchersCreateResponseBodyGift.md)
- [CampaignsVouchersCreateResponseBodyLoyaltyCard](docs/Model/CampaignsVouchersCreateResponseBodyLoyaltyCard.md)
- [CampaignsVouchersCreateResponseBodyPublish](docs/Model/CampaignsVouchersCreateResponseBodyPublish.md)
- [CampaignsVouchersCreateResponseBodyRedemption](docs/Model/CampaignsVouchersCreateResponseBodyRedemption.md)
- [CategoriesCreateRequestBody](docs/Model/CategoriesCreateRequestBody.md)
- [CategoriesCreateResponseBody](docs/Model/CategoriesCreateResponseBody.md)
- [CategoriesGetResponseBody](docs/Model/CategoriesGetResponseBody.md)
- [CategoriesListResponseBody](docs/Model/CategoriesListResponseBody.md)
- [CategoriesUpdateRequestBody](docs/Model/CategoriesUpdateRequestBody.md)
- [CategoriesUpdateResponseBody](docs/Model/CategoriesUpdateResponseBody.md)
- [Category](docs/Model/Category.md)
- [ClientEventsCreateRequestBody](docs/Model/ClientEventsCreateRequestBody.md)
- [ClientEventsCreateRequestBodyLoyalty](docs/Model/ClientEventsCreateRequestBodyLoyalty.md)
- [ClientEventsCreateRequestBodyReferral](docs/Model/ClientEventsCreateRequestBodyReferral.md)
- [ClientEventsCreateResponseBody](docs/Model/ClientEventsCreateResponseBody.md)
- [ClientPromotionsTiersListResponseBody](docs/Model/ClientPromotionsTiersListResponseBody.md)
- [ClientQualificationsCheckEligibilityRequestBody](docs/Model/ClientQualificationsCheckEligibilityRequestBody.md)
- [ClientQualificationsCheckEligibilityResponseBody](docs/Model/ClientQualificationsCheckEligibilityResponseBody.md)
- [ClientRedemptionsRedeemRequestBody](docs/Model/ClientRedemptionsRedeemRequestBody.md)
- [ClientRedemptionsRedeemRequestBodyOptions](docs/Model/ClientRedemptionsRedeemRequestBodyOptions.md)
- [ClientRedemptionsRedeemRequestBodyRedeemablesItem](docs/Model/ClientRedemptionsRedeemRequestBodyRedeemablesItem.md)
- [ClientRedemptionsRedeemRequestBodyRedeemablesItemGift](docs/Model/ClientRedemptionsRedeemRequestBodyRedeemablesItemGift.md)
- [ClientRedemptionsRedeemRequestBodyRedeemablesItemReward](docs/Model/ClientRedemptionsRedeemRequestBodyRedeemablesItemReward.md)
- [ClientRedemptionsRedeemResponseBody](docs/Model/ClientRedemptionsRedeemResponseBody.md)
- [ClientValidationsValidateRequestBody](docs/Model/ClientValidationsValidateRequestBody.md)
- [ClientValidationsValidateRequestBodyOptions](docs/Model/ClientValidationsValidateRequestBodyOptions.md)
- [ClientValidationsValidateRequestBodyRedeemablesItem](docs/Model/ClientValidationsValidateRequestBodyRedeemablesItem.md)
- [ClientValidationsValidateRequestBodyRedeemablesItemGift](docs/Model/ClientValidationsValidateRequestBodyRedeemablesItemGift.md)
- [ClientValidationsValidateRequestBodyRedeemablesItemReward](docs/Model/ClientValidationsValidateRequestBodyRedeemablesItemReward.md)
- [ClientValidationsValidateResponseBody](docs/Model/ClientValidationsValidateResponseBody.md)
- [ClientValidationsValidateResponseBodyRedeemablesItem](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItem.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResult](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResult.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResultDetails](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResultDetails.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResultDiscount](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResultDiscount.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResultGift](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResultGift.md)
- [ClientValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard](docs/Model/ClientValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard.md)
- [CodeConfig](docs/Model/CodeConfig.md)
- [CreatePublicationCampaign](docs/Model/CreatePublicationCampaign.md)
- [Customer](docs/Model/Customer.md)
- [CustomerActivity](docs/Model/CustomerActivity.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerId](docs/Model/CustomerId.md)
- [CustomerLoyalty](docs/Model/CustomerLoyalty.md)
- [CustomerLoyaltyCampaignsEntry](docs/Model/CustomerLoyaltyCampaignsEntry.md)
- [CustomerRedeemable](docs/Model/CustomerRedeemable.md)
- [CustomerRedeemableRedeemable](docs/Model/CustomerRedeemableRedeemable.md)
- [CustomerReferrals](docs/Model/CustomerReferrals.md)
- [CustomerReferralsCampaignsItem](docs/Model/CustomerReferralsCampaignsItem.md)
- [CustomerSummary](docs/Model/CustomerSummary.md)
- [CustomerSummaryOrders](docs/Model/CustomerSummaryOrders.md)
- [CustomerSummaryRedemptions](docs/Model/CustomerSummaryRedemptions.md)
- [CustomerSummaryRedemptionsGift](docs/Model/CustomerSummaryRedemptionsGift.md)
- [CustomerSummaryRedemptionsLoyaltyCard](docs/Model/CustomerSummaryRedemptionsLoyaltyCard.md)
- [CustomerWithSummaryLoyaltyReferrals](docs/Model/CustomerWithSummaryLoyaltyReferrals.md)
- [CustomerWithSummaryLoyaltyReferralsAddress](docs/Model/CustomerWithSummaryLoyaltyReferralsAddress.md)
- [CustomerWithSummaryLoyaltyReferralsAssets](docs/Model/CustomerWithSummaryLoyaltyReferralsAssets.md)
- [CustomersActivityListResponseBody](docs/Model/CustomersActivityListResponseBody.md)
- [CustomersCreateRequestBody](docs/Model/CustomersCreateRequestBody.md)
- [CustomersCreateRequestBodyAddress](docs/Model/CustomersCreateRequestBodyAddress.md)
- [CustomersCreateResponseBody](docs/Model/CustomersCreateResponseBody.md)
- [CustomersCreateResponseBodyAddress](docs/Model/CustomersCreateResponseBodyAddress.md)
- [CustomersCreateResponseBodyAssets](docs/Model/CustomersCreateResponseBodyAssets.md)
- [CustomersGetResponseBody](docs/Model/CustomersGetResponseBody.md)
- [CustomersGetResponseBodyAddress](docs/Model/CustomersGetResponseBodyAddress.md)
- [CustomersGetResponseBodyAssets](docs/Model/CustomersGetResponseBodyAssets.md)
- [CustomersImportCsvCreateResponseBody](docs/Model/CustomersImportCsvCreateResponseBody.md)
- [CustomersListResponseBody](docs/Model/CustomersListResponseBody.md)
- [CustomersMetadataUpdateInBulkRequestBody](docs/Model/CustomersMetadataUpdateInBulkRequestBody.md)
- [CustomersMetadataUpdateInBulkResponseBody](docs/Model/CustomersMetadataUpdateInBulkResponseBody.md)
- [CustomersPermanentDeletionCreateResponseBody](docs/Model/CustomersPermanentDeletionCreateResponseBody.md)
- [CustomersPermanentDeletionCreateResponseBodyDataJson](docs/Model/CustomersPermanentDeletionCreateResponseBodyDataJson.md)
- [CustomersRedeemablesListResponseBody](docs/Model/CustomersRedeemablesListResponseBody.md)
- [CustomersSegmentsListResponseBody](docs/Model/CustomersSegmentsListResponseBody.md)
- [CustomersUpdateInBulkRequestBody](docs/Model/CustomersUpdateInBulkRequestBody.md)
- [CustomersUpdateInBulkRequestBodyAddress](docs/Model/CustomersUpdateInBulkRequestBodyAddress.md)
- [CustomersUpdateInBulkResponseBody](docs/Model/CustomersUpdateInBulkResponseBody.md)
- [CustomersUpdateRequestBody](docs/Model/CustomersUpdateRequestBody.md)
- [CustomersUpdateRequestBodyAddress](docs/Model/CustomersUpdateRequestBodyAddress.md)
- [CustomersUpdateResponseBody](docs/Model/CustomersUpdateResponseBody.md)
- [CustomersUpdateResponseBodyAddress](docs/Model/CustomersUpdateResponseBodyAddress.md)
- [CustomersUpdateResponseBodyAssets](docs/Model/CustomersUpdateResponseBodyAssets.md)
- [Discount](docs/Model/Discount.md)
- [DiscountUnitMultipleOneUnit](docs/Model/DiscountUnitMultipleOneUnit.md)
- [EarningRule](docs/Model/EarningRule.md)
- [EarningRuleCustomEvent](docs/Model/EarningRuleCustomEvent.md)
- [EarningRuleLoyalty](docs/Model/EarningRuleLoyalty.md)
- [EarningRuleLoyaltyCustomEvent](docs/Model/EarningRuleLoyaltyCustomEvent.md)
- [EarningRuleLoyaltyCustomEventMetadata](docs/Model/EarningRuleLoyaltyCustomEventMetadata.md)
- [EarningRuleLoyaltyCustomer](docs/Model/EarningRuleLoyaltyCustomer.md)
- [EarningRuleLoyaltyCustomerMetadata](docs/Model/EarningRuleLoyaltyCustomerMetadata.md)
- [EarningRuleLoyaltyOrder](docs/Model/EarningRuleLoyaltyOrder.md)
- [EarningRuleLoyaltyOrderAmount](docs/Model/EarningRuleLoyaltyOrderAmount.md)
- [EarningRuleLoyaltyOrderItems](docs/Model/EarningRuleLoyaltyOrderItems.md)
- [EarningRuleLoyaltyOrderItemsAmount](docs/Model/EarningRuleLoyaltyOrderItemsAmount.md)
- [EarningRuleLoyaltyOrderItemsQuantity](docs/Model/EarningRuleLoyaltyOrderItemsQuantity.md)
- [EarningRuleLoyaltyOrderItemsSubtotalAmount](docs/Model/EarningRuleLoyaltyOrderItemsSubtotalAmount.md)
- [EarningRuleLoyaltyOrderMetadata](docs/Model/EarningRuleLoyaltyOrderMetadata.md)
- [EarningRuleLoyaltyOrderTotalAmount](docs/Model/EarningRuleLoyaltyOrderTotalAmount.md)
- [EarningRuleLoyaltyTier](docs/Model/EarningRuleLoyaltyTier.md)
- [EarningRuleSegment](docs/Model/EarningRuleSegment.md)
- [EarningRuleSource](docs/Model/EarningRuleSource.md)
- [Error](docs/Model/Error.md)
- [EventsCreateRequestBody](docs/Model/EventsCreateRequestBody.md)
- [EventsCreateRequestBodyLoyalty](docs/Model/EventsCreateRequestBodyLoyalty.md)
- [EventsCreateRequestBodyReferral](docs/Model/EventsCreateRequestBodyReferral.md)
- [EventsCreateResponseBody](docs/Model/EventsCreateResponseBody.md)
- [Export](docs/Model/Export.md)
- [ExportParameters](docs/Model/ExportParameters.md)
- [ExportParametersFilters](docs/Model/ExportParametersFilters.md)
- [ExportResult](docs/Model/ExportResult.md)
- [ExportVoucherTransactionsFilters](docs/Model/ExportVoucherTransactionsFilters.md)
- [ExportsCreateRequestBody](docs/Model/ExportsCreateRequestBody.md)
- [ExportsCreateRequestBodyParameters](docs/Model/ExportsCreateRequestBodyParameters.md)
- [ExportsCreateRequestBodyParametersFilters](docs/Model/ExportsCreateRequestBodyParametersFilters.md)
- [ExportsCreateResponseBody](docs/Model/ExportsCreateResponseBody.md)
- [ExportsCreateResponseBodyParameters](docs/Model/ExportsCreateResponseBodyParameters.md)
- [ExportsCreateResponseBodyParametersFilters](docs/Model/ExportsCreateResponseBodyParametersFilters.md)
- [ExportsGetResponseBody](docs/Model/ExportsGetResponseBody.md)
- [ExportsGetResponseBodyParameters](docs/Model/ExportsGetResponseBodyParameters.md)
- [ExportsGetResponseBodyParametersFilters](docs/Model/ExportsGetResponseBodyParametersFilters.md)
- [ExportsGetResponseBodyResult](docs/Model/ExportsGetResponseBodyResult.md)
- [ExportsListResponseBody](docs/Model/ExportsListResponseBody.md)
- [FieldConditions](docs/Model/FieldConditions.md)
- [FilterConditionsString](docs/Model/FilterConditionsString.md)
- [FiltersCondition](docs/Model/FiltersCondition.md)
- [Gift](docs/Model/Gift.md)
- [InapplicableTo](docs/Model/InapplicableTo.md)
- [InapplicableToResultList](docs/Model/InapplicableToResultList.md)
- [ListPublicationsItemVoucher](docs/Model/ListPublicationsItemVoucher.md)
- [LoyaltiesCreateCampaignRequestBody](docs/Model/LoyaltiesCreateCampaignRequestBody.md)
- [LoyaltiesCreateCampaignResponseBody](docs/Model/LoyaltiesCreateCampaignResponseBody.md)
- [LoyaltiesDeleteResponseBody](docs/Model/LoyaltiesDeleteResponseBody.md)
- [LoyaltiesEarningRulesCreateRequestBodyItem](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItem.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyalty](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyalty.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomer.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrder](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrder.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemSegment](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemSegment.md)
- [LoyaltiesEarningRulesCreateRequestBodyItemSource](docs/Model/LoyaltiesEarningRulesCreateRequestBodyItemSource.md)
- [LoyaltiesEarningRulesCreateResponseBody](docs/Model/LoyaltiesEarningRulesCreateResponseBody.md)
- [LoyaltiesEarningRulesCreateResponseBodyCustomEvent](docs/Model/LoyaltiesEarningRulesCreateResponseBodyCustomEvent.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyalty](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyalty.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesCreateResponseBodyLoyaltyTier](docs/Model/LoyaltiesEarningRulesCreateResponseBodyLoyaltyTier.md)
- [LoyaltiesEarningRulesCreateResponseBodySegment](docs/Model/LoyaltiesEarningRulesCreateResponseBodySegment.md)
- [LoyaltiesEarningRulesCreateResponseBodySource](docs/Model/LoyaltiesEarningRulesCreateResponseBodySource.md)
- [LoyaltiesEarningRulesDisableResponseBody](docs/Model/LoyaltiesEarningRulesDisableResponseBody.md)
- [LoyaltiesEarningRulesDisableResponseBodyCustomEvent](docs/Model/LoyaltiesEarningRulesDisableResponseBodyCustomEvent.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyalty](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyalty.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesDisableResponseBodyLoyaltyTier](docs/Model/LoyaltiesEarningRulesDisableResponseBodyLoyaltyTier.md)
- [LoyaltiesEarningRulesDisableResponseBodySegment](docs/Model/LoyaltiesEarningRulesDisableResponseBodySegment.md)
- [LoyaltiesEarningRulesDisableResponseBodySource](docs/Model/LoyaltiesEarningRulesDisableResponseBodySource.md)
- [LoyaltiesEarningRulesEnableResponseBody](docs/Model/LoyaltiesEarningRulesEnableResponseBody.md)
- [LoyaltiesEarningRulesEnableResponseBodyCustomEvent](docs/Model/LoyaltiesEarningRulesEnableResponseBodyCustomEvent.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyalty](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyalty.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesEnableResponseBodyLoyaltyTier](docs/Model/LoyaltiesEarningRulesEnableResponseBodyLoyaltyTier.md)
- [LoyaltiesEarningRulesEnableResponseBodySegment](docs/Model/LoyaltiesEarningRulesEnableResponseBodySegment.md)
- [LoyaltiesEarningRulesEnableResponseBodySource](docs/Model/LoyaltiesEarningRulesEnableResponseBodySource.md)
- [LoyaltiesEarningRulesGetResponseBody](docs/Model/LoyaltiesEarningRulesGetResponseBody.md)
- [LoyaltiesEarningRulesGetResponseBodyCustomEvent](docs/Model/LoyaltiesEarningRulesGetResponseBodyCustomEvent.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyalty](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyalty.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesGetResponseBodyLoyaltyTier](docs/Model/LoyaltiesEarningRulesGetResponseBodyLoyaltyTier.md)
- [LoyaltiesEarningRulesGetResponseBodySegment](docs/Model/LoyaltiesEarningRulesGetResponseBodySegment.md)
- [LoyaltiesEarningRulesGetResponseBodySource](docs/Model/LoyaltiesEarningRulesGetResponseBodySource.md)
- [LoyaltiesEarningRulesListResponseBody](docs/Model/LoyaltiesEarningRulesListResponseBody.md)
- [LoyaltiesEarningRulesUpdateRequestBody](docs/Model/LoyaltiesEarningRulesUpdateRequestBody.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyalty](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyalty.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesUpdateRequestBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesUpdateRequestBodySource](docs/Model/LoyaltiesEarningRulesUpdateRequestBodySource.md)
- [LoyaltiesEarningRulesUpdateResponseBody](docs/Model/LoyaltiesEarningRulesUpdateResponseBody.md)
- [LoyaltiesEarningRulesUpdateResponseBodyCustomEvent](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyCustomEvent.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyalty](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyalty.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomEvent](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomEvent.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomEventMetadata](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomEventMetadata.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomer](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomer.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomerMetadata](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyCustomerMetadata.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrder](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrder.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderAmount](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderAmount.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItems](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItems.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsAmount](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsAmount.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsQuantity](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsQuantity.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsSubtotalAmount](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderItemsSubtotalAmount.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderMetadata](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderMetadata.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderTotalAmount](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyOrderTotalAmount.md)
- [LoyaltiesEarningRulesUpdateResponseBodyLoyaltyTier](docs/Model/LoyaltiesEarningRulesUpdateResponseBodyLoyaltyTier.md)
- [LoyaltiesEarningRulesUpdateResponseBodySegment](docs/Model/LoyaltiesEarningRulesUpdateResponseBodySegment.md)
- [LoyaltiesEarningRulesUpdateResponseBodySource](docs/Model/LoyaltiesEarningRulesUpdateResponseBodySource.md)
- [LoyaltiesGetCampaignResponseBody](docs/Model/LoyaltiesGetCampaignResponseBody.md)
- [LoyaltiesListCampaignsResponseBody](docs/Model/LoyaltiesListCampaignsResponseBody.md)
- [LoyaltiesListMembersResponseBody](docs/Model/LoyaltiesListMembersResponseBody.md)
- [LoyaltiesLoyaltyTierReward](docs/Model/LoyaltiesLoyaltyTierReward.md)
- [LoyaltiesMemberActivityListResponseBody](docs/Model/LoyaltiesMemberActivityListResponseBody.md)
- [LoyaltiesMembersBalanceUpdateRequestBody](docs/Model/LoyaltiesMembersBalanceUpdateRequestBody.md)
- [LoyaltiesMembersBalanceUpdateResponseBody](docs/Model/LoyaltiesMembersBalanceUpdateResponseBody.md)
- [LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject](docs/Model/LoyaltiesMembersBalanceUpdateResponseBodyRelatedObject.md)
- [LoyaltiesMembersCreateRequestBody](docs/Model/LoyaltiesMembersCreateRequestBody.md)
- [LoyaltiesMembersCreateResponseBody](docs/Model/LoyaltiesMembersCreateResponseBody.md)
- [LoyaltiesMembersCreateResponseBodyLoyaltyCard](docs/Model/LoyaltiesMembersCreateResponseBodyLoyaltyCard.md)
- [LoyaltiesMembersCreateResponseBodyPublish](docs/Model/LoyaltiesMembersCreateResponseBodyPublish.md)
- [LoyaltiesMembersCreateResponseBodyRedemption](docs/Model/LoyaltiesMembersCreateResponseBodyRedemption.md)
- [LoyaltiesMembersGetResponseBody](docs/Model/LoyaltiesMembersGetResponseBody.md)
- [LoyaltiesMembersGetResponseBodyLoyaltyCard](docs/Model/LoyaltiesMembersGetResponseBodyLoyaltyCard.md)
- [LoyaltiesMembersGetResponseBodyPublish](docs/Model/LoyaltiesMembersGetResponseBodyPublish.md)
- [LoyaltiesMembersGetResponseBodyRedemption](docs/Model/LoyaltiesMembersGetResponseBodyRedemption.md)
- [LoyaltiesMembersPointsExpirationListResponseBody](docs/Model/LoyaltiesMembersPointsExpirationListResponseBody.md)
- [LoyaltiesMembersPointsExpirationListResponseBodyDataItem](docs/Model/LoyaltiesMembersPointsExpirationListResponseBodyDataItem.md)
- [LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket](docs/Model/LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket.md)
- [LoyaltiesMembersRedemptionRedeemRequestBody](docs/Model/LoyaltiesMembersRedemptionRedeemRequestBody.md)
- [LoyaltiesMembersRedemptionRedeemRequestBodyReward](docs/Model/LoyaltiesMembersRedemptionRedeemRequestBodyReward.md)
- [LoyaltiesMembersRedemptionRedeemResponseBody](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBody.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyChannel](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyChannel.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyGift](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyGift.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyLoyaltyCard](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyLoyaltyCard.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptions](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptions.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptionsRedemptionsItem](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptionsRedemptionsItem.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptionsRollbacksItem](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyRelatedRedemptionsRollbacksItem.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyVoucher](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyVoucher.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyVoucherGift](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyVoucherGift.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyVoucherLoyaltyCard](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyVoucherLoyaltyCard.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyVoucherPublish](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyVoucherPublish.md)
- [LoyaltiesMembersRedemptionRedeemResponseBodyVoucherRedemption](docs/Model/LoyaltiesMembersRedemptionRedeemResponseBodyVoucherRedemption.md)
- [LoyaltiesMembersRewardsListResponseBody](docs/Model/LoyaltiesMembersRewardsListResponseBody.md)
- [LoyaltiesMembersRewardsListResponseBodyDataItem](docs/Model/LoyaltiesMembersRewardsListResponseBodyDataItem.md)
- [LoyaltiesMembersTiersListResponseBody](docs/Model/LoyaltiesMembersTiersListResponseBody.md)
- [LoyaltiesMembersTransactionsExportCreateRequestBody](docs/Model/LoyaltiesMembersTransactionsExportCreateRequestBody.md)
- [LoyaltiesMembersTransactionsExportCreateRequestBodyParameters](docs/Model/LoyaltiesMembersTransactionsExportCreateRequestBodyParameters.md)
- [LoyaltiesMembersTransactionsExportCreateResponseBody](docs/Model/LoyaltiesMembersTransactionsExportCreateResponseBody.md)
- [LoyaltiesMembersTransactionsExportCreateResponseBodyParameters](docs/Model/LoyaltiesMembersTransactionsExportCreateResponseBodyParameters.md)
- [LoyaltiesMembersTransactionsListResponseBody](docs/Model/LoyaltiesMembersTransactionsListResponseBody.md)
- [LoyaltiesMembersTransfersCreateResponseBody](docs/Model/LoyaltiesMembersTransfersCreateResponseBody.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssets](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssets.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssetsBarcode](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssetsBarcode.md)
- [LoyaltiesMembersTransfersCreateResponseBodyAssetsQr](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyAssetsQr.md)
- [LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard.md)
- [LoyaltiesMembersTransfersCreateResponseBodyPublish](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyPublish.md)
- [LoyaltiesMembersTransfersCreateResponseBodyRedemption](docs/Model/LoyaltiesMembersTransfersCreateResponseBodyRedemption.md)
- [LoyaltiesPointsExpirationExportCreateRequestBody](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBody.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParameters](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParameters.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParametersFilters](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParametersFilters.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersCampaignId](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersCampaignId.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersCampaignIdConditions](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersCampaignIdConditions.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersVoucherId](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersVoucherId.md)
- [LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersVoucherIdConditions](docs/Model/LoyaltiesPointsExpirationExportCreateRequestBodyParametersFiltersVoucherIdConditions.md)
- [LoyaltiesPointsExpirationExportCreateResponseBody](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBody.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParameters](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParameters.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParametersFilters](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParametersFilters.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersCampaignId](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersCampaignId.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersCampaignIdConditions](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersCampaignIdConditions.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersVoucherId](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersVoucherId.md)
- [LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersVoucherIdConditions](docs/Model/LoyaltiesPointsExpirationExportCreateResponseBodyParametersFiltersVoucherIdConditions.md)
- [LoyaltiesRewardAssignmentsGetResponseBody](docs/Model/LoyaltiesRewardAssignmentsGetResponseBody.md)
- [LoyaltiesRewardAssignmentsGetResponseBodyParameters](docs/Model/LoyaltiesRewardAssignmentsGetResponseBodyParameters.md)
- [LoyaltiesRewardAssignmentsGetResponseBodyParametersLoyalty](docs/Model/LoyaltiesRewardAssignmentsGetResponseBodyParametersLoyalty.md)
- [LoyaltiesRewardAssignmentsListResponseBody](docs/Model/LoyaltiesRewardAssignmentsListResponseBody.md)
- [LoyaltiesRewardAssignmentsRewardGetResponseBody](docs/Model/LoyaltiesRewardAssignmentsRewardGetResponseBody.md)
- [LoyaltiesRewardAssignmentsRewardGetResponseBodyAttributes](docs/Model/LoyaltiesRewardAssignmentsRewardGetResponseBodyAttributes.md)
- [LoyaltiesRewardsCreateAssignmentItemRequestBody](docs/Model/LoyaltiesRewardsCreateAssignmentItemRequestBody.md)
- [LoyaltiesRewardsCreateAssignmentItemRequestBodyParameters](docs/Model/LoyaltiesRewardsCreateAssignmentItemRequestBodyParameters.md)
- [LoyaltiesRewardsCreateAssignmentItemRequestBodyParametersLoyalty](docs/Model/LoyaltiesRewardsCreateAssignmentItemRequestBodyParametersLoyalty.md)
- [LoyaltiesRewardsCreateAssignmentResponseBody](docs/Model/LoyaltiesRewardsCreateAssignmentResponseBody.md)
- [LoyaltiesRewardsCreateAssignmentResponseBodyParameters](docs/Model/LoyaltiesRewardsCreateAssignmentResponseBodyParameters.md)
- [LoyaltiesRewardsCreateAssignmentResponseBodyParametersLoyalty](docs/Model/LoyaltiesRewardsCreateAssignmentResponseBodyParametersLoyalty.md)
- [LoyaltiesRewardsGetResponseBody](docs/Model/LoyaltiesRewardsGetResponseBody.md)
- [LoyaltiesRewardsGetResponseBodyParameters](docs/Model/LoyaltiesRewardsGetResponseBodyParameters.md)
- [LoyaltiesRewardsGetResponseBodyParametersLoyalty](docs/Model/LoyaltiesRewardsGetResponseBodyParametersLoyalty.md)
- [LoyaltiesRewardsListAssignmentsResponseBody](docs/Model/LoyaltiesRewardsListAssignmentsResponseBody.md)
- [LoyaltiesRewardsUpdateAssignmentRequestBody](docs/Model/LoyaltiesRewardsUpdateAssignmentRequestBody.md)
- [LoyaltiesRewardsUpdateAssignmentRequestBodyParameters](docs/Model/LoyaltiesRewardsUpdateAssignmentRequestBodyParameters.md)
- [LoyaltiesRewardsUpdateAssignmentRequestBodyParametersLoyalty](docs/Model/LoyaltiesRewardsUpdateAssignmentRequestBodyParametersLoyalty.md)
- [LoyaltiesRewardsUpdateAssignmentResponseBody](docs/Model/LoyaltiesRewardsUpdateAssignmentResponseBody.md)
- [LoyaltiesRewardsUpdateAssignmentResponseBodyParameters](docs/Model/LoyaltiesRewardsUpdateAssignmentResponseBodyParameters.md)
- [LoyaltiesRewardsUpdateAssignmentResponseBodyParametersLoyalty](docs/Model/LoyaltiesRewardsUpdateAssignmentResponseBodyParametersLoyalty.md)
- [LoyaltiesTiersCreateInBulkRequestBodyItem](docs/Model/LoyaltiesTiersCreateInBulkRequestBodyItem.md)
- [LoyaltiesTiersEarningRulesListResponseBody](docs/Model/LoyaltiesTiersEarningRulesListResponseBody.md)
- [LoyaltiesTiersGetResponseBody](docs/Model/LoyaltiesTiersGetResponseBody.md)
- [LoyaltiesTiersGetResponseBodyConfig](docs/Model/LoyaltiesTiersGetResponseBodyConfig.md)
- [LoyaltiesTiersGetResponseBodyConfigPoints](docs/Model/LoyaltiesTiersGetResponseBodyConfigPoints.md)
- [LoyaltiesTiersGetResponseBodyPoints](docs/Model/LoyaltiesTiersGetResponseBodyPoints.md)
- [LoyaltiesTiersListResponseBody](docs/Model/LoyaltiesTiersListResponseBody.md)
- [LoyaltiesTiersRewardsListResponseBody](docs/Model/LoyaltiesTiersRewardsListResponseBody.md)
- [LoyaltiesTransferPoints](docs/Model/LoyaltiesTransferPoints.md)
- [LoyaltiesUpdateCampaignRequestBody](docs/Model/LoyaltiesUpdateCampaignRequestBody.md)
- [LoyaltiesUpdateCampaignRequestBodyOptions](docs/Model/LoyaltiesUpdateCampaignRequestBodyOptions.md)
- [LoyaltiesUpdateCampaignResponseBody](docs/Model/LoyaltiesUpdateCampaignResponseBody.md)
- [LoyaltyCampaign](docs/Model/LoyaltyCampaign.md)
- [LoyaltyCampaignVoucher](docs/Model/LoyaltyCampaignVoucher.md)
- [LoyaltyCampaignVoucherRedemption](docs/Model/LoyaltyCampaignVoucherRedemption.md)
- [LoyaltyCardTransaction](docs/Model/LoyaltyCardTransaction.md)
- [LoyaltyCardTransactionDetails](docs/Model/LoyaltyCardTransactionDetails.md)
- [LoyaltyCardTransactionDetailsBalance](docs/Model/LoyaltyCardTransactionDetailsBalance.md)
- [LoyaltyCardTransactionDetailsBalanceRelatedObject](docs/Model/LoyaltyCardTransactionDetailsBalanceRelatedObject.md)
- [LoyaltyCardTransactionDetailsCustomEvent](docs/Model/LoyaltyCardTransactionDetailsCustomEvent.md)
- [LoyaltyCardTransactionDetailsEarningRule](docs/Model/LoyaltyCardTransactionDetailsEarningRule.md)
- [LoyaltyCardTransactionDetailsEarningRuleSource](docs/Model/LoyaltyCardTransactionDetailsEarningRuleSource.md)
- [LoyaltyCardTransactionDetailsEvent](docs/Model/LoyaltyCardTransactionDetailsEvent.md)
- [LoyaltyCardTransactionDetailsEventSchema](docs/Model/LoyaltyCardTransactionDetailsEventSchema.md)
- [LoyaltyCardTransactionDetailsLoyaltyTier](docs/Model/LoyaltyCardTransactionDetailsLoyaltyTier.md)
- [LoyaltyCardTransactionDetailsOrder](docs/Model/LoyaltyCardTransactionDetailsOrder.md)
- [LoyaltyCardTransactionDetailsRedemption](docs/Model/LoyaltyCardTransactionDetailsRedemption.md)
- [LoyaltyCardTransactionDetailsReward](docs/Model/LoyaltyCardTransactionDetailsReward.md)
- [LoyaltyCardTransactionDetailsRollback](docs/Model/LoyaltyCardTransactionDetailsRollback.md)
- [LoyaltyCardTransactionDetailsSegment](docs/Model/LoyaltyCardTransactionDetailsSegment.md)
- [LoyaltyMember](docs/Model/LoyaltyMember.md)
- [LoyaltyMemberLoyaltyCard](docs/Model/LoyaltyMemberLoyaltyCard.md)
- [LoyaltyMemberPublish](docs/Model/LoyaltyMemberPublish.md)
- [LoyaltyMemberRedemption](docs/Model/LoyaltyMemberRedemption.md)
- [LoyaltyTier](docs/Model/LoyaltyTier.md)
- [LoyaltyTierBase](docs/Model/LoyaltyTierBase.md)
- [LoyaltyTierBasePoints](docs/Model/LoyaltyTierBasePoints.md)
- [LoyaltyTierConfig](docs/Model/LoyaltyTierConfig.md)
- [LoyaltyTierConfigPoints](docs/Model/LoyaltyTierConfigPoints.md)
- [LoyaltyTierExpiration](docs/Model/LoyaltyTierExpiration.md)
- [LoyaltyTierPoints](docs/Model/LoyaltyTierPoints.md)
- [LoyaltyTiersExpirationAll](docs/Model/LoyaltyTiersExpirationAll.md)
- [LoyaltyTiersExpirationAllExpirationDate](docs/Model/LoyaltyTiersExpirationAllExpirationDate.md)
- [LoyaltyTiersExpirationAllExpirationDateRounding](docs/Model/LoyaltyTiersExpirationAllExpirationDateRounding.md)
- [LoyaltyTiersExpirationAllStartDate](docs/Model/LoyaltyTiersExpirationAllStartDate.md)
- [LuckyDraw](docs/Model/LuckyDraw.md)
- [MappingPoints](docs/Model/MappingPoints.md)
- [MemberActivity](docs/Model/MemberActivity.md)
- [Order](docs/Model/Order.md)
- [OrderCalculated](docs/Model/OrderCalculated.md)
- [OrderCalculatedItem](docs/Model/OrderCalculatedItem.md)
- [OrderCalculatedItemProduct](docs/Model/OrderCalculatedItemProduct.md)
- [OrderCalculatedItemSku](docs/Model/OrderCalculatedItemSku.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemProduct](docs/Model/OrderItemProduct.md)
- [OrderItemSku](docs/Model/OrderItemSku.md)
- [OrderRedemptionsEntry](docs/Model/OrderRedemptionsEntry.md)
- [OrdersCreateRequestBody](docs/Model/OrdersCreateRequestBody.md)
- [OrdersCreateResponseBody](docs/Model/OrdersCreateResponseBody.md)
- [OrdersExportCreateRequestBody](docs/Model/OrdersExportCreateRequestBody.md)
- [OrdersExportCreateRequestBodyParameters](docs/Model/OrdersExportCreateRequestBodyParameters.md)
- [OrdersExportCreateResponseBody](docs/Model/OrdersExportCreateResponseBody.md)
- [OrdersExportCreateResponseBodyParameters](docs/Model/OrdersExportCreateResponseBodyParameters.md)
- [OrdersGetResponseBody](docs/Model/OrdersGetResponseBody.md)
- [OrdersImportCreateRequestBodyItem](docs/Model/OrdersImportCreateRequestBodyItem.md)
- [OrdersImportCreateResponseBody](docs/Model/OrdersImportCreateResponseBody.md)
- [OrdersListResponseBody](docs/Model/OrdersListResponseBody.md)
- [OrdersUpdateRequestBody](docs/Model/OrdersUpdateRequestBody.md)
- [OrdersUpdateResponseBody](docs/Model/OrdersUpdateResponseBody.md)
- [ParameterActivityCategory](docs/Model/ParameterActivityCategory.md)
- [ParameterCampaignType](docs/Model/ParameterCampaignType.md)
- [ParameterCreatedBeforeAfter](docs/Model/ParameterCreatedBeforeAfter.md)
- [ParameterExpandListCampaigns](docs/Model/ParameterExpandListCampaigns.md)
- [ParameterFiltersListCustomerRedeemables](docs/Model/ParameterFiltersListCustomerRedeemables.md)
- [ParameterFiltersListCustomerRedeemablesCampaignId](docs/Model/ParameterFiltersListCustomerRedeemablesCampaignId.md)
- [ParameterFiltersListCustomerRedeemablesCampaignType](docs/Model/ParameterFiltersListCustomerRedeemablesCampaignType.md)
- [ParameterFiltersListCustomerRedeemablesCampaignTypeConditions](docs/Model/ParameterFiltersListCustomerRedeemablesCampaignTypeConditions.md)
- [ParameterFiltersListCustomerRedeemablesCreatedAt](docs/Model/ParameterFiltersListCustomerRedeemablesCreatedAt.md)
- [ParameterFiltersListCustomerRedeemablesCreatedAtConditions](docs/Model/ParameterFiltersListCustomerRedeemablesCreatedAtConditions.md)
- [ParameterFiltersListCustomerRedeemablesHolderRole](docs/Model/ParameterFiltersListCustomerRedeemablesHolderRole.md)
- [ParameterFiltersListCustomerRedeemablesHolderRoleConditions](docs/Model/ParameterFiltersListCustomerRedeemablesHolderRoleConditions.md)
- [ParameterFiltersListCustomerRedeemablesId](docs/Model/ParameterFiltersListCustomerRedeemablesId.md)
- [ParameterFiltersListCustomerRedeemablesRedeemableId](docs/Model/ParameterFiltersListCustomerRedeemablesRedeemableId.md)
- [ParameterFiltersListCustomerRedeemablesRedeemableObject](docs/Model/ParameterFiltersListCustomerRedeemablesRedeemableObject.md)
- [ParameterFiltersListCustomerRedeemablesRedeemableObjectConditions](docs/Model/ParameterFiltersListCustomerRedeemablesRedeemableObjectConditions.md)
- [ParameterFiltersListCustomerRedeemablesVoucherType](docs/Model/ParameterFiltersListCustomerRedeemablesVoucherType.md)
- [ParameterFiltersListCustomerRedeemablesVoucherTypeConditions](docs/Model/ParameterFiltersListCustomerRedeemablesVoucherTypeConditions.md)
- [ParameterFiltersListRedemptions](docs/Model/ParameterFiltersListRedemptions.md)
- [ParameterFiltersListRedemptionsCampaignName](docs/Model/ParameterFiltersListRedemptionsCampaignName.md)
- [ParameterFiltersListRedemptionsCustomerId](docs/Model/ParameterFiltersListRedemptionsCustomerId.md)
- [ParameterFiltersListRedemptionsFailureCode](docs/Model/ParameterFiltersListRedemptionsFailureCode.md)
- [ParameterFiltersListRedemptionsObject](docs/Model/ParameterFiltersListRedemptionsObject.md)
- [ParameterFiltersListRedemptionsParentRedemptionId](docs/Model/ParameterFiltersListRedemptionsParentRedemptionId.md)
- [ParameterFiltersListRedemptionsRelatedObjectId](docs/Model/ParameterFiltersListRedemptionsRelatedObjectId.md)
- [ParameterFiltersListRedemptionsRelatedObjectParentId](docs/Model/ParameterFiltersListRedemptionsRelatedObjectParentId.md)
- [ParameterFiltersListRedemptionsResult](docs/Model/ParameterFiltersListRedemptionsResult.md)
- [ParameterFiltersListRedemptionsUserLogin](docs/Model/ParameterFiltersListRedemptionsUserLogin.md)
- [ParameterFiltersListRedemptionsVoucherCode](docs/Model/ParameterFiltersListRedemptionsVoucherCode.md)
- [ParameterOrder](docs/Model/ParameterOrder.md)
- [ParameterOrderCreatedAt](docs/Model/ParameterOrderCreatedAt.md)
- [ParameterOrderListAllPromotionStacks](docs/Model/ParameterOrderListAllPromotionStacks.md)
- [ParameterOrderListCampaigns](docs/Model/ParameterOrderListCampaigns.md)
- [ParameterOrderListCustomers](docs/Model/ParameterOrderListCustomers.md)
- [ParameterOrderListEarningRules](docs/Model/ParameterOrderListEarningRules.md)
- [ParameterOrderListExports](docs/Model/ParameterOrderListExports.md)
- [ParameterOrderListLoyaltyTiers](docs/Model/ParameterOrderListLoyaltyTiers.md)
- [ParameterOrderListOrders](docs/Model/ParameterOrderListOrders.md)
- [ParameterOrderListPromotionTiers](docs/Model/ParameterOrderListPromotionTiers.md)
- [ParameterOrderListPromotionTiersClientSide](docs/Model/ParameterOrderListPromotionTiersClientSide.md)
- [ParameterOrderListPublications](docs/Model/ParameterOrderListPublications.md)
- [ParameterOrderListRedeemables](docs/Model/ParameterOrderListRedeemables.md)
- [ParameterOrderListRedemptions](docs/Model/ParameterOrderListRedemptions.md)
- [ParameterOrderListValidationRuleAssignments](docs/Model/ParameterOrderListValidationRuleAssignments.md)
- [ParameterOrderListValidationRules](docs/Model/ParameterOrderListValidationRules.md)
- [ParameterOrderVouchers](docs/Model/ParameterOrderVouchers.md)
- [ParameterResultListPublications](docs/Model/ParameterResultListPublications.md)
- [ParameterUpdatedBeforeAfter](docs/Model/ParameterUpdatedBeforeAfter.md)
- [ParameterVoucherTypeListPublications](docs/Model/ParameterVoucherTypeListPublications.md)
- [Product](docs/Model/Product.md)
- [ProductCollectionsCreateRequestBody](docs/Model/ProductCollectionsCreateRequestBody.md)
- [ProductCollectionsCreateRequestBodyFilter](docs/Model/ProductCollectionsCreateRequestBodyFilter.md)
- [ProductCollectionsCreateRequestBodyProductsItem](docs/Model/ProductCollectionsCreateRequestBodyProductsItem.md)
- [ProductCollectionsCreateResponseBody](docs/Model/ProductCollectionsCreateResponseBody.md)
- [ProductCollectionsCreateResponseBodyFilter](docs/Model/ProductCollectionsCreateResponseBodyFilter.md)
- [ProductCollectionsCreateResponseBodyProductsItem](docs/Model/ProductCollectionsCreateResponseBodyProductsItem.md)
- [ProductCollectionsGetResponseBody](docs/Model/ProductCollectionsGetResponseBody.md)
- [ProductCollectionsGetResponseBodyFilter](docs/Model/ProductCollectionsGetResponseBodyFilter.md)
- [ProductCollectionsGetResponseBodyProductsItem](docs/Model/ProductCollectionsGetResponseBodyProductsItem.md)
- [ProductCollectionsItem](docs/Model/ProductCollectionsItem.md)
- [ProductCollectionsItemFilter](docs/Model/ProductCollectionsItemFilter.md)
- [ProductCollectionsItemProductsItem](docs/Model/ProductCollectionsItemProductsItem.md)
- [ProductCollectionsListResponseBody](docs/Model/ProductCollectionsListResponseBody.md)
- [ProductCollectionsProductsListResponseBody](docs/Model/ProductCollectionsProductsListResponseBody.md)
- [ProductCollectionsProductsListResponseBodyDataItem](docs/Model/ProductCollectionsProductsListResponseBodyDataItem.md)
- [ProductWithoutSkus](docs/Model/ProductWithoutSkus.md)
- [ProductsCreateRequestBody](docs/Model/ProductsCreateRequestBody.md)
- [ProductsCreateResponseBody](docs/Model/ProductsCreateResponseBody.md)
- [ProductsGetResponseBody](docs/Model/ProductsGetResponseBody.md)
- [ProductsImportCsvCreateResponseBody](docs/Model/ProductsImportCsvCreateResponseBody.md)
- [ProductsListResponseBody](docs/Model/ProductsListResponseBody.md)
- [ProductsMetadataUpdateInBulkRequestBody](docs/Model/ProductsMetadataUpdateInBulkRequestBody.md)
- [ProductsMetadataUpdateInBulkResponseBody](docs/Model/ProductsMetadataUpdateInBulkResponseBody.md)
- [ProductsSkusCreateRequestBody](docs/Model/ProductsSkusCreateRequestBody.md)
- [ProductsSkusCreateResponseBody](docs/Model/ProductsSkusCreateResponseBody.md)
- [ProductsSkusListResponseBody](docs/Model/ProductsSkusListResponseBody.md)
- [ProductsSkusUpdateRequestBody](docs/Model/ProductsSkusUpdateRequestBody.md)
- [ProductsSkusUpdateResponseBody](docs/Model/ProductsSkusUpdateResponseBody.md)
- [ProductsUpdateInBulkRequestBody](docs/Model/ProductsUpdateInBulkRequestBody.md)
- [ProductsUpdateInBulkResponseBody](docs/Model/ProductsUpdateInBulkResponseBody.md)
- [ProductsUpdateRequestBody](docs/Model/ProductsUpdateRequestBody.md)
- [ProductsUpdateResponseBody](docs/Model/ProductsUpdateResponseBody.md)
- [PromotionStack](docs/Model/PromotionStack.md)
- [PromotionStackBase](docs/Model/PromotionStackBase.md)
- [PromotionStackBaseTiers](docs/Model/PromotionStackBaseTiers.md)
- [PromotionStackTiers](docs/Model/PromotionStackTiers.md)
- [PromotionTier](docs/Model/PromotionTier.md)
- [PromotionTierAction](docs/Model/PromotionTierAction.md)
- [PromotionTierCampaign](docs/Model/PromotionTierCampaign.md)
- [PromotionTierCreateParams](docs/Model/PromotionTierCreateParams.md)
- [PromotionTierCreateParamsAction](docs/Model/PromotionTierCreateParamsAction.md)
- [PromotionTierSummary](docs/Model/PromotionTierSummary.md)
- [PromotionTierSummaryOrders](docs/Model/PromotionTierSummaryOrders.md)
- [PromotionTierSummaryRedemptions](docs/Model/PromotionTierSummaryRedemptions.md)
- [PromotionTiersList](docs/Model/PromotionTiersList.md)
- [PromotionsStacksCreateRequestBody](docs/Model/PromotionsStacksCreateRequestBody.md)
- [PromotionsStacksCreateRequestBodyTiers](docs/Model/PromotionsStacksCreateRequestBodyTiers.md)
- [PromotionsStacksCreateResponseBody](docs/Model/PromotionsStacksCreateResponseBody.md)
- [PromotionsStacksCreateResponseBodyTiers](docs/Model/PromotionsStacksCreateResponseBodyTiers.md)
- [PromotionsStacksGetResponseBody](docs/Model/PromotionsStacksGetResponseBody.md)
- [PromotionsStacksGetResponseBodyTiers](docs/Model/PromotionsStacksGetResponseBodyTiers.md)
- [PromotionsStacksListResponseBody](docs/Model/PromotionsStacksListResponseBody.md)
- [PromotionsStacksUpdateRequestBody](docs/Model/PromotionsStacksUpdateRequestBody.md)
- [PromotionsStacksUpdateRequestBodyTiers](docs/Model/PromotionsStacksUpdateRequestBodyTiers.md)
- [PromotionsStacksUpdateResponseBody](docs/Model/PromotionsStacksUpdateResponseBody.md)
- [PromotionsStacksUpdateResponseBodyTiers](docs/Model/PromotionsStacksUpdateResponseBodyTiers.md)
- [PromotionsTiersCreateRequestBody](docs/Model/PromotionsTiersCreateRequestBody.md)
- [PromotionsTiersCreateRequestBodyAction](docs/Model/PromotionsTiersCreateRequestBodyAction.md)
- [PromotionsTiersCreateResponseBody](docs/Model/PromotionsTiersCreateResponseBody.md)
- [PromotionsTiersCreateResponseBodyAction](docs/Model/PromotionsTiersCreateResponseBodyAction.md)
- [PromotionsTiersCreateResponseBodyCampaign](docs/Model/PromotionsTiersCreateResponseBodyCampaign.md)
- [PromotionsTiersCreateResponseBodySummary](docs/Model/PromotionsTiersCreateResponseBodySummary.md)
- [PromotionsTiersCreateResponseBodySummaryOrders](docs/Model/PromotionsTiersCreateResponseBodySummaryOrders.md)
- [PromotionsTiersCreateResponseBodySummaryRedemptions](docs/Model/PromotionsTiersCreateResponseBodySummaryRedemptions.md)
- [PromotionsTiersDisableResponseBody](docs/Model/PromotionsTiersDisableResponseBody.md)
- [PromotionsTiersDisableResponseBodyAction](docs/Model/PromotionsTiersDisableResponseBodyAction.md)
- [PromotionsTiersDisableResponseBodyCampaign](docs/Model/PromotionsTiersDisableResponseBodyCampaign.md)
- [PromotionsTiersDisableResponseBodySummary](docs/Model/PromotionsTiersDisableResponseBodySummary.md)
- [PromotionsTiersDisableResponseBodySummaryOrders](docs/Model/PromotionsTiersDisableResponseBodySummaryOrders.md)
- [PromotionsTiersDisableResponseBodySummaryRedemptions](docs/Model/PromotionsTiersDisableResponseBodySummaryRedemptions.md)
- [PromotionsTiersEnableResponseBody](docs/Model/PromotionsTiersEnableResponseBody.md)
- [PromotionsTiersEnableResponseBodyAction](docs/Model/PromotionsTiersEnableResponseBodyAction.md)
- [PromotionsTiersEnableResponseBodyCampaign](docs/Model/PromotionsTiersEnableResponseBodyCampaign.md)
- [PromotionsTiersEnableResponseBodySummary](docs/Model/PromotionsTiersEnableResponseBodySummary.md)
- [PromotionsTiersEnableResponseBodySummaryOrders](docs/Model/PromotionsTiersEnableResponseBodySummaryOrders.md)
- [PromotionsTiersEnableResponseBodySummaryRedemptions](docs/Model/PromotionsTiersEnableResponseBodySummaryRedemptions.md)
- [PromotionsTiersGetResponseBody](docs/Model/PromotionsTiersGetResponseBody.md)
- [PromotionsTiersGetResponseBodyAction](docs/Model/PromotionsTiersGetResponseBodyAction.md)
- [PromotionsTiersGetResponseBodyCampaign](docs/Model/PromotionsTiersGetResponseBodyCampaign.md)
- [PromotionsTiersGetResponseBodySummary](docs/Model/PromotionsTiersGetResponseBodySummary.md)
- [PromotionsTiersGetResponseBodySummaryOrders](docs/Model/PromotionsTiersGetResponseBodySummaryOrders.md)
- [PromotionsTiersGetResponseBodySummaryRedemptions](docs/Model/PromotionsTiersGetResponseBodySummaryRedemptions.md)
- [PromotionsTiersListResponseBody](docs/Model/PromotionsTiersListResponseBody.md)
- [PromotionsTiersUpdateRequestBody](docs/Model/PromotionsTiersUpdateRequestBody.md)
- [PromotionsTiersUpdateRequestBodyAction](docs/Model/PromotionsTiersUpdateRequestBodyAction.md)
- [PromotionsTiersUpdateResponseBody](docs/Model/PromotionsTiersUpdateResponseBody.md)
- [PromotionsTiersUpdateResponseBodyAction](docs/Model/PromotionsTiersUpdateResponseBodyAction.md)
- [PromotionsTiersUpdateResponseBodyCampaign](docs/Model/PromotionsTiersUpdateResponseBodyCampaign.md)
- [PromotionsTiersUpdateResponseBodySummary](docs/Model/PromotionsTiersUpdateResponseBodySummary.md)
- [PromotionsTiersUpdateResponseBodySummaryOrders](docs/Model/PromotionsTiersUpdateResponseBodySummaryOrders.md)
- [PromotionsTiersUpdateResponseBodySummaryRedemptions](docs/Model/PromotionsTiersUpdateResponseBodySummaryRedemptions.md)
- [PublicationsCreateRequestBody](docs/Model/PublicationsCreateRequestBody.md)
- [PublicationsCreateRequestBodyCustomer](docs/Model/PublicationsCreateRequestBodyCustomer.md)
- [PublicationsCreateRequestBodyCustomerAddress](docs/Model/PublicationsCreateRequestBodyCustomerAddress.md)
- [PublicationsCreateResponseBody](docs/Model/PublicationsCreateResponseBody.md)
- [PublicationsListResponseBody](docs/Model/PublicationsListResponseBody.md)
- [PublicationsListResponseBodyPublicationsItem](docs/Model/PublicationsListResponseBodyPublicationsItem.md)
- [PublicationsListResponseBodyPublicationsItemMetadata](docs/Model/PublicationsListResponseBodyPublicationsItemMetadata.md)
- [QualificationsCheckEligibilityRequestBody](docs/Model/QualificationsCheckEligibilityRequestBody.md)
- [QualificationsCheckEligibilityResponseBody](docs/Model/QualificationsCheckEligibilityResponseBody.md)
- [QualificationsFieldConditions](docs/Model/QualificationsFieldConditions.md)
- [QualificationsFiltersCondition](docs/Model/QualificationsFiltersCondition.md)
- [QualificationsOption](docs/Model/QualificationsOption.md)
- [QualificationsOptionFilters](docs/Model/QualificationsOptionFilters.md)
- [QualificationsOptionFiltersCampaignType](docs/Model/QualificationsOptionFiltersCampaignType.md)
- [QualificationsOptionFiltersCampaignTypeConditions](docs/Model/QualificationsOptionFiltersCampaignTypeConditions.md)
- [QualificationsOptionFiltersHolderRole](docs/Model/QualificationsOptionFiltersHolderRole.md)
- [QualificationsOptionFiltersHolderRoleConditions](docs/Model/QualificationsOptionFiltersHolderRoleConditions.md)
- [QualificationsOptionFiltersResourceType](docs/Model/QualificationsOptionFiltersResourceType.md)
- [QualificationsOptionFiltersResourceTypeConditions](docs/Model/QualificationsOptionFiltersResourceTypeConditions.md)
- [QualificationsRedeemable](docs/Model/QualificationsRedeemable.md)
- [QualificationsRedeemableBase](docs/Model/QualificationsRedeemableBase.md)
- [QualificationsRedeemables](docs/Model/QualificationsRedeemables.md)
- [RedeemableGift](docs/Model/RedeemableGift.md)
- [RedeemableLoyaltyCard](docs/Model/RedeemableLoyaltyCard.md)
- [RedeemableResult](docs/Model/RedeemableResult.md)
- [RedeemableVoucher](docs/Model/RedeemableVoucher.md)
- [RedeemableVoucherGift](docs/Model/RedeemableVoucherGift.md)
- [RedeemableVoucherLoyaltyCard](docs/Model/RedeemableVoucherLoyaltyCard.md)
- [RedeemableVoucherPublish](docs/Model/RedeemableVoucherPublish.md)
- [RedeemableVoucherRedemption](docs/Model/RedeemableVoucherRedemption.md)
- [Redemption](docs/Model/Redemption.md)
- [RedemptionChannel](docs/Model/RedemptionChannel.md)
- [RedemptionEntry](docs/Model/RedemptionEntry.md)
- [RedemptionEntryChannel](docs/Model/RedemptionEntryChannel.md)
- [RedemptionEntryCustomer](docs/Model/RedemptionEntryCustomer.md)
- [RedemptionEntryGift](docs/Model/RedemptionEntryGift.md)
- [RedemptionEntryLoyaltyCard](docs/Model/RedemptionEntryLoyaltyCard.md)
- [RedemptionEntryOrder](docs/Model/RedemptionEntryOrder.md)
- [RedemptionEntryOrderCustomer](docs/Model/RedemptionEntryOrderCustomer.md)
- [RedemptionEntryOrderReferrer](docs/Model/RedemptionEntryOrderReferrer.md)
- [RedemptionEntryPromotionTier](docs/Model/RedemptionEntryPromotionTier.md)
- [RedemptionEntryPromotionTierAction](docs/Model/RedemptionEntryPromotionTierAction.md)
- [RedemptionEntryPromotionTierCampaign](docs/Model/RedemptionEntryPromotionTierCampaign.md)
- [RedemptionEntryPromotionTierSummary](docs/Model/RedemptionEntryPromotionTierSummary.md)
- [RedemptionEntryPromotionTierSummaryOrders](docs/Model/RedemptionEntryPromotionTierSummaryOrders.md)
- [RedemptionEntryPromotionTierSummaryRedemptions](docs/Model/RedemptionEntryPromotionTierSummaryRedemptions.md)
- [RedemptionEntryRelatedRedemptions](docs/Model/RedemptionEntryRelatedRedemptions.md)
- [RedemptionEntryRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionEntryRelatedRedemptionsRedemptionsItem.md)
- [RedemptionEntryRelatedRedemptionsRollbacksItem](docs/Model/RedemptionEntryRelatedRedemptionsRollbacksItem.md)
- [RedemptionEntryVoucher](docs/Model/RedemptionEntryVoucher.md)
- [RedemptionEntryVoucherGift](docs/Model/RedemptionEntryVoucherGift.md)
- [RedemptionEntryVoucherLoyaltyCard](docs/Model/RedemptionEntryVoucherLoyaltyCard.md)
- [RedemptionEntryVoucherPublish](docs/Model/RedemptionEntryVoucherPublish.md)
- [RedemptionEntryVoucherRedemption](docs/Model/RedemptionEntryVoucherRedemption.md)
- [RedemptionGift](docs/Model/RedemptionGift.md)
- [RedemptionLoyaltyCard](docs/Model/RedemptionLoyaltyCard.md)
- [RedemptionRelatedRedemptions](docs/Model/RedemptionRelatedRedemptions.md)
- [RedemptionRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionRelatedRedemptionsRedemptionsItem.md)
- [RedemptionRelatedRedemptionsRollbacksItem](docs/Model/RedemptionRelatedRedemptionsRollbacksItem.md)
- [RedemptionRewardResult](docs/Model/RedemptionRewardResult.md)
- [RedemptionRewardResultParameters](docs/Model/RedemptionRewardResultParameters.md)
- [RedemptionRewardResultParametersCampaign](docs/Model/RedemptionRewardResultParametersCampaign.md)
- [RedemptionRewardResultParametersCoin](docs/Model/RedemptionRewardResultParametersCoin.md)
- [RedemptionRewardResultParametersProduct](docs/Model/RedemptionRewardResultParametersProduct.md)
- [RedemptionRollback](docs/Model/RedemptionRollback.md)
- [RedemptionRollbackChannel](docs/Model/RedemptionRollbackChannel.md)
- [RedemptionRollbackGift](docs/Model/RedemptionRollbackGift.md)
- [RedemptionRollbackLoyaltyCard](docs/Model/RedemptionRollbackLoyaltyCard.md)
- [RedemptionRollbackRelatedRedemptions](docs/Model/RedemptionRollbackRelatedRedemptions.md)
- [RedemptionRollbackRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionRollbackRelatedRedemptionsRedemptionsItem.md)
- [RedemptionRollbackRelatedRedemptionsRollbacksItem](docs/Model/RedemptionRollbackRelatedRedemptionsRollbacksItem.md)
- [RedemptionVoucher](docs/Model/RedemptionVoucher.md)
- [RedemptionVoucherGift](docs/Model/RedemptionVoucherGift.md)
- [RedemptionVoucherLoyaltyCard](docs/Model/RedemptionVoucherLoyaltyCard.md)
- [RedemptionVoucherPublish](docs/Model/RedemptionVoucherPublish.md)
- [RedemptionVoucherRedemption](docs/Model/RedemptionVoucherRedemption.md)
- [RedemptionsGetResponseBody](docs/Model/RedemptionsGetResponseBody.md)
- [RedemptionsGetResponseBodyChannel](docs/Model/RedemptionsGetResponseBodyChannel.md)
- [RedemptionsGetResponseBodyCustomer](docs/Model/RedemptionsGetResponseBodyCustomer.md)
- [RedemptionsGetResponseBodyGift](docs/Model/RedemptionsGetResponseBodyGift.md)
- [RedemptionsGetResponseBodyLoyaltyCard](docs/Model/RedemptionsGetResponseBodyLoyaltyCard.md)
- [RedemptionsGetResponseBodyOrder](docs/Model/RedemptionsGetResponseBodyOrder.md)
- [RedemptionsGetResponseBodyOrderCustomer](docs/Model/RedemptionsGetResponseBodyOrderCustomer.md)
- [RedemptionsGetResponseBodyOrderReferrer](docs/Model/RedemptionsGetResponseBodyOrderReferrer.md)
- [RedemptionsGetResponseBodyPromotionTier](docs/Model/RedemptionsGetResponseBodyPromotionTier.md)
- [RedemptionsGetResponseBodyPromotionTierAction](docs/Model/RedemptionsGetResponseBodyPromotionTierAction.md)
- [RedemptionsGetResponseBodyPromotionTierCampaign](docs/Model/RedemptionsGetResponseBodyPromotionTierCampaign.md)
- [RedemptionsGetResponseBodyPromotionTierSummary](docs/Model/RedemptionsGetResponseBodyPromotionTierSummary.md)
- [RedemptionsGetResponseBodyPromotionTierSummaryOrders](docs/Model/RedemptionsGetResponseBodyPromotionTierSummaryOrders.md)
- [RedemptionsGetResponseBodyPromotionTierSummaryRedemptions](docs/Model/RedemptionsGetResponseBodyPromotionTierSummaryRedemptions.md)
- [RedemptionsGetResponseBodyRelatedRedemptions](docs/Model/RedemptionsGetResponseBodyRelatedRedemptions.md)
- [RedemptionsGetResponseBodyRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionsGetResponseBodyRelatedRedemptionsRedemptionsItem.md)
- [RedemptionsGetResponseBodyRelatedRedemptionsRollbacksItem](docs/Model/RedemptionsGetResponseBodyRelatedRedemptionsRollbacksItem.md)
- [RedemptionsGetResponseBodyVoucher](docs/Model/RedemptionsGetResponseBodyVoucher.md)
- [RedemptionsGetResponseBodyVoucherGift](docs/Model/RedemptionsGetResponseBodyVoucherGift.md)
- [RedemptionsGetResponseBodyVoucherLoyaltyCard](docs/Model/RedemptionsGetResponseBodyVoucherLoyaltyCard.md)
- [RedemptionsGetResponseBodyVoucherPublish](docs/Model/RedemptionsGetResponseBodyVoucherPublish.md)
- [RedemptionsGetResponseBodyVoucherRedemption](docs/Model/RedemptionsGetResponseBodyVoucherRedemption.md)
- [RedemptionsListResponseBody](docs/Model/RedemptionsListResponseBody.md)
- [RedemptionsListResponseBodyRedemptionsItem](docs/Model/RedemptionsListResponseBodyRedemptionsItem.md)
- [RedemptionsListResponseBodyRedemptionsItemChannel](docs/Model/RedemptionsListResponseBodyRedemptionsItemChannel.md)
- [RedemptionsListResponseBodyRedemptionsItemCustomer](docs/Model/RedemptionsListResponseBodyRedemptionsItemCustomer.md)
- [RedemptionsListResponseBodyRedemptionsItemGift](docs/Model/RedemptionsListResponseBodyRedemptionsItemGift.md)
- [RedemptionsListResponseBodyRedemptionsItemLoyaltyCard](docs/Model/RedemptionsListResponseBodyRedemptionsItemLoyaltyCard.md)
- [RedemptionsListResponseBodyRedemptionsItemOrder](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrder.md)
- [RedemptionsListResponseBodyRedemptionsItemOrderCustomer](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrderCustomer.md)
- [RedemptionsListResponseBodyRedemptionsItemOrderReferrer](docs/Model/RedemptionsListResponseBodyRedemptionsItemOrderReferrer.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTier](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTier.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierAction](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierAction.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaign](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierCampaign.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummary](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummary.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryOrders](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryOrders.md)
- [RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryRedemptions](docs/Model/RedemptionsListResponseBodyRedemptionsItemPromotionTierSummaryRedemptions.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRedemptionsItem.md)
- [RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRollbacksItem](docs/Model/RedemptionsListResponseBodyRedemptionsItemRelatedRedemptionsRollbacksItem.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucher](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucher.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherGift](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherGift.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherLoyaltyCard](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherLoyaltyCard.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherPublish](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherPublish.md)
- [RedemptionsListResponseBodyRedemptionsItemVoucherRedemption](docs/Model/RedemptionsListResponseBodyRedemptionsItemVoucherRedemption.md)
- [RedemptionsRedeemRequestBody](docs/Model/RedemptionsRedeemRequestBody.md)
- [RedemptionsRedeemRequestBodyOptions](docs/Model/RedemptionsRedeemRequestBodyOptions.md)
- [RedemptionsRedeemRequestBodyRedeemablesItem](docs/Model/RedemptionsRedeemRequestBodyRedeemablesItem.md)
- [RedemptionsRedeemRequestBodyRedeemablesItemGift](docs/Model/RedemptionsRedeemRequestBodyRedeemablesItemGift.md)
- [RedemptionsRedeemRequestBodyRedeemablesItemReward](docs/Model/RedemptionsRedeemRequestBodyRedeemablesItemReward.md)
- [RedemptionsRedeemResponseBody](docs/Model/RedemptionsRedeemResponseBody.md)
- [RedemptionsRollbackCreateRequestBody](docs/Model/RedemptionsRollbackCreateRequestBody.md)
- [RedemptionsRollbackCreateResponseBody](docs/Model/RedemptionsRollbackCreateResponseBody.md)
- [RedemptionsRollbackCreateResponseBodyChannel](docs/Model/RedemptionsRollbackCreateResponseBodyChannel.md)
- [RedemptionsRollbackCreateResponseBodyGift](docs/Model/RedemptionsRollbackCreateResponseBodyGift.md)
- [RedemptionsRollbackCreateResponseBodyLoyaltyCard](docs/Model/RedemptionsRollbackCreateResponseBodyLoyaltyCard.md)
- [RedemptionsRollbackCreateResponseBodyRelatedRedemptions](docs/Model/RedemptionsRollbackCreateResponseBodyRelatedRedemptions.md)
- [RedemptionsRollbackCreateResponseBodyRelatedRedemptionsRedemptionsItem](docs/Model/RedemptionsRollbackCreateResponseBodyRelatedRedemptionsRedemptionsItem.md)
- [RedemptionsRollbackCreateResponseBodyRelatedRedemptionsRollbacksItem](docs/Model/RedemptionsRollbackCreateResponseBodyRelatedRedemptionsRollbacksItem.md)
- [RedemptionsRollbacksCreateRequestBody](docs/Model/RedemptionsRollbacksCreateRequestBody.md)
- [RedemptionsRollbacksCreateResponseBody](docs/Model/RedemptionsRollbacksCreateResponseBody.md)
- [ReferralProgram](docs/Model/ReferralProgram.md)
- [ReferralProgramCustomEvent](docs/Model/ReferralProgramCustomEvent.md)
- [ReferralProgramRefereeReward](docs/Model/ReferralProgramRefereeReward.md)
- [ReferralProgramRefereeRewardRelatedObjectParent](docs/Model/ReferralProgramRefereeRewardRelatedObjectParent.md)
- [Referrer](docs/Model/Referrer.md)
- [ReferrerAddress](docs/Model/ReferrerAddress.md)
- [ReferrerId](docs/Model/ReferrerId.md)
- [Reward](docs/Model/Reward.md)
- [RewardAssignment](docs/Model/RewardAssignment.md)
- [RewardAssignmentParameters](docs/Model/RewardAssignmentParameters.md)
- [RewardAssignmentParametersLoyalty](docs/Model/RewardAssignmentParametersLoyalty.md)
- [RewardAttributes](docs/Model/RewardAttributes.md)
- [RewardType](docs/Model/RewardType.md)
- [RewardTypeCampaign](docs/Model/RewardTypeCampaign.md)
- [RewardTypeCoin](docs/Model/RewardTypeCoin.md)
- [RewardTypeProduct](docs/Model/RewardTypeProduct.md)
- [RewardsAssignmentsCreateRequestBody](docs/Model/RewardsAssignmentsCreateRequestBody.md)
- [RewardsAssignmentsCreateRequestBodyParameters](docs/Model/RewardsAssignmentsCreateRequestBodyParameters.md)
- [RewardsAssignmentsCreateRequestBodyParametersLoyalty](docs/Model/RewardsAssignmentsCreateRequestBodyParametersLoyalty.md)
- [RewardsAssignmentsCreateResponseBody](docs/Model/RewardsAssignmentsCreateResponseBody.md)
- [RewardsAssignmentsCreateResponseBodyParameters](docs/Model/RewardsAssignmentsCreateResponseBodyParameters.md)
- [RewardsAssignmentsCreateResponseBodyParametersLoyalty](docs/Model/RewardsAssignmentsCreateResponseBodyParametersLoyalty.md)
- [RewardsAssignmentsGetResponseBody](docs/Model/RewardsAssignmentsGetResponseBody.md)
- [RewardsAssignmentsGetResponseBodyParameters](docs/Model/RewardsAssignmentsGetResponseBodyParameters.md)
- [RewardsAssignmentsGetResponseBodyParametersLoyalty](docs/Model/RewardsAssignmentsGetResponseBodyParametersLoyalty.md)
- [RewardsAssignmentsListResponseBody](docs/Model/RewardsAssignmentsListResponseBody.md)
- [RewardsAssignmentsUpdateRequestBody](docs/Model/RewardsAssignmentsUpdateRequestBody.md)
- [RewardsAssignmentsUpdateRequestBodyParameters](docs/Model/RewardsAssignmentsUpdateRequestBodyParameters.md)
- [RewardsAssignmentsUpdateRequestBodyParametersLoyalty](docs/Model/RewardsAssignmentsUpdateRequestBodyParametersLoyalty.md)
- [RewardsAssignmentsUpdateResponseBody](docs/Model/RewardsAssignmentsUpdateResponseBody.md)
- [RewardsAssignmentsUpdateResponseBodyParameters](docs/Model/RewardsAssignmentsUpdateResponseBodyParameters.md)
- [RewardsAssignmentsUpdateResponseBodyParametersLoyalty](docs/Model/RewardsAssignmentsUpdateResponseBodyParametersLoyalty.md)
- [RewardsCreateRequestBody](docs/Model/RewardsCreateRequestBody.md)
- [RewardsCreateRequestBodyAttributes](docs/Model/RewardsCreateRequestBodyAttributes.md)
- [RewardsCreateRequestBodyParameters](docs/Model/RewardsCreateRequestBodyParameters.md)
- [RewardsCreateRequestBodyParametersCampaign](docs/Model/RewardsCreateRequestBodyParametersCampaign.md)
- [RewardsCreateRequestBodyParametersCoin](docs/Model/RewardsCreateRequestBodyParametersCoin.md)
- [RewardsCreateRequestBodyParametersProduct](docs/Model/RewardsCreateRequestBodyParametersProduct.md)
- [RewardsCreateResponseBody](docs/Model/RewardsCreateResponseBody.md)
- [RewardsCreateResponseBodyAttributes](docs/Model/RewardsCreateResponseBodyAttributes.md)
- [RewardsListResponseBody](docs/Model/RewardsListResponseBody.md)
- [RewardsUpdateRequestBody](docs/Model/RewardsUpdateRequestBody.md)
- [RewardsUpdateRequestBodyAttributes](docs/Model/RewardsUpdateRequestBodyAttributes.md)
- [RewardsUpdateRequestBodyParameters](docs/Model/RewardsUpdateRequestBodyParameters.md)
- [RewardsUpdateRequestBodyParametersCampaign](docs/Model/RewardsUpdateRequestBodyParametersCampaign.md)
- [RewardsUpdateRequestBodyParametersCoin](docs/Model/RewardsUpdateRequestBodyParametersCoin.md)
- [RewardsUpdateRequestBodyParametersProduct](docs/Model/RewardsUpdateRequestBodyParametersProduct.md)
- [RewardsUpdateResponseBody](docs/Model/RewardsUpdateResponseBody.md)
- [RewardsUpdateResponseBodyAttributes](docs/Model/RewardsUpdateResponseBodyAttributes.md)
- [SegmentsCreateRequestBody](docs/Model/SegmentsCreateRequestBody.md)
- [SegmentsCreateResponseBody](docs/Model/SegmentsCreateResponseBody.md)
- [SegmentsGetResponseBody](docs/Model/SegmentsGetResponseBody.md)
- [Session](docs/Model/Session.md)
- [SimpleCustomer](docs/Model/SimpleCustomer.md)
- [SimpleCustomerRequiredObjectType](docs/Model/SimpleCustomerRequiredObjectType.md)
- [SimpleLoyaltyCard](docs/Model/SimpleLoyaltyCard.md)
- [SimpleProductDiscountUnit](docs/Model/SimpleProductDiscountUnit.md)
- [SimpleSegment](docs/Model/SimpleSegment.md)
- [SimpleSkuDiscountUnit](docs/Model/SimpleSkuDiscountUnit.md)
- [SimpleVoucher](docs/Model/SimpleVoucher.md)
- [SimpleVoucherRedemption](docs/Model/SimpleVoucherRedemption.md)
- [Sku](docs/Model/Sku.md)
- [SkusGetResponseBody](docs/Model/SkusGetResponseBody.md)
- [SkusImportCsvCreateResponseBody](docs/Model/SkusImportCsvCreateResponseBody.md)
- [SkusListForProduct](docs/Model/SkusListForProduct.md)
- [StackingRules](docs/Model/StackingRules.md)
- [ValidationRule](docs/Model/ValidationRule.md)
- [ValidationRuleApplicableTo](docs/Model/ValidationRuleApplicableTo.md)
- [ValidationRuleAssignment](docs/Model/ValidationRuleAssignment.md)
- [ValidationRuleAssignmentsList](docs/Model/ValidationRuleAssignmentsList.md)
- [ValidationRuleError](docs/Model/ValidationRuleError.md)
- [ValidationRulesAssignmentsCreateRequestBody](docs/Model/ValidationRulesAssignmentsCreateRequestBody.md)
- [ValidationRulesAssignmentsCreateResponseBody](docs/Model/ValidationRulesAssignmentsCreateResponseBody.md)
- [ValidationRulesAssignmentsList](docs/Model/ValidationRulesAssignmentsList.md)
- [ValidationRulesAssignmentsListResponseBody](docs/Model/ValidationRulesAssignmentsListResponseBody.md)
- [ValidationRulesCreateRequestBody](docs/Model/ValidationRulesCreateRequestBody.md)
- [ValidationRulesCreateRequestBodyApplicableTo](docs/Model/ValidationRulesCreateRequestBodyApplicableTo.md)
- [ValidationRulesCreateRequestBodyError](docs/Model/ValidationRulesCreateRequestBodyError.md)
- [ValidationRulesCreateResponseBody](docs/Model/ValidationRulesCreateResponseBody.md)
- [ValidationRulesCreateResponseBodyApplicableTo](docs/Model/ValidationRulesCreateResponseBodyApplicableTo.md)
- [ValidationRulesCreateResponseBodyError](docs/Model/ValidationRulesCreateResponseBodyError.md)
- [ValidationRulesGetResponseBody](docs/Model/ValidationRulesGetResponseBody.md)
- [ValidationRulesGetResponseBodyApplicableTo](docs/Model/ValidationRulesGetResponseBodyApplicableTo.md)
- [ValidationRulesGetResponseBodyError](docs/Model/ValidationRulesGetResponseBodyError.md)
- [ValidationRulesListResponseBody](docs/Model/ValidationRulesListResponseBody.md)
- [ValidationRulesUpdateRequestBody](docs/Model/ValidationRulesUpdateRequestBody.md)
- [ValidationRulesUpdateRequestBodyApplicableTo](docs/Model/ValidationRulesUpdateRequestBodyApplicableTo.md)
- [ValidationRulesUpdateRequestBodyError](docs/Model/ValidationRulesUpdateRequestBodyError.md)
- [ValidationRulesUpdateResponseBody](docs/Model/ValidationRulesUpdateResponseBody.md)
- [ValidationRulesUpdateResponseBodyApplicableTo](docs/Model/ValidationRulesUpdateResponseBodyApplicableTo.md)
- [ValidationRulesUpdateResponseBodyError](docs/Model/ValidationRulesUpdateResponseBodyError.md)
- [ValidationsRedeemableInapplicable](docs/Model/ValidationsRedeemableInapplicable.md)
- [ValidationsRedeemableInapplicableResult](docs/Model/ValidationsRedeemableInapplicableResult.md)
- [ValidationsRedeemableInapplicableResultDetails](docs/Model/ValidationsRedeemableInapplicableResultDetails.md)
- [ValidationsRedeemableSkipped](docs/Model/ValidationsRedeemableSkipped.md)
- [ValidationsRedeemableSkippedResult](docs/Model/ValidationsRedeemableSkippedResult.md)
- [ValidationsRedeemableSkippedResultDetails](docs/Model/ValidationsRedeemableSkippedResultDetails.md)
- [ValidationsValidateRequestBody](docs/Model/ValidationsValidateRequestBody.md)
- [ValidationsValidateRequestBodyOptions](docs/Model/ValidationsValidateRequestBodyOptions.md)
- [ValidationsValidateRequestBodyRedeemablesItem](docs/Model/ValidationsValidateRequestBodyRedeemablesItem.md)
- [ValidationsValidateRequestBodyRedeemablesItemGift](docs/Model/ValidationsValidateRequestBodyRedeemablesItemGift.md)
- [ValidationsValidateRequestBodyRedeemablesItemReward](docs/Model/ValidationsValidateRequestBodyRedeemablesItemReward.md)
- [ValidationsValidateResponseBody](docs/Model/ValidationsValidateResponseBody.md)
- [ValidationsValidateResponseBodyRedeemablesItem](docs/Model/ValidationsValidateResponseBodyRedeemablesItem.md)
- [ValidationsValidateResponseBodyRedeemablesItemResult](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResult.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultDetails](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultDetails.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultDiscount](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultDiscount.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultGift](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultGift.md)
- [ValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard](docs/Model/ValidationsValidateResponseBodyRedeemablesItemResultLoyaltyCard.md)
- [ValidityHours](docs/Model/ValidityHours.md)
- [ValidityHoursDailyItem](docs/Model/ValidityHoursDailyItem.md)
- [ValidityTimeframe](docs/Model/ValidityTimeframe.md)
- [Voucher](docs/Model/Voucher.md)
- [VoucherAssets](docs/Model/VoucherAssets.md)
- [VoucherAssetsBarcode](docs/Model/VoucherAssetsBarcode.md)
- [VoucherAssetsQr](docs/Model/VoucherAssetsQr.md)
- [VoucherGift](docs/Model/VoucherGift.md)
- [VoucherLoyaltyCard](docs/Model/VoucherLoyaltyCard.md)
- [VoucherPublish](docs/Model/VoucherPublish.md)
- [VoucherRedemption](docs/Model/VoucherRedemption.md)
- [VoucherTransaction](docs/Model/VoucherTransaction.md)
- [VoucherTransactionDetails](docs/Model/VoucherTransactionDetails.md)
- [VoucherTransactionDetailsBalance](docs/Model/VoucherTransactionDetailsBalance.md)
- [VoucherTransactionDetailsBalanceRelatedObject](docs/Model/VoucherTransactionDetailsBalanceRelatedObject.md)
- [VoucherTransactionDetailsCustomEvent](docs/Model/VoucherTransactionDetailsCustomEvent.md)
- [VoucherTransactionDetailsEarningRule](docs/Model/VoucherTransactionDetailsEarningRule.md)
- [VoucherTransactionDetailsEarningRuleSource](docs/Model/VoucherTransactionDetailsEarningRuleSource.md)
- [VoucherTransactionDetailsEvent](docs/Model/VoucherTransactionDetailsEvent.md)
- [VoucherTransactionDetailsEventSchema](docs/Model/VoucherTransactionDetailsEventSchema.md)
- [VoucherTransactionDetailsLoyaltyTier](docs/Model/VoucherTransactionDetailsLoyaltyTier.md)
- [VoucherTransactionDetailsOrder](docs/Model/VoucherTransactionDetailsOrder.md)
- [VoucherTransactionDetailsRedemption](docs/Model/VoucherTransactionDetailsRedemption.md)
- [VoucherTransactionDetailsReward](docs/Model/VoucherTransactionDetailsReward.md)
- [VoucherTransactionDetailsRollback](docs/Model/VoucherTransactionDetailsRollback.md)
- [VoucherTransactionDetailsSegment](docs/Model/VoucherTransactionDetailsSegment.md)
- [VoucherTransactionsExportFilterConditions](docs/Model/VoucherTransactionsExportFilterConditions.md)
- [VoucherTransactionsExportFilterConditionsVoucherId](docs/Model/VoucherTransactionsExportFilterConditionsVoucherId.md)
- [VoucherTransactionsExportFilterConditionsVoucherIdConditions](docs/Model/VoucherTransactionsExportFilterConditionsVoucherIdConditions.md)
- [VoucherTransactionsExportParameters](docs/Model/VoucherTransactionsExportParameters.md)
- [VoucherTransactionsFilters](docs/Model/VoucherTransactionsFilters.md)
- [VoucherWithCategories](docs/Model/VoucherWithCategories.md)
- [VoucherWithCategoriesGift](docs/Model/VoucherWithCategoriesGift.md)
- [VoucherWithCategoriesLoyaltyCard](docs/Model/VoucherWithCategoriesLoyaltyCard.md)
- [VoucherWithCategoriesPublish](docs/Model/VoucherWithCategoriesPublish.md)
- [VoucherWithCategoriesRedemption](docs/Model/VoucherWithCategoriesRedemption.md)
- [VouchersBalanceUpdateRequestBody](docs/Model/VouchersBalanceUpdateRequestBody.md)
- [VouchersBalanceUpdateResponseBody](docs/Model/VouchersBalanceUpdateResponseBody.md)
- [VouchersBalanceUpdateResponseBodyRelatedObject](docs/Model/VouchersBalanceUpdateResponseBodyRelatedObject.md)
- [VouchersCreateResponseBody](docs/Model/VouchersCreateResponseBody.md)
- [VouchersCreateResponseBodyGift](docs/Model/VouchersCreateResponseBodyGift.md)
- [VouchersCreateResponseBodyLoyaltyCard](docs/Model/VouchersCreateResponseBodyLoyaltyCard.md)
- [VouchersCreateResponseBodyPublish](docs/Model/VouchersCreateResponseBodyPublish.md)
- [VouchersCreateResponseBodyRedemption](docs/Model/VouchersCreateResponseBodyRedemption.md)
- [VouchersCreateWithSpecificCodeRequestBody](docs/Model/VouchersCreateWithSpecificCodeRequestBody.md)
- [VouchersCreateWithSpecificCodeRequestBodyRedemption](docs/Model/VouchersCreateWithSpecificCodeRequestBodyRedemption.md)
- [VouchersDisableResponseBody](docs/Model/VouchersDisableResponseBody.md)
- [VouchersDisableResponseBodyGift](docs/Model/VouchersDisableResponseBodyGift.md)
- [VouchersDisableResponseBodyLoyaltyCard](docs/Model/VouchersDisableResponseBodyLoyaltyCard.md)
- [VouchersDisableResponseBodyPublish](docs/Model/VouchersDisableResponseBodyPublish.md)
- [VouchersDisableResponseBodyRedemption](docs/Model/VouchersDisableResponseBodyRedemption.md)
- [VouchersEnableResponseBody](docs/Model/VouchersEnableResponseBody.md)
- [VouchersEnableResponseBodyGift](docs/Model/VouchersEnableResponseBodyGift.md)
- [VouchersEnableResponseBodyLoyaltyCard](docs/Model/VouchersEnableResponseBodyLoyaltyCard.md)
- [VouchersEnableResponseBodyPublish](docs/Model/VouchersEnableResponseBodyPublish.md)
- [VouchersEnableResponseBodyRedemption](docs/Model/VouchersEnableResponseBodyRedemption.md)
- [VouchersGetResponseBody](docs/Model/VouchersGetResponseBody.md)
- [VouchersGetResponseBodyGift](docs/Model/VouchersGetResponseBodyGift.md)
- [VouchersGetResponseBodyLoyaltyCard](docs/Model/VouchersGetResponseBodyLoyaltyCard.md)
- [VouchersGetResponseBodyPublish](docs/Model/VouchersGetResponseBodyPublish.md)
- [VouchersGetResponseBodyRedemption](docs/Model/VouchersGetResponseBodyRedemption.md)
- [VouchersImportCreateItemRequestBody](docs/Model/VouchersImportCreateItemRequestBody.md)
- [VouchersImportCreateItemRequestBodyRedemption](docs/Model/VouchersImportCreateItemRequestBodyRedemption.md)
- [VouchersImportCreateResponseBody](docs/Model/VouchersImportCreateResponseBody.md)
- [VouchersImportCsvCreateResponseBody](docs/Model/VouchersImportCsvCreateResponseBody.md)
- [VouchersListResponseBody](docs/Model/VouchersListResponseBody.md)
- [VouchersMetadataUpdateInBulkRequestBody](docs/Model/VouchersMetadataUpdateInBulkRequestBody.md)
- [VouchersMetadataUpdateInBulkResponseBody](docs/Model/VouchersMetadataUpdateInBulkResponseBody.md)
- [VouchersRedemptionGetResponseBody](docs/Model/VouchersRedemptionGetResponseBody.md)
- [VouchersTransactionsExportCreateRequestBody](docs/Model/VouchersTransactionsExportCreateRequestBody.md)
- [VouchersTransactionsExportCreateResponseBody](docs/Model/VouchersTransactionsExportCreateResponseBody.md)
- [VouchersTransactionsExportCreateResponseBodyResult](docs/Model/VouchersTransactionsExportCreateResponseBodyResult.md)
- [VouchersTransactionsListResponseBody](docs/Model/VouchersTransactionsListResponseBody.md)
- [VouchersUpdateInBulkItemRequestBody](docs/Model/VouchersUpdateInBulkItemRequestBody.md)
- [VouchersUpdateInBulkResponseBody](docs/Model/VouchersUpdateInBulkResponseBody.md)
- [VouchersUpdateRequestBody](docs/Model/VouchersUpdateRequestBody.md)
- [VouchersUpdateResponseBody](docs/Model/VouchersUpdateResponseBody.md)
- [VouchersUpdateResponseBodyGift](docs/Model/VouchersUpdateResponseBodyGift.md)
- [VouchersUpdateResponseBodyLoyaltyCard](docs/Model/VouchersUpdateResponseBodyLoyaltyCard.md)
- [VouchersUpdateResponseBodyPublish](docs/Model/VouchersUpdateResponseBodyPublish.md)
- [VouchersUpdateResponseBodyRedemption](docs/Model/VouchersUpdateResponseBodyRedemption.md)

## Authorization

### X-App-Id

- **Type**: API key
- **API key parameter name**: X-App-Id
- **Location**: HTTP header



### X-App-Token

- **Type**: API key
- **API key parameter name**: X-App-Token
- **Location**: HTTP header



### X-Client-Token

- **Type**: API key
- **API key parameter name**: X-Client-Token
- **Location**: HTTP header



### X-Client-Application-Id

- **Type**: API key
- **API key parameter name**: X-Client-Application-Id
- **Location**: HTTP header


## Run local tests with docker

1. Copy `.env.example` to `.env` and fill in the values.
2. Run `docker build -t php .` to build the image.
3. Run `docker run --rm php` to run the tests and delete container immediately after.

## Author

support@voucherify.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v2018-08-01`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
