# OpenAPI\Client\LoyaltiesApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMember()**](LoyaltiesApi.md#addMember) | **POST** /v1/loyalties/{campaignId}/members | Add Member |
| [**createEarningRule()**](LoyaltiesApi.md#createEarningRule) | **POST** /v1/loyalties/{campaignId}/earning-rules | Create Earning Rule |
| [**createInBulkLoyaltyTiers()**](LoyaltiesApi.md#createInBulkLoyaltyTiers) | **POST** /v1/loyalties/{campaignId}/tiers | Create loyalty tiers |
| [**createLoyaltyProgram()**](LoyaltiesApi.md#createLoyaltyProgram) | **POST** /v1/loyalties | Create Loyalty Campaign |
| [**createPointsExpirationExport()**](LoyaltiesApi.md#createPointsExpirationExport) | **POST** /v1/loyalties/{campaignId}/points-expiration/export | Create Points Expiration Export |
| [**createRewardAssignment1()**](LoyaltiesApi.md#createRewardAssignment1) | **POST** /v1/loyalties/{campaignId}/rewards | Create Reward Assignment |
| [**deleteEarningRule()**](LoyaltiesApi.md#deleteEarningRule) | **DELETE** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Delete Earning Rule |
| [**deleteLoyaltyProgram()**](LoyaltiesApi.md#deleteLoyaltyProgram) | **DELETE** /v1/loyalties/{campaignId} | Delete Loyalty Campaign |
| [**deleteRewardAssignment1()**](LoyaltiesApi.md#deleteRewardAssignment1) | **DELETE** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Delete Reward Assignment |
| [**disableEarningRule()**](LoyaltiesApi.md#disableEarningRule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/disable | Disable Earning Rule |
| [**enableEarningRule()**](LoyaltiesApi.md#enableEarningRule) | **POST** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId}/enable | Enable Earning Rule |
| [**exportLoyaltyCardTransactions()**](LoyaltiesApi.md#exportLoyaltyCardTransactions) | **POST** /v1/loyalties/members/{memberId}/transactions/export | Export Loyalty Card Transactions |
| [**exportLoyaltyCardTransactions1()**](LoyaltiesApi.md#exportLoyaltyCardTransactions1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transactions/export | Export Loyalty Card Transactions |
| [**getEarningRule()**](LoyaltiesApi.md#getEarningRule) | **GET** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Get Earning Rule |
| [**getLoyaltyProgram()**](LoyaltiesApi.md#getLoyaltyProgram) | **GET** /v1/loyalties/{campaignId} | Get Loyalty Campaign |
| [**getLoyaltyTier()**](LoyaltiesApi.md#getLoyaltyTier) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId} | Get Loyalty Tier |
| [**getMember()**](LoyaltiesApi.md#getMember) | **GET** /v1/loyalties/members/{memberId} | Get Member |
| [**getMember1()**](LoyaltiesApi.md#getMember1) | **GET** /v1/loyalties/{campaignId}/members/{memberId} | Get Member |
| [**getRewardAssignment1()**](LoyaltiesApi.md#getRewardAssignment1) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId} | Get Reward Assignment |
| [**getRewardAssignment2()**](LoyaltiesApi.md#getRewardAssignment2) | **GET** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Get Reward Assignment |
| [**getRewardDetails()**](LoyaltiesApi.md#getRewardDetails) | **GET** /v1/loyalties/{campaignId}/reward-assignments/{assignmentId}/reward | Get Reward Details |
| [**listEarningRules()**](LoyaltiesApi.md#listEarningRules) | **GET** /v1/loyalties/{campaignId}/earning-rules | List Earning Rules |
| [**listLoyaltyCardTransactions()**](LoyaltiesApi.md#listLoyaltyCardTransactions) | **GET** /v1/loyalties/members/{memberId}/transactions | List Loyalty Card Transactions |
| [**listLoyaltyCardTransactions1()**](LoyaltiesApi.md#listLoyaltyCardTransactions1) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/transactions | List Loyalty Card Transactions |
| [**listLoyaltyPrograms()**](LoyaltiesApi.md#listLoyaltyPrograms) | **GET** /v1/loyalties | List Loyalty Campaigns |
| [**listLoyaltyTierEarningRules()**](LoyaltiesApi.md#listLoyaltyTierEarningRules) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/earning-rules | List Loyalty Tier Earning Rules |
| [**listLoyaltyTierRewards()**](LoyaltiesApi.md#listLoyaltyTierRewards) | **GET** /v1/loyalties/{campaignId}/tiers/{loyaltyTierId}/rewards | List Loyalty Tier Rewards |
| [**listLoyaltyTiers()**](LoyaltiesApi.md#listLoyaltyTiers) | **GET** /v1/loyalties/{campaignId}/tiers | List Loyalty Tiers |
| [**listMemberActivity()**](LoyaltiesApi.md#listMemberActivity) | **GET** /v1/loyalties/members/{memberId}/activity | List Member Activity |
| [**listMemberActivity1()**](LoyaltiesApi.md#listMemberActivity1) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/activity | List Member Activity |
| [**listMemberLoyaltyTier()**](LoyaltiesApi.md#listMemberLoyaltyTier) | **GET** /v1/loyalties/members/{memberId}/tiers | List Member&#39;s Loyalty Tiers |
| [**listMemberRewards()**](LoyaltiesApi.md#listMemberRewards) | **GET** /v1/loyalties/members/{memberId}/rewards | List Member Rewards |
| [**listMembers()**](LoyaltiesApi.md#listMembers) | **GET** /v1/loyalties/{campaignId}/members | List Members |
| [**listPointsExpiration()**](LoyaltiesApi.md#listPointsExpiration) | **GET** /v1/loyalties/{campaignId}/members/{memberId}/points-expiration | Get Points Expiration |
| [**listRewardAssignments1()**](LoyaltiesApi.md#listRewardAssignments1) | **GET** /v1/loyalties/{campaignId}/reward-assignments | List Reward Assignments |
| [**listRewardAssignments2()**](LoyaltiesApi.md#listRewardAssignments2) | **GET** /v1/loyalties/{campaignId}/rewards | List Reward Assignments |
| [**redeemReward()**](LoyaltiesApi.md#redeemReward) | **POST** /v1/loyalties/members/{memberId}/redemption | Redeem Reward |
| [**redeemReward1()**](LoyaltiesApi.md#redeemReward1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/redemption | Redeem Reward |
| [**transferPoints()**](LoyaltiesApi.md#transferPoints) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/transfers | Transfer Loyalty Points |
| [**updateEarningRule()**](LoyaltiesApi.md#updateEarningRule) | **PUT** /v1/loyalties/{campaignId}/earning-rules/{earningRuleId} | Update Earning Rule |
| [**updateLoyaltyCardBalance()**](LoyaltiesApi.md#updateLoyaltyCardBalance) | **POST** /v1/loyalties/members/{memberId}/balance | Add or Remove Loyalty Card Balance |
| [**updateLoyaltyCardBalance1()**](LoyaltiesApi.md#updateLoyaltyCardBalance1) | **POST** /v1/loyalties/{campaignId}/members/{memberId}/balance | Add or Remove Loyalty Card Balance |
| [**updateLoyaltyProgram()**](LoyaltiesApi.md#updateLoyaltyProgram) | **PUT** /v1/loyalties/{campaignId} | Update Loyalty Campaign |
| [**updateRewardAssignment1()**](LoyaltiesApi.md#updateRewardAssignment1) | **PUT** /v1/loyalties/{campaignId}/rewards/{assignmentId} | Update Reward Assignment |


## `addMember()`

```php
addMember($campaign_id, $loyalties_members_create_request_body): \OpenAPI\Client\Model\LoyaltiesMembersCreateResponseBody
```

Add Member

This method assigns a loyalty card to a customer. It selects a loyalty card suitable for publication, adds a publish entry, and returns the published voucher.   A voucher is suitable for publication when its active and hasnt been published yet.    📘 Auto-update campaign  In case you want to ensure the number of publishable codes increases automatically with the number of customers, you should use **auto-update** campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID of the loyalty program.
$loyalties_members_create_request_body = {"customer":"source_customer_1","metadata":{"year":2022},"channel":"postman","voucher":"KpzbHUY5"}; // \OpenAPI\Client\Model\LoyaltiesMembersCreateRequestBody | Provide details to whom the loyalty card should be assigned.     You can choose to either specify the exact loyalty card code that you want to publish from existin (non-assigned) codes, or choose not to specify a voucher code. If you choose not to specify a code in the request paylaod, then the system will choose the next available voucher code available to be assigned to a customer.   You can also include metadata in the request payload. This metadata will be assigned to the publication object, but will not be returned in the response to this endpoint. To see of publications (assignments of particular codes to customers) and publication metadata, use the List Publications endpoint.

try {
    $result = $apiInstance->addMember($campaign_id, $loyalties_members_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->addMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID of the loyalty program. | |
| **loyalties_members_create_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersCreateRequestBody**](../Model/LoyaltiesMembersCreateRequestBody.md)| Provide details to whom the loyalty card should be assigned.     You can choose to either specify the exact loyalty card code that you want to publish from existin (non-assigned) codes, or choose not to specify a voucher code. If you choose not to specify a code in the request paylaod, then the system will choose the next available voucher code available to be assigned to a customer.   You can also include metadata in the request payload. This metadata will be assigned to the publication object, but will not be returned in the response to this endpoint. To see of publications (assignments of particular codes to customers) and publication metadata, use the List Publications endpoint. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersCreateResponseBody**](../Model/LoyaltiesMembersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEarningRule()`

```php
createEarningRule($campaign_id, $loyalties_earning_rules_create_request_body_item): \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateResponseBody[]
```

Create Earning Rule

Create earning rules for a loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$loyalties_earning_rules_create_request_body_item = [{"event":"order.paid","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"FIXED","points":"5"},"source":{"banner":"Order paid 5 points."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid - fixed amount of points"}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_AMOUNT","order":{"amount":{"every":1,"points":1}}},"source":{"banner":"Order paid - 1 point for 1 dollar spent excluding discounts."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid- points proportional to order amount"}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_TOTAL_AMOUNT","order":{"total_amount":{"every":1,"points":1}}},"source":{"banner":"Order paid - 1 point for 1 dollar spent including discounts."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid- points proportional to order total amount"}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_METADATA","order":{"metadata":{"every":2,"points":1,"property":"number_of_store_visits"}}},"source":{"banner":"Order paid - 2 points for each store visit."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid- points proportional to numerical order metadata property "}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_ITEMS_AMOUNT","order_items":{"amount":{"every":2,"points":1,"object":"product","id":"prod_0bae32322150fd0546"}}},"source":{"banner":"Order paid - 2 points for 1 dollar spent on items excluding discounts."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid- points proportional to order items amount"}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_ITEMS_SUBTOTAL_AMOUNT","order_items":{"subtotal_amount":{"every":2,"points":1,"object":"products_collection","id":"pc_75U0dHlr7u75BJodrW1AE3t6"}}},"source":{"banner":"Order paid - 2 points for every dollar spent on the product collection."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid- points proportional to order items subtotal amount"}},{"event":"order.paid","validation_rule_id":null,"loyalty":{"type":"PROPORTIONAL","calculation_type":"ORDER_ITEMS_QUANTITY","order_items":{"quantity":{"every":1,"points":1,"object":"sku","id":"sku_0b7d7dfb090be5c619"}}},"source":{"banner":"Order paid - 1 point for every brand phone in your cart."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid - points proportional to quantity of items in a cart of a product varient."}},{"event":"order.paid","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"PROPORTIONAL","calculation_type":"CUSTOMER_METADATA","customer":{"metadata":{"every":1,"points":1,"property":"customer_life_time_value"}}},"source":{"banner":"Order paid 1 point for 1 month of being a customer with us."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid - points proportional to customer metadata property"}},{"event":"customer.segment.entered","segment":{"id":"seg_OlE7DmfzMI5pHyD5VAv512r1"},"validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"PROPORTIONAL","calculation_type":"CUSTOMER_METADATA","customer":{"metadata":{"every":1,"points":1,"property":"customer_life_time_value"}}},"source":{"banner":"Customer entered birthday segment - 1 point for each month of being a customer with us."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Entered segment - points proportional to customer metadata property"}},{"event":"customer.segment.entered","segment":{"id":"seg_OlE7DmfzMI5pHyD5VAv512r1"},"validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"FIXED","points":"5"},"source":{"banner":"Customer entered birthday segment - 5 points"},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Entered segment - fixed points"}},{"event":"page_view","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"points":3,"type":"FIXED"},"custom_event":{"schema_id":"ms_gn4Qe4xsFPf7orCArCiNVY13"},"source":{"banner":"See page - 3 points"},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Custom Event - fixed points for viewing a page"}},{"event":"page_view","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"PROPORTIONAL","calculation_type":"CUSTOM_EVENT_METADATA","custom_event":{"metadata":{"every":1,"points":2,"property":"volume_number"}}},"custom_event":{"schema_id":"ms_gn4Qe4xsFPf7orCArCiNVY13"},"source":{"banner":"See page X - get 2 points multiplied by the page number"},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Custom Event - proportional points for viewing a page based on custom event metadata"}},{"event":"page_view","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"PROPORTIONAL","calculation_type":"CUSTOMER_METADATA","customer":{"metadata":{"every":1,"points":2,"property":"customer_life_time_value"}}},"custom_event":{"schema_id":"ms_gn4Qe4xsFPf7orCArCiNVY13"},"source":{"banner":"Get 2 points for every month you're a customer for viewing a page"},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Custom Event - proportional points for viewing a page based on customer metadata"}},{"event":"customer.loyalty.tier.prolonged","validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"PROPORTIONAL","calculation_type":"CUSTOMER_METADATA","customer":{"metadata":{"every":1,"points":2,"property":"customer_life_time_value"}}},"loyalty_tier":{"id":"ltr_pudTGWasuIqxdiDM0go31OV1"},"source":{"banner":"Get 2 points for every month you're a customer when your loyalty tier is prolonged."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Custom Event - proportional points for extending a loyalty tier based on customer metadata."}}]; // \OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItem[] | Customize the request body based on the type of earning rules you would like to create. The request body is an array of objects. The required minimum properties to include in the payload for each object are event and loyalty. Additionally, if you choose to add a validity_timeframe, you must include a start_date. Furthermore, an earning rule event type:   - customer.segment.entered requires a segment object - a custom event requires a custom_event object - a customer.loyalty.tier.joined, customer.loyalty.tier.left, customer.loyalty.tier.upgraded, customer.loyalty.tier.downgraded, customer.loyalty.tier.prolonged requires a loyalty_tier object

try {
    $result = $apiInstance->createEarningRule($campaign_id, $loyalties_earning_rules_create_request_body_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->createEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **loyalties_earning_rules_create_request_body_item** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItem[]**](../Model/LoyaltiesEarningRulesCreateRequestBodyItem.md)| Customize the request body based on the type of earning rules you would like to create. The request body is an array of objects. The required minimum properties to include in the payload for each object are event and loyalty. Additionally, if you choose to add a validity_timeframe, you must include a start_date. Furthermore, an earning rule event type:   - customer.segment.entered requires a segment object - a custom event requires a custom_event object - a customer.loyalty.tier.joined, customer.loyalty.tier.left, customer.loyalty.tier.upgraded, customer.loyalty.tier.downgraded, customer.loyalty.tier.prolonged requires a loyalty_tier object | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateResponseBody[]**](../Model/LoyaltiesEarningRulesCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInBulkLoyaltyTiers()`

```php
createInBulkLoyaltyTiers($campaign_id, $loyalties_tiers_create_in_bulk_request_body_item): \OpenAPI\Client\Model\LoyaltyTier[]
```

Create loyalty tiers

Creates loyalty tiers for desired campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique loyalty campaign ID or name.
$loyalties_tiers_create_in_bulk_request_body_item = array(new \OpenAPI\Client\Model\LoyaltiesTiersCreateInBulkRequestBodyItem()); // \OpenAPI\Client\Model\LoyaltiesTiersCreateInBulkRequestBodyItem[] | Provide tier definitions you want to add to existing loyalty campaign.

try {
    $result = $apiInstance->createInBulkLoyaltyTiers($campaign_id, $loyalties_tiers_create_in_bulk_request_body_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->createInBulkLoyaltyTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique loyalty campaign ID or name. | |
| **loyalties_tiers_create_in_bulk_request_body_item** | [**\OpenAPI\Client\Model\LoyaltiesTiersCreateInBulkRequestBodyItem[]**](../Model/LoyaltiesTiersCreateInBulkRequestBodyItem.md)| Provide tier definitions you want to add to existing loyalty campaign. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltyTier[]**](../Model/LoyaltyTier.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLoyaltyProgram()`

```php
createLoyaltyProgram($loyalties_create_campaign_request_body): \OpenAPI\Client\Model\LoyaltiesCreateCampaignResponseBody
```

Create Loyalty Campaign

Creates a batch of loyalty cards aggregated in a single loyalty campaign. It also allows you to define a custom codes pattern.    📘 Global uniqueness  All codes are unique across the whole project. Voucherify wont allow to generate the same codes in any of your campaigns.  🚧 Asyncronous action!  This is an asynchronous action, you cant read or modify a newly created campaign until the code generation is completed. See creation_status field in the loyalty campaign object description.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyalties_create_campaign_request_body = {"name":"Loyalty Program 4","description":"This is a campaign description.","auto_join":true,"join_once":true,"use_voucher_metadata_schema":true,"start_date":"2016-10-26T00:00:00Z","expiration_date":"2024-10-26T00:00:00Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"activity_duration_after_publishing":"P24D","category_id":"cat_0b6152ce12414820dc","vouchers_count":2,"voucher":{"type":"LOYALTY_CARD","loyalty_card":{"points":0,"expiration_rules":{"period_type":"MONTH","period_value":3,"rounding_type":"END_OF_QUARTER"}},"redemption":{"quantity":2},"code_config":{"pattern":"L-CARD-#######"}},"metadata":{"test":true},"type":"STATIC","loyalty_tiers_expiration":{"qualification_type":"BALANCE","start_date":{"type":"IMMEDIATE"},"expiration_date":{"type":"CUSTOM","extend":"P3M","rounding":{"type":"MONTH","strategy":"END"}}}}; // \OpenAPI\Client\Model\LoyaltiesCreateCampaignRequestBody | Specify the loyalty campaign details.

try {
    $result = $apiInstance->createLoyaltyProgram($loyalties_create_campaign_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->createLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyalties_create_campaign_request_body** | [**\OpenAPI\Client\Model\LoyaltiesCreateCampaignRequestBody**](../Model/LoyaltiesCreateCampaignRequestBody.md)| Specify the loyalty campaign details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesCreateCampaignResponseBody**](../Model/LoyaltiesCreateCampaignResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPointsExpirationExport()`

```php
createPointsExpirationExport($campaign_id, $loyalties_points_expiration_export_create_request_body): \OpenAPI\Client\Model\LoyaltiesPointsExpirationExportCreateResponseBody
```

Create Points Expiration Export

Schedule the generation of a points expiration CSV file for a particular campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name.
$loyalties_points_expiration_export_create_request_body = {"parameters":{"fields":["id","campaign_id","voucher_id","status","expires_at","points"],"order":"-expires_at","filters":{"junction":"and","voucher_id":{"conditions":{"$in":["v_0aMj6Mdp0i3zuXrd9NnBKboc7746mlgF","v_YLn0WVWXSXbUfDvxgrgUbtfJ3SQIY655"]}}}}}; // \OpenAPI\Client\Model\LoyaltiesPointsExpirationExportCreateRequestBody | Specify the data filters, types of data to return and order in which the results should be returned.

try {
    $result = $apiInstance->createPointsExpirationExport($campaign_id, $loyalties_points_expiration_export_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->createPointsExpirationExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name. | |
| **loyalties_points_expiration_export_create_request_body** | [**\OpenAPI\Client\Model\LoyaltiesPointsExpirationExportCreateRequestBody**](../Model/LoyaltiesPointsExpirationExportCreateRequestBody.md)| Specify the data filters, types of data to return and order in which the results should be returned. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesPointsExpirationExportCreateResponseBody**](../Model/LoyaltiesPointsExpirationExportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRewardAssignment1()`

```php
createRewardAssignment1($campaign_id, $loyalties_rewards_create_assignment_item_request_body): \OpenAPI\Client\Model\LoyaltiesRewardsCreateAssignmentResponseBody
```

Create Reward Assignment

Add rewards to a loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$loyalties_rewards_create_assignment_item_request_body = [{"reward":"rew_wg2pvCr5LDhCq4uVQZ9LhuZm","parameters":{"loyalty":{"points":2}}},{"reward":"rew_z35ffKoH0tCcck8EL56p6SIs","parameters":{"loyalty":{"points":2}}}]; // \OpenAPI\Client\Model\LoyaltiesRewardsCreateAssignmentItemRequestBody[] | Define the cost of the rewards in loyalty points.

try {
    $result = $apiInstance->createRewardAssignment1($campaign_id, $loyalties_rewards_create_assignment_item_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->createRewardAssignment1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **loyalties_rewards_create_assignment_item_request_body** | [**\OpenAPI\Client\Model\LoyaltiesRewardsCreateAssignmentItemRequestBody[]**](../Model/LoyaltiesRewardsCreateAssignmentItemRequestBody.md)| Define the cost of the rewards in loyalty points. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardsCreateAssignmentResponseBody**](../Model/LoyaltiesRewardsCreateAssignmentResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEarningRule()`

```php
deleteEarningRule($campaign_id, $earning_rule_id)
```

Delete Earning Rule

This method deletes an earning rule for a specific loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$earning_rule_id = 'earning_rule_id_example'; // string | A unique earning rule ID.

try {
    $apiInstance->deleteEarningRule($campaign_id, $earning_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->deleteEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **earning_rule_id** | **string**| A unique earning rule ID. | |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLoyaltyProgram()`

```php
deleteLoyaltyProgram($campaign_id, $force): \OpenAPI\Client\Model\LoyaltiesDeleteResponseBody
```

Delete Loyalty Campaign

Deletes a loyalty campaign and all related loyalty cards. This action cannot be undone. Also, it immediately removes any redemptions on loyalty cards. If the force parameter is set to false or not set at all, the loyalty campaign and all related loyalty cards will be moved to the bin.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$force = True; // bool | If this flag is set to true, the campaign and related vouchers will be removed permanently. If it is set to false or not set at all, the loyalty campaign and all related loyalty cards will be moved to the bin. Going forward, the user will be able to create the next campaign with the same name.

try {
    $result = $apiInstance->deleteLoyaltyProgram($campaign_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->deleteLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **force** | **bool**| If this flag is set to true, the campaign and related vouchers will be removed permanently. If it is set to false or not set at all, the loyalty campaign and all related loyalty cards will be moved to the bin. Going forward, the user will be able to create the next campaign with the same name. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesDeleteResponseBody**](../Model/LoyaltiesDeleteResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRewardAssignment1()`

```php
deleteRewardAssignment1($campaign_id, $assignment_id)
```

Delete Reward Assignment

This method deletes a reward assignment for a particular loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$assignment_id = 'assignment_id_example'; // string | A unique reward assignment ID.

try {
    $apiInstance->deleteRewardAssignment1($campaign_id, $assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->deleteRewardAssignment1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **assignment_id** | **string**| A unique reward assignment ID. | |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableEarningRule()`

```php
disableEarningRule($campaign_id, $earning_rule_id): \OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBody
```

Disable Earning Rule

Disable an earning rule.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name.
$earning_rule_id = 'earning_rule_id_example'; // string | Unique earning rule ID.

try {
    $result = $apiInstance->disableEarningRule($campaign_id, $earning_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->disableEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name. | |
| **earning_rule_id** | **string**| Unique earning rule ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBody**](../Model/LoyaltiesEarningRulesDisableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableEarningRule()`

```php
enableEarningRule($campaign_id, $earning_rule_id): \OpenAPI\Client\Model\LoyaltiesEarningRulesEnableResponseBody
```

Enable Earning Rule

Enable an earning rule.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name.
$earning_rule_id = 'earning_rule_id_example'; // string | Unique earning rule ID.

try {
    $result = $apiInstance->enableEarningRule($campaign_id, $earning_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->enableEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name. | |
| **earning_rule_id** | **string**| Unique earning rule ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesEnableResponseBody**](../Model/LoyaltiesEarningRulesEnableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportLoyaltyCardTransactions()`

```php
exportLoyaltyCardTransactions($member_id, $loyalties_members_transactions_export_create_request_body): \OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateResponseBody
```

Export Loyalty Card Transactions

Export transactions that are associated with point movements on a loyalty card.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | A unique code identifying the loyalty card that you are looking to export transaction data for.
$loyalties_members_transactions_export_create_request_body = {"parameters":{"order":"-created_at","fields":["id","type","source_id","reason","balance","amount","created_at","voucher_id","campaign_id","details","related_transaction_id"]}}; // \OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateRequestBody | Specify the parameters and filters for the transaction export.

try {
    $result = $apiInstance->exportLoyaltyCardTransactions($member_id, $loyalties_members_transactions_export_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->exportLoyaltyCardTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| A unique code identifying the loyalty card that you are looking to export transaction data for. | |
| **loyalties_members_transactions_export_create_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateRequestBody**](../Model/LoyaltiesMembersTransactionsExportCreateRequestBody.md)| Specify the parameters and filters for the transaction export. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateResponseBody**](../Model/LoyaltiesMembersTransactionsExportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportLoyaltyCardTransactions1()`

```php
exportLoyaltyCardTransactions1($campaign_id, $member_id, $loyalties_members_transactions_export_create_request_body): \OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateResponseBody
```

Export Loyalty Card Transactions

Export transactions that are associated with point movements on a loyalty card.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique identifier of the loyalty campaign containing the voucher whose transactions you would like to export.
$member_id = 'member_id_example'; // string | A unique code identifying the loyalty card that you are looking to export transaction data for.
$loyalties_members_transactions_export_create_request_body = {"parameters":{"order":"-created_at","fields":["id","type","source_id","reason","balance","amount","created_at","voucher_id","campaign_id","details","related_transaction_id"]}}; // \OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateRequestBody | Specify the parameters and filters for the transaction export.

try {
    $result = $apiInstance->exportLoyaltyCardTransactions1($campaign_id, $member_id, $loyalties_members_transactions_export_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->exportLoyaltyCardTransactions1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| A unique identifier of the loyalty campaign containing the voucher whose transactions you would like to export. | |
| **member_id** | **string**| A unique code identifying the loyalty card that you are looking to export transaction data for. | |
| **loyalties_members_transactions_export_create_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateRequestBody**](../Model/LoyaltiesMembersTransactionsExportCreateRequestBody.md)| Specify the parameters and filters for the transaction export. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsExportCreateResponseBody**](../Model/LoyaltiesMembersTransactionsExportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEarningRule()`

```php
getEarningRule($campaign_id, $earning_rule_id): \OpenAPI\Client\Model\LoyaltiesEarningRulesGetResponseBody
```

Get Earning Rule

Retrieves an earning rule assigned to a campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$earning_rule_id = 'earning_rule_id_example'; // string | A unique earning rule ID.

try {
    $result = $apiInstance->getEarningRule($campaign_id, $earning_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **earning_rule_id** | **string**| A unique earning rule ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesGetResponseBody**](../Model/LoyaltiesEarningRulesGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoyaltyProgram()`

```php
getLoyaltyProgram($campaign_id): \OpenAPI\Client\Model\LoyaltiesGetCampaignResponseBody
```

Get Loyalty Campaign

Retrieve a specific loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.

try {
    $result = $apiInstance->getLoyaltyProgram($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesGetCampaignResponseBody**](../Model/LoyaltiesGetCampaignResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoyaltyTier()`

```php
getLoyaltyTier($campaign_id, $loyalty_tier_id): \OpenAPI\Client\Model\LoyaltiesTiersGetResponseBody
```

Get Loyalty Tier

Retrieve a loyalty tier from a loyalty campaign by the loyalty tier ID.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique loyalty campaign ID or name.
$loyalty_tier_id = 'loyalty_tier_id_example'; // string | Unique loyalty tier ID.

try {
    $result = $apiInstance->getLoyaltyTier($campaign_id, $loyalty_tier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getLoyaltyTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique loyalty campaign ID or name. | |
| **loyalty_tier_id** | **string**| Unique loyalty tier ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesTiersGetResponseBody**](../Model/LoyaltiesTiersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMember()`

```php
getMember($member_id): \OpenAPI\Client\Model\LoyaltiesMembersGetResponseBody
```

Get Member

Retrieve loyalty card with the given member ID (i.e. voucher code).      📘 Alternative endpoint  This endpoint is an alternative to this endpoint. The URL was re-designed to allow you to retrieve loyalty card details without having to provide the campaignId as a path parameter.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card code assigned to a particular customer.

try {
    $result = $apiInstance->getMember($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card code assigned to a particular customer. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersGetResponseBody**](../Model/LoyaltiesMembersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMember1()`

```php
getMember1($campaign_id, $member_id): \OpenAPI\Client\Model\LoyaltiesMembersGetResponseBody
```

Get Member

Retrieves the loyalty card with the given member ID (i.e. voucher code).

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.
$member_id = 'member_id_example'; // string | Unique code that identifies the loyalty card.

try {
    $result = $apiInstance->getMember1($campaign_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getMember1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |
| **member_id** | **string**| Unique code that identifies the loyalty card. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersGetResponseBody**](../Model/LoyaltiesMembersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardAssignment1()`

```php
getRewardAssignment1($campaign_id, $assignment_id): \OpenAPI\Client\Model\LoyaltiesRewardAssignmentsGetResponseBody
```

Get Reward Assignment

Retrieve specific reward assignment.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$assignment_id = 'assignment_id_example'; // string | Unique reward assignment ID.

try {
    $result = $apiInstance->getRewardAssignment1($campaign_id, $assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getRewardAssignment1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **assignment_id** | **string**| Unique reward assignment ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardAssignmentsGetResponseBody**](../Model/LoyaltiesRewardAssignmentsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardAssignment2()`

```php
getRewardAssignment2($campaign_id, $assignment_id): \OpenAPI\Client\Model\LoyaltiesRewardsGetResponseBody
```

Get Reward Assignment

Retrieve specific reward assignment.  📘 Alternative endpoint  This endpoint is an alternative to this endpoint.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$assignment_id = 'assignment_id_example'; // string | A unique reward assignment ID.

try {
    $result = $apiInstance->getRewardAssignment2($campaign_id, $assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getRewardAssignment2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **assignment_id** | **string**| A unique reward assignment ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardsGetResponseBody**](../Model/LoyaltiesRewardsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardDetails()`

```php
getRewardDetails($campaign_id, $assignment_id): \OpenAPI\Client\Model\LoyaltiesRewardAssignmentsRewardGetResponseBody
```

Get Reward Details

Get reward details in the context of a loyalty campaign and reward assignment ID.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$assignment_id = 'assignment_id_example'; // string | Unique reward assignment ID.

try {
    $result = $apiInstance->getRewardDetails($campaign_id, $assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->getRewardDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **assignment_id** | **string**| Unique reward assignment ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardAssignmentsRewardGetResponseBody**](../Model/LoyaltiesRewardAssignmentsRewardGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEarningRules()`

```php
listEarningRules($campaign_id, $limit, $page, $order): \OpenAPI\Client\Model\LoyaltiesEarningRulesListResponseBody
```

List Earning Rules

Returns a list of all earning rules within a given campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListEarningRules(); // ParameterOrderListEarningRules | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listEarningRules($campaign_id, $limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listEarningRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListEarningRules**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesListResponseBody**](../Model/LoyaltiesEarningRulesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyCardTransactions()`

```php
listLoyaltyCardTransactions($member_id, $limit): \OpenAPI\Client\Model\LoyaltiesMembersTransactionsListResponseBody
```

List Loyalty Card Transactions

Retrieve transaction data related to point movements for a specific loyalty card.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | A unique code identifying the loyalty card that you are looking to retrieve transaction data for.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.

try {
    $result = $apiInstance->listLoyaltyCardTransactions($member_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyCardTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| A unique code identifying the loyalty card that you are looking to retrieve transaction data for. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsListResponseBody**](../Model/LoyaltiesMembersTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyCardTransactions1()`

```php
listLoyaltyCardTransactions1($campaign_id, $member_id, $limit, $page): \OpenAPI\Client\Model\LoyaltiesMembersTransactionsListResponseBody
```

List Loyalty Card Transactions

Retrieve transaction data related to point movements for a specific loyalty card.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique identifier of the loyalty campaign containing the voucher whose transactions you would like to return.
$member_id = 'member_id_example'; // string | A unique code identifying the loyalty card that you are looking to retrieve transaction data for.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.

try {
    $result = $apiInstance->listLoyaltyCardTransactions1($campaign_id, $member_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyCardTransactions1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| A unique identifier of the loyalty campaign containing the voucher whose transactions you would like to return. | |
| **member_id** | **string**| A unique code identifying the loyalty card that you are looking to retrieve transaction data for. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTransactionsListResponseBody**](../Model/LoyaltiesMembersTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyPrograms()`

```php
listLoyaltyPrograms($limit, $page, $order): \OpenAPI\Client\Model\LoyaltiesListCampaignsResponseBody
```

List Loyalty Campaigns

Returns a list of your loyalty campaigns.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListCampaigns(); // ParameterOrderListCampaigns | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listLoyaltyPrograms($limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListCampaigns**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesListCampaignsResponseBody**](../Model/LoyaltiesListCampaignsResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyTierEarningRules()`

```php
listLoyaltyTierEarningRules($campaign_id, $loyalty_tier_id, $limit, $page): \OpenAPI\Client\Model\LoyaltiesTiersEarningRulesListResponseBody
```

List Loyalty Tier Earning Rules

Retrieve available earning rules for a given tier and the calculation method for earning points.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name.
$loyalty_tier_id = 'loyalty_tier_id_example'; // string | Unique loyalty tier ID.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.

try {
    $result = $apiInstance->listLoyaltyTierEarningRules($campaign_id, $loyalty_tier_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyTierEarningRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name. | |
| **loyalty_tier_id** | **string**| Unique loyalty tier ID. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesTiersEarningRulesListResponseBody**](../Model/LoyaltiesTiersEarningRulesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyTierRewards()`

```php
listLoyaltyTierRewards($campaign_id, $loyalty_tier_id): \OpenAPI\Client\Model\LoyaltiesTiersRewardsListResponseBody
```

List Loyalty Tier Rewards

Get available rewards for a given tier.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name.
$loyalty_tier_id = 'loyalty_tier_id_example'; // string | Unique loyalty tier ID.

try {
    $result = $apiInstance->listLoyaltyTierRewards($campaign_id, $loyalty_tier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyTierRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name. | |
| **loyalty_tier_id** | **string**| Unique loyalty tier ID. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesTiersRewardsListResponseBody**](../Model/LoyaltiesTiersRewardsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLoyaltyTiers()`

```php
listLoyaltyTiers($campaign_id, $limit, $order): \OpenAPI\Client\Model\LoyaltiesTiersListResponseBody
```

List Loyalty Tiers

Retrieve a list of loyalty tiers which were added to the loyalty program.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique loyalty campaign ID or name.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListLoyaltyTiers(); // ParameterOrderListLoyaltyTiers | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listLoyaltyTiers($campaign_id, $limit, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listLoyaltyTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique loyalty campaign ID or name. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListLoyaltyTiers**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesTiersListResponseBody**](../Model/LoyaltiesTiersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberActivity()`

```php
listMemberActivity($member_id, $limit, $order, $starting_after_id): \OpenAPI\Client\Model\LoyaltiesMemberActivityListResponseBody
```

List Member Activity

📘 Alternative endpoint  This endpoint is an alternative to this endpoint. The URL was re-designed to allow you to get member activities without having to provide the campaignId as a path parameter. Retrieves the list of activities for the given member ID related to a voucher and customer who is the holder of the voucher.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card assigned to a particular customer.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderCreatedAt(); // ParameterOrderCreatedAt | Apply this filter to order the events according the date and time when it was created. The dash - preceding a sorting option means sorting in a descending order.
$starting_after_id = 'starting_after_id_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.

try {
    $result = $apiInstance->listMemberActivity($member_id, $limit, $order, $starting_after_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listMemberActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card assigned to a particular customer. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderCreatedAt**](../Model/.md)| Apply this filter to order the events according the date and time when it was created. The dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **starting_after_id** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMemberActivityListResponseBody**](../Model/LoyaltiesMemberActivityListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberActivity1()`

```php
listMemberActivity1($campaign_id, $member_id, $limit, $order, $starting_after_id): \OpenAPI\Client\Model\LoyaltiesMemberActivityListResponseBody
```

List Member Activity

Retrieves the list of activities for the given member ID related to a voucher and customer who is the holder of the voucher.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.
$member_id = 'member_id_example'; // string | A code that identifies the loyalty card.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderCreatedAt(); // ParameterOrderCreatedAt | Apply this filter to order the events according the date and time when it was created. The dash - preceding a sorting option means sorting in a descending order.
$starting_after_id = 'starting_after_id_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.

try {
    $result = $apiInstance->listMemberActivity1($campaign_id, $member_id, $limit, $order, $starting_after_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listMemberActivity1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |
| **member_id** | **string**| A code that identifies the loyalty card. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderCreatedAt**](../Model/.md)| Apply this filter to order the events according the date and time when it was created. The dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **starting_after_id** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMemberActivityListResponseBody**](../Model/LoyaltiesMemberActivityListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberLoyaltyTier()`

```php
listMemberLoyaltyTier($member_id): \OpenAPI\Client\Model\LoyaltiesMembersTiersListResponseBody
```

List Member's Loyalty Tiers

Retrieve member tiers using the loyalty card ID.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card assigned to a particular customer.

try {
    $result = $apiInstance->listMemberLoyaltyTier($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listMemberLoyaltyTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card assigned to a particular customer. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTiersListResponseBody**](../Model/LoyaltiesMembersTiersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberRewards()`

```php
listMemberRewards($member_id, $affordable_only): \OpenAPI\Client\Model\LoyaltiesMembersRewardsListResponseBody
```

List Member Rewards

Retrieves the list of rewards that the given customer (identified by member_id, which is a loyalty card assigned to a particular customer) **can get in exchange for loyalty points**.   You can use the affordable_only parameter to limit the results to rewards that the customer can actually afford (only rewards whose price in points is not higher than the loyalty points balance on a loyalty card).   Please note that rewards that are disabled (i.e. set to Not Available in the Dashboard) for a given loyalty tier reward mapping will not be returned in this endpoint.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card assigned to a particular customer.
$affordable_only = True; // bool | Limit the results to rewards that the customer can actually afford (only rewards whose price in points is not higher than the loyalty points balance on a loyalty card). Set this flag to true to return rewards which the customer can actually afford.

try {
    $result = $apiInstance->listMemberRewards($member_id, $affordable_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listMemberRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card assigned to a particular customer. | |
| **affordable_only** | **bool**| Limit the results to rewards that the customer can actually afford (only rewards whose price in points is not higher than the loyalty points balance on a loyalty card). Set this flag to true to return rewards which the customer can actually afford. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersRewardsListResponseBody**](../Model/LoyaltiesMembersRewardsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMembers()`

```php
listMembers($campaign_id, $limit, $page, $customer, $created_at, $updated_at, $order, $code, $ids): \OpenAPI\Client\Model\LoyaltiesListMembersResponseBody
```

List Members

Returns a list of your loyalty cards. The loyalty cards are sorted by creation date, with the most recent loyalty cards appearing first.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID of the loyalty program.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$customer = 'customer_example'; // string | A tracking identifier of a customer who is the holder of the vouchers. It can be an id generated by Voucherify or the source_id. Remember to use the proper URL escape codes if the source_id contains special characters.
$created_at = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z
$updated_at = new \OpenAPI\Client\Model\ParameterUpdatedBeforeAfter(); // ParameterUpdatedBeforeAfter | A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z
$order = new \OpenAPI\Client\Model\ParameterOrderVouchers(); // ParameterOrderVouchers | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$code = 'code_example'; // string
$ids = array('ids_example'); // string[]

try {
    $result = $apiInstance->listMembers($campaign_id, $limit, $page, $customer, $created_at, $updated_at, $order, $code, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID of the loyalty program. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **customer** | **string**| A tracking identifier of a customer who is the holder of the vouchers. It can be an id generated by Voucherify or the source_id. Remember to use the proper URL escape codes if the source_id contains special characters. | [optional] |
| **created_at** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **updated_at** | [**ParameterUpdatedBeforeAfter**](../Model/.md)| A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **order** | [**ParameterOrderVouchers**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **code** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesListMembersResponseBody**](../Model/LoyaltiesListMembersResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPointsExpiration()`

```php
listPointsExpiration($campaign_id, $member_id, $limit, $page): \OpenAPI\Client\Model\LoyaltiesMembersPointsExpirationListResponseBody
```

Get Points Expiration

Retrieve loyalty point expiration buckets for a given loyalty card. Expired point buckets are not returned in this endpoint. You can use the Exports API to retrieve a list of both ACTIVE and EXPIRED point buckets.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$member_id = 'member_id_example'; // string | Loyalty card code.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.

try {
    $result = $apiInstance->listPointsExpiration($campaign_id, $member_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listPointsExpiration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **member_id** | **string**| Loyalty card code. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersPointsExpirationListResponseBody**](../Model/LoyaltiesMembersPointsExpirationListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRewardAssignments1()`

```php
listRewardAssignments1($campaign_id, $limit, $page, $assignment_id): \OpenAPI\Client\Model\LoyaltiesRewardAssignmentsListResponseBody
```

List Reward Assignments

Returns reward assignments from a given loyalty campaign.  📘 Alternative endpoint  This endpoint is an alternative to this endpoint. The URL was re-designed to be more contextual to the type of data returned in the response.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$assignment_id = 'assignment_id_example'; // string | A unique reward assignment ID.

try {
    $result = $apiInstance->listRewardAssignments1($campaign_id, $limit, $page, $assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listRewardAssignments1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **assignment_id** | **string**| A unique reward assignment ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardAssignmentsListResponseBody**](../Model/LoyaltiesRewardAssignmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRewardAssignments2()`

```php
listRewardAssignments2($campaign_id, $limit, $page, $assignment_id): \OpenAPI\Client\Model\LoyaltiesRewardsListAssignmentsResponseBody
```

List Reward Assignments

Returns active rewards from a given loyalty campaign.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$assignment_id = 'assignment_id_example'; // string | A unique reward assignment ID.

try {
    $result = $apiInstance->listRewardAssignments2($campaign_id, $limit, $page, $assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->listRewardAssignments2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **assignment_id** | **string**| A unique reward assignment ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardsListAssignmentsResponseBody**](../Model/LoyaltiesRewardsListAssignmentsResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemReward()`

```php
redeemReward($member_id, $loyalties_members_redemption_redeem_request_body): \OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemResponseBody
```

Redeem Reward

📘 Alternative endpoint  This endpoint is an alternative to this endpoint. The URL was re-designed to allow you to redeem a reward without having to provide the campaignId as a path parameter.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card assigned to a particular customer.
$loyalties_members_redemption_redeem_request_body = {"reward":{"id":"rew_INt3fGH3n7xIr3ZQcq4kkUZ1","points":100},"order":{"items":[{"product_id":"prod_0c5d6689b39320059b","quantity":"1"},{"product_id":"prod_0b2c36568000039138","quantity":"2"}]}}; // \OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemRequestBody | Specify the reward to be redeemed. In case of a pay with points reward, specify the order and the number of points to be applied to the order. Please note that if you do not specify the amount of points, the application will default to applying the number of points to pay for the remainder of the order. If the limit of available points on the card is reached, then only the available points on the card will be applied to the order.

try {
    $result = $apiInstance->redeemReward($member_id, $loyalties_members_redemption_redeem_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->redeemReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card assigned to a particular customer. | |
| **loyalties_members_redemption_redeem_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemRequestBody**](../Model/LoyaltiesMembersRedemptionRedeemRequestBody.md)| Specify the reward to be redeemed. In case of a pay with points reward, specify the order and the number of points to be applied to the order. Please note that if you do not specify the amount of points, the application will default to applying the number of points to pay for the remainder of the order. If the limit of available points on the card is reached, then only the available points on the card will be applied to the order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemResponseBody**](../Model/LoyaltiesMembersRedemptionRedeemResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemReward1()`

```php
redeemReward1($campaign_id, $member_id, $loyalties_members_redemption_redeem_request_body): \OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemResponseBody
```

Redeem Reward

Exchange points from a loyalty card for a specified reward. This API method returns an assigned award in the response. It means that if a requesting customer gets a coupon code with a discount for the next order, that discount code will be visible in response as part of the reward object definition.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.
$member_id = 'member_id_example'; // string | A code that identifies the loyalty card.
$loyalties_members_redemption_redeem_request_body = {"reward":{"id":"rew_INt3fGH3n7xIr3ZQcq4kkUZ1","points":100},"order":{"items":[{"product_id":"prod_0c5d6689b39320059b","quantity":"1"},{"product_id":"prod_0b2c36568000039138","quantity":"2"}]}}; // \OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemRequestBody | Specify the reward to be redeemed. In case of a pay with points reward, specify the order and the number of points to be applied to the order. Please note that if you do not specify the amount of points, the application will default to applying the number of points to pay for the remainder of the order. If the limit of available points on the card is reached, then only the available points on the card will be applied to the order.

try {
    $result = $apiInstance->redeemReward1($campaign_id, $member_id, $loyalties_members_redemption_redeem_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->redeemReward1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |
| **member_id** | **string**| A code that identifies the loyalty card. | |
| **loyalties_members_redemption_redeem_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemRequestBody**](../Model/LoyaltiesMembersRedemptionRedeemRequestBody.md)| Specify the reward to be redeemed. In case of a pay with points reward, specify the order and the number of points to be applied to the order. Please note that if you do not specify the amount of points, the application will default to applying the number of points to pay for the remainder of the order. If the limit of available points on the card is reached, then only the available points on the card will be applied to the order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemResponseBody**](../Model/LoyaltiesMembersRedemptionRedeemResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferPoints()`

```php
transferPoints($campaign_id, $member_id, $loyalties_transfer_points): \OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBody
```

Transfer Loyalty Points

Transfer points between different loyalty cards. You need to provide the campaign ID and the loyalty card ID you want the points to be transferred to as path parameters in the URL. In the request body, you provide the loyalty cards you want the points to be transferred from and the number of points to transfer from each card.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | A unique identifier of the loyalty campaign containing the voucher to which the loyalty points will be sent (destination).
$member_id = 'member_id_example'; // string | A unique code identifying the loyalty card to which the user wants to transfer loyalty points (destination).
$loyalties_transfer_points = [{"code":"0PmQ7JQI","points":1},{"code":"kCeufB8i","points":1}]; // \OpenAPI\Client\Model\LoyaltiesTransferPoints[] | Provide the loyalty cards you want the points to be transferred from and the number of points to transfer from each card.

try {
    $result = $apiInstance->transferPoints($campaign_id, $member_id, $loyalties_transfer_points);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->transferPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| A unique identifier of the loyalty campaign containing the voucher to which the loyalty points will be sent (destination). | |
| **member_id** | **string**| A unique code identifying the loyalty card to which the user wants to transfer loyalty points (destination). | |
| **loyalties_transfer_points** | [**\OpenAPI\Client\Model\LoyaltiesTransferPoints[]**](../Model/LoyaltiesTransferPoints.md)| Provide the loyalty cards you want the points to be transferred from and the number of points to transfer from each card. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBody**](../Model/LoyaltiesMembersTransfersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEarningRule()`

```php
updateEarningRule($campaign_id, $earning_rule_id, $loyalties_earning_rules_update_request_body): \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateResponseBody
```

Update Earning Rule

Update an earning rule definition.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$earning_rule_id = 'earning_rule_id_example'; // string | A unique earning rule ID.
$loyalties_earning_rules_update_request_body = {"validation_rule_id":"val_7SxpdhPeBngA","loyalty":{"type":"FIXED","points":"5"},"source":{"banner":"Order paid 5 points."},"active":true,"start_date":"2022-11-02T13:00:00.000Z","expiration_date":"2023-03-03T14:30:00.000Z","validity_timeframe":{"duration":"PT1H","interval":"P1D"},"validity_day_of_week":[0,1,2,3,4,5],"metadata":{"Type":"Order paid - fixed amount of points"}}; // \OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBody | Specify the parameters that you would like to update for the given earning rule.

try {
    $result = $apiInstance->updateEarningRule($campaign_id, $earning_rule_id, $loyalties_earning_rules_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->updateEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **earning_rule_id** | **string**| A unique earning rule ID. | |
| **loyalties_earning_rules_update_request_body** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateRequestBody**](../Model/LoyaltiesEarningRulesUpdateRequestBody.md)| Specify the parameters that you would like to update for the given earning rule. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesEarningRulesUpdateResponseBody**](../Model/LoyaltiesEarningRulesUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLoyaltyCardBalance()`

```php
updateLoyaltyCardBalance($member_id, $loyalties_members_balance_update_request_body): \OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBody
```

Add or Remove Loyalty Card Balance

This method gives adds or removes balance to an existing loyalty card. The removal of points will consume the points that expire the soonest.   >🚧 Async Action    This is an async action. If you want to perform several add or remove loyalty card balance actions in a short time and their order matters, set up sufficient time-out between the calls.  📘 Alternative endpoint  This endpoint is an alternative to this endpoint. The URL was re-designed to allow you to add or remove loyalty card balance without having to provide the campaignId as a path parameter.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 'member_id_example'; // string | Unique loyalty card assigned to a particular customer.
$loyalties_members_balance_update_request_body = {"points":-100}; // \OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateRequestBody | Specify the point adjustment along with the expiration mechanism.

try {
    $result = $apiInstance->updateLoyaltyCardBalance($member_id, $loyalties_members_balance_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->updateLoyaltyCardBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_id** | **string**| Unique loyalty card assigned to a particular customer. | |
| **loyalties_members_balance_update_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateRequestBody**](../Model/LoyaltiesMembersBalanceUpdateRequestBody.md)| Specify the point adjustment along with the expiration mechanism. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBody**](../Model/LoyaltiesMembersBalanceUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLoyaltyCardBalance1()`

```php
updateLoyaltyCardBalance1($campaign_id, $member_id, $loyalties_members_balance_update_request_body): \OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBody
```

Add or Remove Loyalty Card Balance

This method adds or removes balance to an existing loyalty card. The removal of points will consume the points that expire the soonest.   >🚧 Async Action    This is an async action. If you want to perform several add or remove loyalty card balance actions in a short time and their order matters, set up sufficient time-out between the calls.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Unique campaign ID.
$member_id = 'member_id_example'; // string | A code that identifies the loyalty card.
$loyalties_members_balance_update_request_body = {"points":100,"expiration_type":"CUSTOM_DATE","expiration_date":"2023-05-30"}; // \OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateRequestBody | Specify the point adjustment along with the expiration mechanism.

try {
    $result = $apiInstance->updateLoyaltyCardBalance1($campaign_id, $member_id, $loyalties_members_balance_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->updateLoyaltyCardBalance1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Unique campaign ID. | |
| **member_id** | **string**| A code that identifies the loyalty card. | |
| **loyalties_members_balance_update_request_body** | [**\OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateRequestBody**](../Model/LoyaltiesMembersBalanceUpdateRequestBody.md)| Specify the point adjustment along with the expiration mechanism. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesMembersBalanceUpdateResponseBody**](../Model/LoyaltiesMembersBalanceUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLoyaltyProgram()`

```php
updateLoyaltyProgram($campaign_id, $loyalties_update_campaign_request_body): \OpenAPI\Client\Model\LoyaltiesUpdateCampaignResponseBody
```

Update Loyalty Campaign

Updates a loyalty program.  Fields other than those specified in the allowed request body payload wont be modified (even if provided they are silently skipped). Any parameters not provided will be left unchanged.  This method will update the loyalty cards which have not been published or redeemed yet.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$loyalties_update_campaign_request_body = {"description":"This is a campaign description. Updated","auto_join":false,"join_once":false,"start_date":"2013-10-26T00:00:00Z","expiration_date":"2025-10-26T00:00:00Z","validity_timeframe":{"duration":"PT2H","interval":"P2D"},"validity_day_of_week":[0,1,2,3,4,5,6],"activity_duration_after_publishing":"P25D","category_id":"cat_0b6152ce12414820dd","loyalty_card":{"points":1,"expiration_rules":{"period_type":"MONTH","period_value":4,"rounding_type":"END_OF_YEAR"}},"metadata":{"test":false},"type":"AUTO_UPDATE","loyalty_tiers_expiration":{"qualification_type":"BALANCE","start_date":{"type":"IMMEDIATE"},"expiration_date":{"type":"CUSTOM","extend":"P4M","rounding":{"type":"CUSTOM","unit":"MONTH","value":1}}}}; // \OpenAPI\Client\Model\LoyaltiesUpdateCampaignRequestBody | Specify the new values for the parameters that you would like to update for the given loyalty campaign.

try {
    $result = $apiInstance->updateLoyaltyProgram($campaign_id, $loyalties_update_campaign_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->updateLoyaltyProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **loyalties_update_campaign_request_body** | [**\OpenAPI\Client\Model\LoyaltiesUpdateCampaignRequestBody**](../Model/LoyaltiesUpdateCampaignRequestBody.md)| Specify the new values for the parameters that you would like to update for the given loyalty campaign. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesUpdateCampaignResponseBody**](../Model/LoyaltiesUpdateCampaignResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRewardAssignment1()`

```php
updateRewardAssignment1($campaign_id, $assignment_id, $loyalties_rewards_update_assignment_request_body): \OpenAPI\Client\Model\LoyaltiesRewardsUpdateAssignmentResponseBody
```

Update Reward Assignment

Updates rewards parameters, i.e. the points cost for the specific reward.

### Example

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


$apiInstance = new OpenAPI\Client\Api\LoyaltiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign.
$assignment_id = 'assignment_id_example'; // string | A unique reward assignment ID.
$loyalties_rewards_update_assignment_request_body = {"parameters":{"loyalty":{"points":3}}}; // \OpenAPI\Client\Model\LoyaltiesRewardsUpdateAssignmentRequestBody | Update the points cost for the reward assignment.

try {
    $result = $apiInstance->updateRewardAssignment1($campaign_id, $assignment_id, $loyalties_rewards_update_assignment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoyaltiesApi->updateRewardAssignment1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the loyalty campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty%20Campaign. | |
| **assignment_id** | **string**| A unique reward assignment ID. | |
| **loyalties_rewards_update_assignment_request_body** | [**\OpenAPI\Client\Model\LoyaltiesRewardsUpdateAssignmentRequestBody**](../Model/LoyaltiesRewardsUpdateAssignmentRequestBody.md)| Update the points cost for the reward assignment. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesRewardsUpdateAssignmentResponseBody**](../Model/LoyaltiesRewardsUpdateAssignmentResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
