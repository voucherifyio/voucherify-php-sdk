# OpenAPI\Client\ClientSideApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkEligibilityClientSide()**](ClientSideApi.md#checkEligibilityClientSide) | **POST** /client/v1/qualifications | Check Eligibility (client-side) |
| [**listPromotionTiersClientSide()**](ClientSideApi.md#listPromotionTiersClientSide) | **GET** /client/v1/promotions/tiers | List Promotion Tiers (client-side) |
| [**redeemStackedDiscountsClientSide()**](ClientSideApi.md#redeemStackedDiscountsClientSide) | **POST** /client/v1/redemptions | Redeem Stackable Discounts (client-side) |
| [**trackCustomEventClientSide()**](ClientSideApi.md#trackCustomEventClientSide) | **POST** /client/v1/events | Track Custom Event (client-side) |
| [**validateStackedDiscountsClientSide()**](ClientSideApi.md#validateStackedDiscountsClientSide) | **POST** /client/v1/validations | Validate Stackable Discounts (client-side) |


## `checkEligibilityClientSide()`

```php
checkEligibilityClientSide($clientQualificationsCheckEligibilityRequestBody): \OpenAPI\Client\Model\ClientQualificationsCheckEligibilityResponseBody
```

Check Eligibility (client-side)

Generate a list of redeemables that are applicable in the context of the customer and order. The new qualifications method is an improved version of Campaign Qualifications, Voucher Qualifications, and Promotions Validation API requests. The new qualification method introduces the following improvements: - Qualification results are returned faster - No limit on the number of returned redeemables - Introduces new qualification scenarios, not available in the previous version  👍 Scenario Guide  Read our dedicated guide to learn about some use cases this endpoint can cover here. # Paging  The Voucherify Qualifications API request will return to you all of the redeemables available for the customer in batches of up to 50 redeemables. To get the next batch of redeemables, you need to use the starting_after cursor. To process of paging the redeemables works in the following manner: - You send the first API request for Qualifications without the starting_after parameter. - The response will contain a parameter named has_more. If the parameters value is set to true, then more redeemables are available. - Get the value of the created_at parameter of the last returned redeemable. The value of this parameter will be used as a cursor to retrieve the next page of redeemables. - Send another API request for Qualification with the starting_after parameter set to the value taken from the created_at parameter from the last returned redeemable. - Voucherify will return the next page of redeemables. - If the has_more parameter is set to true, apply steps 3-5 to get the next page of redeemables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientQualificationsCheckEligibilityRequestBody = new \OpenAPI\Client\Model\ClientQualificationsCheckEligibilityRequestBody(); // \OpenAPI\Client\Model\ClientQualificationsCheckEligibilityRequestBody | Define order and customer context.

try {
    $result = $apiInstance->checkEligibilityClientSide($clientQualificationsCheckEligibilityRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideApi->checkEligibilityClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientQualificationsCheckEligibilityRequestBody** | [**\OpenAPI\Client\Model\ClientQualificationsCheckEligibilityRequestBody**](../Model/ClientQualificationsCheckEligibilityRequestBody.md)| Define order and customer context. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientQualificationsCheckEligibilityResponseBody**](../Model/ClientQualificationsCheckEligibilityResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPromotionTiersClientSide()`

```php
listPromotionTiersClientSide($origin, $isAvailable, $limit, $page, $order): \OpenAPI\Client\Model\ClientPromotionsTiersListResponseBody
```

List Promotion Tiers (client-side)

This method enables you to list promotion tiers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$isAvailable = True; // bool | This parameter allows filtering promotions that are only available at the moment. When set to true, it selects only non-expired and active promotions.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListPromotionTiersClientSide(); // ParameterOrderListPromotionTiersClientSide | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listPromotionTiersClientSide($origin, $isAvailable, $limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideApi->listPromotionTiersClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **isAvailable** | **bool**| This parameter allows filtering promotions that are only available at the moment. When set to true, it selects only non-expired and active promotions. | [optional] |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListPromotionTiersClientSide**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientPromotionsTiersListResponseBody**](../Model/ClientPromotionsTiersListResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemStackedDiscountsClientSide()`

```php
redeemStackedDiscountsClientSide($origin, $clientRedemptionsRedeemRequestBody): \OpenAPI\Client\Model\ClientRedemptionsRedeemResponseBody
```

Redeem Stackable Discounts (client-side)

This method is accessible through public keys which you can use in client side requests coming from mobile and web browser applications. # How API returns calculated discounts and order amounts in the response In the table below, you can see the logic the API follows to calculate discounts and amounts:    📘 Rollbacks  You cant roll back a child redemption. When you call rollback on a stacked redemption, all child redemptions will be rolled back. You need to refer to a parent redemption ID in your rollback request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$clientRedemptionsRedeemRequestBody = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK","key":"session_key"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\ClientRedemptionsRedeemRequestBody

try {
    $result = $apiInstance->redeemStackedDiscountsClientSide($origin, $clientRedemptionsRedeemRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideApi->redeemStackedDiscountsClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **clientRedemptionsRedeemRequestBody** | [**\OpenAPI\Client\Model\ClientRedemptionsRedeemRequestBody**](../Model/ClientRedemptionsRedeemRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientRedemptionsRedeemResponseBody**](../Model/ClientRedemptionsRedeemResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackCustomEventClientSide()`

```php
trackCustomEventClientSide($origin, $clientEventsCreateRequestBody): \OpenAPI\Client\Model\ClientEventsCreateResponseBody
```

Track Custom Event (client-side)

To track a custom event, you create an event object.   The event object must be linked to the customer who performs the action. If a customer doesnt exist in Voucherify, the customer will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$clientEventsCreateRequestBody = {"event":"user_subscribed","customer":{"source_id":"source_customer_event"},"referral":{"code":"46jL0kYI","referrer_id":"cust_Vzck5i8U3OhcEUFY6MKhN9Rv"},"metadata":{"login":"bob","pricing_plan":"PP1","volume_number":4}}; // \OpenAPI\Client\Model\ClientEventsCreateRequestBody | Specify the details of the custom event.

try {
    $result = $apiInstance->trackCustomEventClientSide($origin, $clientEventsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideApi->trackCustomEventClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **clientEventsCreateRequestBody** | [**\OpenAPI\Client\Model\ClientEventsCreateRequestBody**](../Model/ClientEventsCreateRequestBody.md)| Specify the details of the custom event. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientEventsCreateResponseBody**](../Model/ClientEventsCreateResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateStackedDiscountsClientSide()`

```php
validateStackedDiscountsClientSide($origin, $clientValidationsValidateRequestBody): \OpenAPI\Client\Model\ClientValidationsValidateResponseBody
```

Validate Stackable Discounts (client-side)

Verify redeemables provided in the request. This method is accessible through public keys which you can use in client side requests coming from mobile and web browser applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Client-Application-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Application-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Application-Id', 'Bearer');

// Configure API key authorization: X-Client-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Client-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Client-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ClientSideApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$origin = 'origin_example'; // string | Indicates the origin (scheme, hostname, and port).
$clientValidationsValidateRequestBody = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\ClientValidationsValidateRequestBody

try {
    $result = $apiInstance->validateStackedDiscountsClientSide($origin, $clientValidationsValidateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSideApi->validateStackedDiscountsClientSide: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **origin** | **string**| Indicates the origin (scheme, hostname, and port). | |
| **clientValidationsValidateRequestBody** | [**\OpenAPI\Client\Model\ClientValidationsValidateRequestBody**](../Model/ClientValidationsValidateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClientValidationsValidateResponseBody**](../Model/ClientValidationsValidateResponseBody.md)

### Authorization

[X-Client-Application-Id](../../README.md#X-Client-Application-Id), [X-Client-Token](../../README.md#X-Client-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
