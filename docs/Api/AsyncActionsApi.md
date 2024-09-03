# OpenAPI\Client\AsyncActionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAsyncAction()**](AsyncActionsApi.md#getAsyncAction) | **GET** /v1/async-actions/{asyncActionId} | Get Async Action |
| [**listAsyncActions()**](AsyncActionsApi.md#listAsyncActions) | **GET** /v1/async-actions | List Async Actions |


## `getAsyncAction()`

```php
getAsyncAction($asyncActionId): \OpenAPI\Client\Model\AsyncActionGetResponseBody
```

Get Async Action

Check the result of a scheduled asynchronous operation.   The table below lists the possible types of async actions. The types are different for each endpoint generating the async action. If you would like to learn more about importing data into Voucherify, read more [here](https://support.voucherify.io/article/574-data-import).

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


$apiInstance = new OpenAPI\Client\Api\AsyncActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asyncActionId = 'asyncActionId_example'; // string | Unique ID of the asynchronous operation.

try {
    $result = $apiInstance->getAsyncAction($asyncActionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncActionsApi->getAsyncAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asyncActionId** | **string**| Unique ID of the asynchronous operation. | |

### Return type

[**\OpenAPI\Client\Model\AsyncActionGetResponseBody**](../Model/AsyncActionGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAsyncActions()`

```php
listAsyncActions($limit, $endDate): \OpenAPI\Client\Model\AsyncActionsListResponseBody
```

List Async Actions

Track asynchronous operations scheduled in your project.   The table below lists the possible types of async actions. The types are different for each endpoint generating the async action. If you would like to learn more about importing data into Voucherify, read more [here](https://support.voucherify.io/article/574-data-import).

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


$apiInstance = new OpenAPI\Client\Api\AsyncActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limit the number of asynchronous actions that the API returns in the response.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Limits results to actions scheduled before the end_date. The date format needs to be consistent with ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16).

try {
    $result = $apiInstance->listAsyncActions($limit, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncActionsApi->listAsyncActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limit the number of asynchronous actions that the API returns in the response. | [optional] |
| **endDate** | **\DateTime**| Limits results to actions scheduled before the end_date. The date format needs to be consistent with ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). | [optional] |

### Return type

[**\OpenAPI\Client\Model\AsyncActionsListResponseBody**](../Model/AsyncActionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
