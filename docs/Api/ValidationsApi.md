# OpenAPI\Client\ValidationsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**validateStackedDiscounts()**](ValidationsApi.md#validateStackedDiscounts) | **POST** /v1/validations | Validate Stackable Discounts |


## `validateStackedDiscounts()`

```php
validateStackedDiscounts($validationsValidateRequestBody): \OpenAPI\Client\Model\ValidationsValidateResponseBody
```

Validate Stackable Discounts

Verify redeemables provided in the request. This method is designed for server side integration which means that it is accessible only through private keys. API keys with a Merchant role cant use this endpoint.

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


$apiInstance = new OpenAPI\Client\Api\ValidationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validationsValidateRequestBody = {"redeemables":[{"object":"voucher","id":"BLCKFRDY"}],"order":{"amount":5500}}; // \OpenAPI\Client\Model\ValidationsValidateRequestBody

try {
    $result = $apiInstance->validateStackedDiscounts($validationsValidateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationsApi->validateStackedDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validationsValidateRequestBody** | [**\OpenAPI\Client\Model\ValidationsValidateRequestBody**](../Model/ValidationsValidateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationsValidateResponseBody**](../Model/ValidationsValidateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
