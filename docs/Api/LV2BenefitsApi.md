# OpenAPI\Client\LV2BenefitsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBenefit()**](LV2BenefitsApi.md#getBenefit) | **GET** /v2/loyalties/benefits/{benefitId} | Get benefit |


## `getBenefit()`

```php
getBenefit($benefitId): \OpenAPI\Client\Model\V2LoyaltiesBenefitsGetResponseBody
```

Get benefit

Returns a single benefit by its ID.

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


$apiInstance = new OpenAPI\Client\Api\LV2BenefitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$benefitId = 'benefitId_example'; // string | Identifies the benefit. Format lben_[a-f0-9]+.

try {
    $result = $apiInstance->getBenefit($benefitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2BenefitsApi->getBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **benefitId** | **string**| Identifies the benefit. Format lben_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesBenefitsGetResponseBody**](../Model/V2LoyaltiesBenefitsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
