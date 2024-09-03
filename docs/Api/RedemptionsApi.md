# OpenAPI\Client\RedemptionsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRedemption()**](RedemptionsApi.md#getRedemption) | **GET** /v1/redemptions/{redemptionId} | Get Redemption |
| [**getVoucherRedemptions()**](RedemptionsApi.md#getVoucherRedemptions) | **GET** /v1/vouchers/{code}/redemption | Get Voucher&#39;s Redemptions |
| [**listRedemptions()**](RedemptionsApi.md#listRedemptions) | **GET** /v1/redemptions | List Redemptions |
| [**redeemStackedDiscounts()**](RedemptionsApi.md#redeemStackedDiscounts) | **POST** /v1/redemptions | Redeem Stackable Discounts |
| [**rollbackRedemption()**](RedemptionsApi.md#rollbackRedemption) | **POST** /v1/redemptions/{redemptionId}/rollback | Rollback Redemption |
| [**rollbackStackedRedemptions()**](RedemptionsApi.md#rollbackStackedRedemptions) | **POST** /v1/redemptions/{parentRedemptionId}/rollbacks | Rollback Stackable Redemptions |


## `getRedemption()`

```php
getRedemption($redemptionId): \OpenAPI\Client\Model\RedemptionsGetResponseBody
```

Get Redemption

Return a redemption or redemption rollback object. This object can either be a successfull or failed redemption or redemption rollback.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptionId = 'redemptionId_example'; // string | ID of previously created redemption.

try {
    $result = $apiInstance->getRedemption($redemptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemptionId** | **string**| ID of previously created redemption. | |

### Return type

[**\OpenAPI\Client\Model\RedemptionsGetResponseBody**](../Model/RedemptionsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucherRedemptions()`

```php
getVoucherRedemptions($code): \OpenAPI\Client\Model\VouchersRedemptionGetResponseBody
```

Get Voucher's Redemptions

Retrieve the number of times a voucher was redeemed and each of the redemption details.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher.

try {
    $result = $apiInstance->getVoucherRedemptions($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->getVoucherRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersRedemptionGetResponseBody**](../Model/VouchersRedemptionGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRedemptions()`

```php
listRedemptions($limit, $page, $result, $campaign, $customer, $order, $createdAt, $filters): \OpenAPI\Client\Model\RedemptionsListResponseBody
```

List Redemptions

Returns a list of redemptions previously created. The redemptions are returned in a sorted order, with the most recent redemptions appearing first. The response returns a list of redemptions of all vouchers.  # Filtering results The result can be narrowed according to specified (or default) filters, for example, you can sort redemptions by date: https://api.voucherify.io/v1/redemptions?limit 3&[created_at][before] 2017-09-08T13:52:18.227Z. A filter based on the object created_at field narrows down the results and lists redemptions done before or after a particular date time. You can use the following options: [created_at][after], [created_at][before]. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z. # Failed Redemptions A redemption may fail for various reasons. You can figure out an exact reason from the failure_code: - resource_not_found - voucher with given code does not exist - voucher_not_active - voucher is not active yet (before start date) - voucher_expired - voucher has already expired (after expiration date) - voucher_disabled -  voucher has been disabled (active: false) - quantity_exceeded - vouchers redemptions limit has been exceeded - gift_amount_exceeded - gift amount has been exceeded - customer_rules_violated - customer did not match the segment - order_rules_violated - order did not match validation rules - invalid_order - order was specified incorrectly - invalid_amount - order amount was specified incorrectly - missing_amount - order amount was not specified - missing_order_items - order items were not specified - missing_customer - customer was not specified

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$result = 'result_example'; // string | A filter on the list based on the redemption result. Available options are: SUCCESS, FAILURE. You can provide multiple values by repeating the param.
$campaign = 'campaign_example'; // string | A filter by the campaign **name** that the redemption resources originate from.
$customer = 'customer_example'; // string | Return redemptions performed by the customer with given id or source_id.
$order = new \OpenAPI\Client\Model\ParameterOrderListRedemptions(); // ParameterOrderListRedemptions | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$createdAt = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z
$filters = new \OpenAPI\Client\Model\ParameterFiltersListRedemptions(); // ParameterFiltersListRedemptions | Filters for listing responses.

try {
    $result = $apiInstance->listRedemptions($limit, $page, $result, $campaign, $customer, $order, $createdAt, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->listRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **result** | **string**| A filter on the list based on the redemption result. Available options are: SUCCESS, FAILURE. You can provide multiple values by repeating the param. | [optional] |
| **campaign** | **string**| A filter by the campaign **name** that the redemption resources originate from. | [optional] |
| **customer** | **string**| Return redemptions performed by the customer with given id or source_id. | [optional] |
| **order** | [**ParameterOrderListRedemptions**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **createdAt** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **filters** | [**ParameterFiltersListRedemptions**](../Model/.md)| Filters for listing responses. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsListResponseBody**](../Model/RedemptionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemStackedDiscounts()`

```php
redeemStackedDiscounts($redemptionsRedeemRequestBody): \OpenAPI\Client\Model\RedemptionsRedeemResponseBody
```

Redeem Stackable Discounts

# How API returns calculated discounts and order amounts in the response In the table below, you can see the logic the API follows to calculate discounts and amounts:    📘 Rollbacks  You cant roll back a child redemption. When you call rollback on a stacked redemption, all child redemptions will be rolled back. You need to refer to a parent redemption ID in your rollback request.      📘 Also available on client-side  This method is also accessible through public keys which you can use in client-side​ apps: mobile and web browser apps. Go to the dedicated endpoint to learn more.  - Use X-Client-Application-Id as the application ID header.  - Use X-Client-Token as the appliction secret key header.  - Use client-side base URL.  - Use an origin header for your custom domain.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptionsRedeemRequestBody = {"customer":{"source_id":"sample_customer","metadata":{"key":"value"}},"options":{"expand":["order","redeemable","category"]},"redeemables":[{"object":"voucher","id":"voucher-code"}],"session":{"type":"LOCK","key":"session_key"},"order":{"amount":55000,"status":"PAID","items":[{"quantity":2,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}},{"quantity":1,"price":15000,"source_id":"sample product2","related_object":"product","product":{"metadata":{"key":"value"}}}],"metadata":{"key":"value"}}}; // \OpenAPI\Client\Model\RedemptionsRedeemRequestBody

try {
    $result = $apiInstance->redeemStackedDiscounts($redemptionsRedeemRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->redeemStackedDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemptionsRedeemRequestBody** | [**\OpenAPI\Client\Model\RedemptionsRedeemRequestBody**](../Model/RedemptionsRedeemRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRedeemResponseBody**](../Model/RedemptionsRedeemResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackRedemption()`

```php
rollbackRedemption($redemptionId, $reason, $trackingId, $redemptionsRollbackCreateRequestBody): \OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBody
```

Rollback Redemption

Your business logic may include a case when you need to undo a redemption. You can revert a redemption by calling this API endpoint.  🚧  You can roll back a redemption up to 3 months back.   # Effect  The operation  - creates a rollback entry in vouchers redemption history (redemption.redemption_entries) and  - gives 1 redemption back to the pool (decreases redeemed_quantity by 1).  # Returned funds  In case of *gift card vouchers*, this method returns funds back according to the source redemption. In case of *loyalty card vouchers*, this method returns points back according to the source redemption.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$redemptionId = 'redemptionId_example'; // string | The original redemption ID to be rolled back (undone).
$reason = 'reason_example'; // string | Reason for the rollback.
$trackingId = 'trackingId_example'; // string | Customers source_id.
$redemptionsRollbackCreateRequestBody = {"customer":{"id":"cust_SolpIN5N4oZbCnrxZ5NHrbVB","name":"Annie Lemons","email":"annie@lemon.com","phone":"+1 933 222 3334","birthday":"1900-12-02","birthdate":"1900-12-01","address":{"city":"New York","state":"NY","line_1":"123 Main St.","line_2":"APT 3 BLG 5","country":"United States","postal_code":"100012"},"metadata":{"age":23}},"order":{"source_id":"test_rollback_8"},"metadata":{"location_id":["L2"]}}; // \OpenAPI\Client\Model\RedemptionsRollbackCreateRequestBody | Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body.

try {
    $result = $apiInstance->rollbackRedemption($redemptionId, $reason, $trackingId, $redemptionsRollbackCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->rollbackRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redemptionId** | **string**| The original redemption ID to be rolled back (undone). | |
| **reason** | **string**| Reason for the rollback. | [optional] |
| **trackingId** | **string**| Customers source_id. | [optional] |
| **redemptionsRollbackCreateRequestBody** | [**\OpenAPI\Client\Model\RedemptionsRollbackCreateRequestBody**](../Model/RedemptionsRollbackCreateRequestBody.md)| Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRollbackCreateResponseBody**](../Model/RedemptionsRollbackCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rollbackStackedRedemptions()`

```php
rollbackStackedRedemptions($parentRedemptionId, $reason, $trackingId, $redemptionsRollbacksCreateRequestBody): \OpenAPI\Client\Model\RedemptionsRollbacksCreateResponseBody
```

Rollback Stackable Redemptions

Rollback a stackable redemption. When you rollback a stacked redemption, all child redemptions will be rolled back. Provide the parent redemption ID as the path parameter.  🚧   You can roll back a redemption up to 3 months back.

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


$apiInstance = new OpenAPI\Client\Api\RedemptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parentRedemptionId = 'parentRedemptionId_example'; // string | Unique identifier of a parent redemption, e.g. r_JQfm73zWSJFQxs3bGxweYjgm.
$reason = 'reason_example'; // string | Reason for the rollback.
$trackingId = 'trackingId_example'; // string | Customers source_id.
$redemptionsRollbacksCreateRequestBody = {"customer":{"id":"cust_SolpIN5N4oZbCnrxZ5NHrbVB","name":"Annie Lemons","email":"annie@lemon.com","phone":"+1 933 222 3334","birthday":"1900-12-02","birthdate":"1900-12-01","address":{"city":"New York","state":"NY","line_1":"123 Main St.","line_2":"APT 3 BLG 5","country":"United States","postal_code":"100012"},"metadata":{"age":23}},"order":{"source_id":"test_rollback_8"},"metadata":{"location_id":["L2"]}}; // \OpenAPI\Client\Model\RedemptionsRollbacksCreateRequestBody | Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body.

try {
    $result = $apiInstance->rollbackStackedRedemptions($parentRedemptionId, $reason, $trackingId, $redemptionsRollbacksCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RedemptionsApi->rollbackStackedRedemptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parentRedemptionId** | **string**| Unique identifier of a parent redemption, e.g. r_JQfm73zWSJFQxs3bGxweYjgm. | |
| **reason** | **string**| Reason for the rollback. | [optional] |
| **trackingId** | **string**| Customers source_id. | [optional] |
| **redemptionsRollbacksCreateRequestBody** | [**\OpenAPI\Client\Model\RedemptionsRollbacksCreateRequestBody**](../Model/RedemptionsRollbacksCreateRequestBody.md)| Add information about the original customer and order. Customer data and Redemption metadata can be updated in Voucherify when passing the customer data in the request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RedemptionsRollbacksCreateResponseBody**](../Model/RedemptionsRollbacksCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
