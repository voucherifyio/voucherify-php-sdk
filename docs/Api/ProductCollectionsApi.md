# OpenAPI\Client\ProductCollectionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createProductCollection()**](ProductCollectionsApi.md#createProductCollection) | **POST** /v1/product-collections | Create Product Collection |
| [**deleteProductCollection()**](ProductCollectionsApi.md#deleteProductCollection) | **DELETE** /v1/product-collections/{productCollectionId} | Delete Product Collection |
| [**getProductCollection()**](ProductCollectionsApi.md#getProductCollection) | **GET** /v1/product-collections/{productCollectionId} | Get Product Collection |
| [**listProductCollections()**](ProductCollectionsApi.md#listProductCollections) | **GET** /v1/product-collections | List Product Collections |
| [**listProductsInCollection()**](ProductCollectionsApi.md#listProductsInCollection) | **GET** /v1/product-collections/{productCollectionId}/products | List Products in Collection |


## `createProductCollection()`

```php
createProductCollection($productCollectionsCreateRequestBody): \OpenAPI\Client\Model\ProductCollectionsCreateResponseBody
```

Create Product Collection

This method creates a new product collection.

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


$apiInstance = new OpenAPI\Client\Api\ProductCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCollectionsCreateRequestBody = new \OpenAPI\Client\Model\ProductCollectionsCreateRequestBody(); // \OpenAPI\Client\Model\ProductCollectionsCreateRequestBody

try {
    $result = $apiInstance->createProductCollection($productCollectionsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCollectionsApi->createProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCollectionsCreateRequestBody** | [**\OpenAPI\Client\Model\ProductCollectionsCreateRequestBody**](../Model/ProductCollectionsCreateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductCollectionsCreateResponseBody**](../Model/ProductCollectionsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProductCollection()`

```php
deleteProductCollection($productCollectionId)
```

Delete Product Collection

This method deletes a product collection.

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


$apiInstance = new OpenAPI\Client\Api\ProductCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCollectionId = 'productCollectionId_example'; // string | A unique product collection ID.

try {
    $apiInstance->deleteProductCollection($productCollectionId);
} catch (Exception $e) {
    echo 'Exception when calling ProductCollectionsApi->deleteProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCollectionId** | **string**| A unique product collection ID. | |

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

## `getProductCollection()`

```php
getProductCollection($productCollectionId): \OpenAPI\Client\Model\ProductCollectionsGetResponseBody
```

Get Product Collection

Retrieves the product collection.

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


$apiInstance = new OpenAPI\Client\Api\ProductCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCollectionId = 'productCollectionId_example'; // string | A unique product collection ID.

try {
    $result = $apiInstance->getProductCollection($productCollectionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCollectionsApi->getProductCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCollectionId** | **string**| A unique product collection ID. | |

### Return type

[**\OpenAPI\Client\Model\ProductCollectionsGetResponseBody**](../Model/ProductCollectionsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductCollections()`

```php
listProductCollections($limit, $page, $order): \OpenAPI\Client\Model\ProductCollectionsListResponseBody
```

List Product Collections

This method returns a list of product collections.

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


$apiInstance = new OpenAPI\Client\Api\ProductCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrder(); // ParameterOrder | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listProductCollections($limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCollectionsApi->listProductCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrder**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductCollectionsListResponseBody**](../Model/ProductCollectionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProductsInCollection()`

```php
listProductsInCollection($productCollectionId, $limit, $page, $order, $startingAfter): \OpenAPI\Client\Model\ProductCollectionsProductsListResponseBody
```

List Products in Collection

Retrieves list of products from a product collection; works for both dynamic and static product collections.

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


$apiInstance = new OpenAPI\Client\Api\ProductCollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productCollectionId = 'productCollectionId_example'; // string | Unique product collection ID.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrder(); // ParameterOrder | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time to use in starting_after cursor to get more data. Represented in ISO 8601 format.

try {
    $result = $apiInstance->listProductsInCollection($productCollectionId, $limit, $page, $order, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCollectionsApi->listProductsInCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productCollectionId** | **string**| Unique product collection ID. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrder**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfter** | **\DateTime**| Timestamp representing the date and time to use in starting_after cursor to get more data. Represented in ISO 8601 format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProductCollectionsProductsListResponseBody**](../Model/ProductCollectionsProductsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
