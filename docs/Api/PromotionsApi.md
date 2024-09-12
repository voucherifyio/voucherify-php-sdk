# OpenAPI\Client\PromotionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addPromotionTierToCampaign()**](PromotionsApi.md#addPromotionTierToCampaign) | **POST** /v1/promotions/{campaignId}/tiers | Add Promotion Tier to Campaign |
| [**createPromotionStack()**](PromotionsApi.md#createPromotionStack) | **POST** /v1/promotions/{campaignId}/stacks | Create Promotion Stack |
| [**deletePromotionStack()**](PromotionsApi.md#deletePromotionStack) | **DELETE** /v1/promotions/{campaignId}/stacks/{stackId} | Delete Promotion Stack |
| [**deletePromotionTier()**](PromotionsApi.md#deletePromotionTier) | **DELETE** /v1/promotions/tiers/{promotionTierId} | Delete Promotion Tier |
| [**disablePromotionTier()**](PromotionsApi.md#disablePromotionTier) | **POST** /v1/promotions/tiers/{promotionTierId}/disable | Disable Promotion Tier |
| [**enablePromotionTier()**](PromotionsApi.md#enablePromotionTier) | **POST** /v1/promotions/tiers/{promotionTierId}/enable | Enable Promotion Tier |
| [**getPromotionStack()**](PromotionsApi.md#getPromotionStack) | **GET** /v1/promotions/{campaignId}/stacks/{stackId} | Get Promotion Stack |
| [**getPromotionTier()**](PromotionsApi.md#getPromotionTier) | **GET** /v1/promotions/tiers/{promotionTierId} | Get Promotion Tier |
| [**listAllPromotionStacks()**](PromotionsApi.md#listAllPromotionStacks) | **GET** /v1/promotions/stacks | List Promotion Stacks |
| [**listPromotionStacksInCampaign()**](PromotionsApi.md#listPromotionStacksInCampaign) | **GET** /v1/promotions/{campaignId}/stacks | List Promotion Stacks in Campaign |
| [**listPromotionTiers()**](PromotionsApi.md#listPromotionTiers) | **GET** /v1/promotions/tiers | List Promotion Tiers |
| [**listPromotionTiersFromCampaign()**](PromotionsApi.md#listPromotionTiersFromCampaign) | **GET** /v1/promotions/{campaignId}/tiers | List Promotion Tiers from Campaign |
| [**updatePromotionStack()**](PromotionsApi.md#updatePromotionStack) | **PUT** /v1/promotions/{campaignId}/stacks/{stackId} | Update Promotion Stack |
| [**updatePromotionTier()**](PromotionsApi.md#updatePromotionTier) | **PUT** /v1/promotions/tiers/{promotionTierId} | Update Promotion Tier |


## `addPromotionTierToCampaign()`

```php
addPromotionTierToCampaign($campaignId, $promotionsTiersCreateRequestBody): \OpenAPI\Client\Model\PromotionsTiersCreateResponseBody
```

Add Promotion Tier to Campaign

This method allows you to add a new promotion tier to an existing campaign. The tier hierarchy will be set as the next consequtive integer following the lowest ranking tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique campaign ID assigned by Voucherify.
$promotionsTiersCreateRequestBody = {"name":"Order more than $100","banner":"Order more than $100","action":{"discount":{"type":"AMOUNT","amount_off":3000,"effect":"APPLY_TO_ORDER"}},"metadata":{},"active":true,"start_date":"2022-09-21T00:00:00.000Z","expiration_date":"2022-09-30T00:00:00.000Z","validity_timeframe":{"interval":"P2D","duration":"P1D"},"validity_day_of_week":[1,2,3,4],"validation_rules":["val_q8qUBMOh5qIQ"]}; // \OpenAPI\Client\Model\PromotionsTiersCreateRequestBody | Specify the promotion tier parameters.

try {
    $result = $apiInstance->addPromotionTierToCampaign($campaignId, $promotionsTiersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->addPromotionTierToCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique campaign ID assigned by Voucherify. | |
| **promotionsTiersCreateRequestBody** | [**\OpenAPI\Client\Model\PromotionsTiersCreateRequestBody**](../Model/PromotionsTiersCreateRequestBody.md)| Specify the promotion tier parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersCreateResponseBody**](../Model/PromotionsTiersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPromotionStack()`

```php
createPromotionStack($campaignId, $promotionsStacksCreateRequestBody): \OpenAPI\Client\Model\PromotionsStacksCreateResponseBody
```

Create Promotion Stack

This method creates one promotion stack. The sequence of promotion tier IDs will determine the promotion stacking order.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique campaign ID.
$promotionsStacksCreateRequestBody = {"name":"Fifth Stack","tiers":{"ids":["promo_aaAF8mVAzA0PF1igia2OC63d","promo_t9zdL6XMFk7B8fQ23zxELtdE","promo_dJNhAEeV5sR5oPQq1UrUdnMC"],"hierarchy_mode":"MANUAL"}}; // \OpenAPI\Client\Model\PromotionsStacksCreateRequestBody | Specify the order of promotion tiers for the promotion stack.

try {
    $result = $apiInstance->createPromotionStack($campaignId, $promotionsStacksCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->createPromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique campaign ID. | |
| **promotionsStacksCreateRequestBody** | [**\OpenAPI\Client\Model\PromotionsStacksCreateRequestBody**](../Model/PromotionsStacksCreateRequestBody.md)| Specify the order of promotion tiers for the promotion stack. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksCreateResponseBody**](../Model/PromotionsStacksCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromotionStack()`

```php
deletePromotionStack($campaignId, $stackId)
```

Delete Promotion Stack

This method deletes a promotion stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign.
$stackId = 'stackId_example'; // string | Promotion stack ID.

try {
    $apiInstance->deletePromotionStack($campaignId, $stackId);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->deletePromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign. | |
| **stackId** | **string**| Promotion stack ID. | |

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

## `deletePromotionTier()`

```php
deletePromotionTier($promotionTierId)
```

Delete Promotion Tier

This method deletes a promotion tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionTierId = 'promotionTierId_example'; // string | Unique promotion tier ID.

try {
    $apiInstance->deletePromotionTier($promotionTierId);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->deletePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionTierId** | **string**| Unique promotion tier ID. | |

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

## `disablePromotionTier()`

```php
disablePromotionTier($promotionTierId): \OpenAPI\Client\Model\PromotionsTiersDisableResponseBody
```

Disable Promotion Tier

This method disables a promotion tier, i.e. makes the active parameter   false.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionTierId = 'promotionTierId_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->disablePromotionTier($promotionTierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->disablePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionTierId** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersDisableResponseBody**](../Model/PromotionsTiersDisableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enablePromotionTier()`

```php
enablePromotionTier($promotionTierId): \OpenAPI\Client\Model\PromotionsTiersEnableResponseBody
```

Enable Promotion Tier

This method enables a promotion tier, i.e. makes the active parameter   true.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionTierId = 'promotionTierId_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->enablePromotionTier($promotionTierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->enablePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionTierId** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersEnableResponseBody**](../Model/PromotionsTiersEnableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionStack()`

```php
getPromotionStack($campaignId, $stackId): \OpenAPI\Client\Model\PromotionsStacksGetResponseBody
```

Get Promotion Stack

This method returns the details of a promotion stack, including the promotion tiers grouped within the stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign.
$stackId = 'stackId_example'; // string | Promotion stack ID.

try {
    $result = $apiInstance->getPromotionStack($campaignId, $stackId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign. | |
| **stackId** | **string**| Promotion stack ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksGetResponseBody**](../Model/PromotionsStacksGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionTier()`

```php
getPromotionTier($promotionTierId): \OpenAPI\Client\Model\PromotionsTiersGetResponseBody
```

Get Promotion Tier

This method enables you to retrieve a specific promotion tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionTierId = 'promotionTierId_example'; // string | Unique promotion tier ID.

try {
    $result = $apiInstance->getPromotionTier($promotionTierId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->getPromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionTierId** | **string**| Unique promotion tier ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersGetResponseBody**](../Model/PromotionsTiersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAllPromotionStacks()`

```php
listAllPromotionStacks($limit, $page, $order, $createdAt, $updatedAt): \OpenAPI\Client\Model\PromotionsStacksListResponseBody
```

List Promotion Stacks

This method enables you to list promotion stacks irrespective of the campaign they are associated with.  You can use filters in the query parameters to specify the stacks to be returned in the response. # Advanced filters for fetching promotion stacks

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListAllPromotionStacks(); // ParameterOrderListAllPromotionStacks | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$createdAt = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z
$updatedAt = new \OpenAPI\Client\Model\ParameterUpdatedBeforeAfter(); // ParameterUpdatedBeforeAfter | A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z

try {
    $result = $apiInstance->listAllPromotionStacks($limit, $page, $order, $createdAt, $updatedAt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listAllPromotionStacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListAllPromotionStacks**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **createdAt** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **updatedAt** | [**ParameterUpdatedBeforeAfter**](../Model/.md)| A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksListResponseBody**](../Model/PromotionsStacksListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionStacksInCampaign()`

```php
listPromotionStacksInCampaign($campaignId): \OpenAPI\Client\Model\PromotionsStacksListResponseBody
```

List Promotion Stacks in Campaign

This method enables you to list promotion stacks from a specified campaign.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique campaign ID.

try {
    $result = $apiInstance->listPromotionStacksInCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listPromotionStacksInCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique campaign ID. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksListResponseBody**](../Model/PromotionsStacksListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionTiers()`

```php
listPromotionTiers($isAvailable, $limit, $page, $order): \OpenAPI\Client\Model\PromotionsTiersListResponseBody
```

List Promotion Tiers

This method enables you to list promotion tiers.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$isAvailable = True; // bool | This parameter allows filtering promotions that are only available at the moment. When set to true, it selects only non-expired and active promotions.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListPromotionTiers(); // ParameterOrderListPromotionTiers | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listPromotionTiers($isAvailable, $limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listPromotionTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isAvailable** | **bool**| This parameter allows filtering promotions that are only available at the moment. When set to true, it selects only non-expired and active promotions. | [optional] |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListPromotionTiers**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersListResponseBody**](../Model/PromotionsTiersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionTiersFromCampaign()`

```php
listPromotionTiersFromCampaign($campaignId): \OpenAPI\Client\Model\PromotionsTiersListResponseBody
```

List Promotion Tiers from Campaign

This method enables you to list promotion tiers from a specified campaign.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique campaign ID assigned by Voucherify.

try {
    $result = $apiInstance->listPromotionTiersFromCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->listPromotionTiersFromCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique campaign ID assigned by Voucherify. | |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersListResponseBody**](../Model/PromotionsTiersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionStack()`

```php
updatePromotionStack($campaignId, $stackId, $promotionsStacksUpdateRequestBody): \OpenAPI\Client\Model\PromotionsStacksUpdateResponseBody
```

Update Promotion Stack

This methods allows for editing an existing stack.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign.
$stackId = 'stackId_example'; // string | Promotion stack ID.
$promotionsStacksUpdateRequestBody = {"name":"Fifth Stack Modified","tiers":{"ids":["promo_aaAF8mVAzA0PF1igia2OC63d","promo_t9zdL6XMFk7B8fQ23zxELtdE"],"hierarchy_mode":"MANUAL"}}; // \OpenAPI\Client\Model\PromotionsStacksUpdateRequestBody | Specify the promotion stack parameters that you would like to update.

try {
    $result = $apiInstance->updatePromotionStack($campaignId, $stackId, $promotionsStacksUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->updatePromotionStack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| ID of the promotion campaign. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value, e.g., Loyalty Campaign. | |
| **stackId** | **string**| Promotion stack ID. | |
| **promotionsStacksUpdateRequestBody** | [**\OpenAPI\Client\Model\PromotionsStacksUpdateRequestBody**](../Model/PromotionsStacksUpdateRequestBody.md)| Specify the promotion stack parameters that you would like to update. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsStacksUpdateResponseBody**](../Model/PromotionsStacksUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionTier()`

```php
updatePromotionTier($promotionTierId, $promotionsTiersUpdateRequestBody): \OpenAPI\Client\Model\PromotionsTiersUpdateResponseBody
```

Update Promotion Tier

This method updates a promotion tier.

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


$apiInstance = new OpenAPI\Client\Api\PromotionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promotionTierId = 'promotionTierId_example'; // string | Unique promotion tier ID.
$promotionsTiersUpdateRequestBody = {"name":"Order more than $100 USD","banner":"Order more than $100 USD","action":{"discount":{"type":"PERCENT","percent_off":25,"effect":"APPLY_TO_ORDER"}},"metadata":{"level":"A-21"},"hierarchy":1,"start_date":"2022-09-22T00:00:00.000Z","expiration_date":"2022-09-29T00:00:00.000Z","validity_timeframe":{"interval":"P3D","duration":"P2D"},"validity_day_of_week":[1,2,3]}; // \OpenAPI\Client\Model\PromotionsTiersUpdateRequestBody | Specify the promotion tier parameters that you would like to update.

try {
    $result = $apiInstance->updatePromotionTier($promotionTierId, $promotionsTiersUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionsApi->updatePromotionTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **promotionTierId** | **string**| Unique promotion tier ID. | |
| **promotionsTiersUpdateRequestBody** | [**\OpenAPI\Client\Model\PromotionsTiersUpdateRequestBody**](../Model/PromotionsTiersUpdateRequestBody.md)| Specify the promotion tier parameters that you would like to update. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PromotionsTiersUpdateResponseBody**](../Model/PromotionsTiersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
