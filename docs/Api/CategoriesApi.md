# OpenAPI\Client\CategoriesApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCategory()**](CategoriesApi.md#createCategory) | **POST** /v1/categories | Create Category |
| [**deleteCategory()**](CategoriesApi.md#deleteCategory) | **DELETE** /v1/categories/{categoryId} | Delete Category |
| [**getCategory()**](CategoriesApi.md#getCategory) | **GET** /v1/categories/{categoryId} | Get Category |
| [**listCategories()**](CategoriesApi.md#listCategories) | **GET** /v1/categories | List Categories |
| [**updateCategory()**](CategoriesApi.md#updateCategory) | **PUT** /v1/categories/{categoryId} | Update Category |


## `createCategory()`

```php
createCategory($categoriesCreateRequestBody): \OpenAPI\Client\Model\CategoriesCreateResponseBody
```

Create Category

Create category with a specific name and hierarchy.

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


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoriesCreateRequestBody = {"name":"Eighth","hierarchy":8}; // \OpenAPI\Client\Model\CategoriesCreateRequestBody | Specify the details of the category that you would like to create.

try {
    $result = $apiInstance->createCategory($categoriesCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoriesCreateRequestBody** | [**\OpenAPI\Client\Model\CategoriesCreateRequestBody**](../Model/CategoriesCreateRequestBody.md)| Specify the details of the category that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoriesCreateResponseBody**](../Model/CategoriesCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($categoryId)
```

Delete Category

Delete a category by the category ID.

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


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | Unique category ID assigned by Voucherify.

try {
    $apiInstance->deleteCategory($categoryId);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryId** | **string**| Unique category ID assigned by Voucherify. | |

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

## `getCategory()`

```php
getCategory($categoryId): \OpenAPI\Client\Model\CategoriesGetResponseBody
```

Get Category

Retrieve a category by the category ID.

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


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | Unique category ID assigned by Voucherify.

try {
    $result = $apiInstance->getCategory($categoryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryId** | **string**| Unique category ID assigned by Voucherify. | |

### Return type

[**\OpenAPI\Client\Model\CategoriesGetResponseBody**](../Model/CategoriesGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCategories()`

```php
listCategories(): \OpenAPI\Client\Model\CategoriesListResponseBody
```

List Categories

List all categories.

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


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->listCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CategoriesListResponseBody**](../Model/CategoriesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($categoryId, $categoriesUpdateRequestBody): \OpenAPI\Client\Model\CategoriesUpdateResponseBody
```

Update Category

Update category using the category ID.

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


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | Unique category ID assigned by Voucherify.
$categoriesUpdateRequestBody = {"name":"Summer","hierarchy":1}; // \OpenAPI\Client\Model\CategoriesUpdateRequestBody | Specify the details of the category that you would like to update.

try {
    $result = $apiInstance->updateCategory($categoryId, $categoriesUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categoryId** | **string**| Unique category ID assigned by Voucherify. | |
| **categoriesUpdateRequestBody** | [**\OpenAPI\Client\Model\CategoriesUpdateRequestBody**](../Model/CategoriesUpdateRequestBody.md)| Specify the details of the category that you would like to update. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoriesUpdateResponseBody**](../Model/CategoriesUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
