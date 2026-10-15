# OpenAPI\Client\LV2EarningRulesApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEarningRule()**](LV2EarningRulesApi.md#getEarningRule) | **GET** /v2/loyalties/earning-rules/{earningRuleId} | Get earning rule |


## `getEarningRule()`

```php
getEarningRule($earningRuleId): \OpenAPI\Client\Model\V2LoyaltiesEarningRulesGetResponseBody
```

Get earning rule

Returns a single earning rule by its ID.

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


$apiInstance = new OpenAPI\Client\Api\LV2EarningRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earningRuleId = 'earningRuleId_example'; // string | Identifies the earning rule. Format lern_[a-f0-9]+.

try {
    $result = $apiInstance->getEarningRule($earningRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2EarningRulesApi->getEarningRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **earningRuleId** | **string**| Identifies the earning rule. Format lern_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesEarningRulesGetResponseBody**](../Model/V2LoyaltiesEarningRulesGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
