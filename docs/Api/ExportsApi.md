# OpenAPI\Client\ExportsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExport()**](ExportsApi.md#createExport) | **POST** /v1/exports | Create Export |
| [**deleteExport()**](ExportsApi.md#deleteExport) | **DELETE** /v1/exports/{exportId} | Delete Export |
| [**downloadExport()**](ExportsApi.md#downloadExport) | **GET** /v1/exports/{export_Id} | Download Export |
| [**getExport()**](ExportsApi.md#getExport) | **GET** /v1/exports/{exportId} | Get Export |
| [**listExports()**](ExportsApi.md#listExports) | **GET** /v1/exports | List Exports |


## `createExport()`

```php
createExport($exportsCreateRequestBody): \OpenAPI\Client\Model\ExportsCreateResponseBody
```

Create Export

Create export object. The export can be any of the following types: voucher, redemption, publication, customer, order, points_expiration, or voucher_transactions.   # Defaults If you only specify the object type in the request body without specifying the fields, the API will return the following fields per export object:   # Fetching particular data sets Using the parameters body parameter, you can narrow down which fields to export and how to filter the results. The fields are an array of strings containing the data that you would like to export. These fields define the headers in the CSV file. The array can be a combination of any of the following available fields: # Orders     # Vouchers        # Publications   # Redemptions    # Customers       # Points Expirations    # Gift Card Transactions    # Loyalty Card Transactions

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exportsCreateRequestBody = new \OpenAPI\Client\Model\ExportsCreateRequestBody(); // \OpenAPI\Client\Model\ExportsCreateRequestBody | Specify the details of the export that you would like to create.

try {
    $result = $apiInstance->createExport($exportsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->createExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exportsCreateRequestBody** | [**\OpenAPI\Client\Model\ExportsCreateRequestBody**](../Model/ExportsCreateRequestBody.md)| Specify the details of the export that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExportsCreateResponseBody**](../Model/ExportsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExport()`

```php
deleteExport($exportId)
```

Delete Export

This method deletes a previously created export object.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exportId = 'exportId_example'; // string | Unique export object ID of previously created export. This object can be a: voucher, redemption, publication, customer, order, points_expiration, or voucher_transactions.

try {
    $apiInstance->deleteExport($exportId);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->deleteExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exportId** | **string**| Unique export object ID of previously created export. This object can be a: voucher, redemption, publication, customer, order, points_expiration, or voucher_transactions. | |

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

## `downloadExport()`

```php
downloadExport($exportId, $token): string
```

Download Export

Download the contents of the exported CSV file.   📘 Important notes  **Base URL:**   - https://download.voucherify.io (Europe)   - https://us1.download.voucherify.io (US)   - https://as1.download.voucherify.io (Asia)   **Token:** Can be found within the result parameter of the Get Export method response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$exportId = exp_ex6zq0x0EEa9S0N68QcqhxcQ; // string | Unique export object ID.
$token = 'token_example'; // string | Token that was issued to the export, to get this token, get the export first

try {
    $result = $apiInstance->downloadExport($exportId, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->downloadExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exportId** | **string**| Unique export object ID. | |
| **token** | **string**| Token that was issued to the export, to get this token, get the export first | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExport()`

```php
getExport($exportId): \OpenAPI\Client\Model\ExportsGetResponseBody
```

Get Export

Retrieves the URL of the downloadable file, which was generated via the Create Export method.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$exportId = 'exportId_example'; // string | Unique export object ID of previously created export. This object can be a: voucher, redemption, publication, customer, order, points_expiration, or voucher_transactions.

try {
    $result = $apiInstance->getExport($exportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->getExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **exportId** | **string**| Unique export object ID of previously created export. This object can be a: voucher, redemption, publication, customer, order, points_expiration, or voucher_transactions. | |

### Return type

[**\OpenAPI\Client\Model\ExportsGetResponseBody**](../Model/ExportsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listExports()`

```php
listExports($limit, $page, $order): \OpenAPI\Client\Model\ExportsListResponseBody
```

List Exports

List all exports.

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


$apiInstance = new OpenAPI\Client\Api\ExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListExports(); // ParameterOrderListExports | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listExports($limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportsApi->listExports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListExports**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExportsListResponseBody**](../Model/ExportsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
