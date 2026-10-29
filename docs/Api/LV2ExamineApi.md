# OpenAPI\Client\LV2ExamineApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**examineEarningRules()**](LV2ExamineApi.md#examineEarningRules) | **POST** /v2/loyalties/examine/earning-rules | Examine earning rules |
| [**examineRewards()**](LV2ExamineApi.md#examineRewards) | **POST** /v2/loyalties/examine/rewards | Examine rewards |


## `examineEarningRules()`

```php
examineEarningRules($loyaltiesExamineEarningRulesExamineRequestBody): \OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBody
```

Examine earning rules

Estimates earning opportunities for a customer without triggering any actual earning for loyalty v2 earning rules. The trigger selects whether all trigger events or one specific event is examined. When a specific event is selected, exactly one matching context object is required: customer_order_paid for customer.order.paid, customer_segment_entered for customer.segment.entered, and customer_custom_event for customer.custom_event. The other context objects must not be present. This endpoint can examine earning rules for all loyalty programs the customer belongs to by using customer_identification with customer_id or customer_source_id. To examine earning rules only for one program, use member_id in customer_identification, as member_id is loyalty program-specific. A customer who exists but has no active membership returns 200 with an empty memberships array.

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


$apiInstance = new OpenAPI\Client\Api\LV2ExamineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltiesExamineEarningRulesExamineRequestBody = {"trigger":{"type":"ALL"},"customer_identification":{"type":"member_id","member_id":"lmbr_128f962dbc8c4ba5dc"},"customer_order_paid":{"customer":{"metadata":{"tier":"gold"}},"member":{"metadata":{"channel":"mobile"}},"order":{"amount":10000,"metadata":{"source":"pos"}}},"customer_segment_entered":{"customer":{"metadata":{"is_premium":"true","loyalty_score":10}}},"customer_custom_event":{"type":"ALL","all":{"customer":{"metadata":{"plan":"pro"}},"custom_event":{"metadata":{"source":"mobile","score":40}}}}}; // \OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineRequestBody

try {
    $result = $apiInstance->examineEarningRules($loyaltiesExamineEarningRulesExamineRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ExamineApi->examineEarningRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltiesExamineEarningRulesExamineRequestBody** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineRequestBody**](../Model/LoyaltiesExamineEarningRulesExamineRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBody**](../Model/LoyaltiesExamineEarningRulesExamineResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `examineRewards()`

```php
examineRewards($loyaltiesExamineRewardsExamineRequestBody): \OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBody
```

Examine rewards

Evaluates rewards assigned to a customers active Loyalty v2 program memberships. Applies temporary customer and member metadata overrides without updating stored data. Returns reward availability by card, including points costs and applicable unavailability reasons. Omits a reward when it is inactive, out of stock, has no matching cost, or the member has no card for that cost. This endpoint can examine rewards for all loyalty programs the customer belongs to by using customer_identification with customer_id or customer_source_id. To examine rewards only for one program, use member_id in customer_identification, as member_id is loyalty program-specific. A customer who exists but has no active membership returns 200 with an empty memberships array.

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


$apiInstance = new OpenAPI\Client\Api\LV2ExamineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loyaltiesExamineRewardsExamineRequestBody = new \OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineRequestBody(); // \OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineRequestBody

try {
    $result = $apiInstance->examineRewards($loyaltiesExamineRewardsExamineRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ExamineApi->examineRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loyaltiesExamineRewardsExamineRequestBody** | [**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineRequestBody**](../Model/LoyaltiesExamineRewardsExamineRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBody**](../Model/LoyaltiesExamineRewardsExamineResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
