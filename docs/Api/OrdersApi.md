# OpenAPI\Client\OrdersApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /v1/orders | Create Order |
| [**createOrderExport()**](OrdersApi.md#createOrderExport) | **POST** /v1/orders/export | Create Orders Export |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /v1/orders/{orderId} | Get Order |
| [**importOrders()**](OrdersApi.md#importOrders) | **POST** /v1/orders/import | Import Orders |
| [**listOrders()**](OrdersApi.md#listOrders) | **GET** /v1/orders | List Orders |
| [**updateOrder()**](OrdersApi.md#updateOrder) | **PUT** /v1/orders/{orderId} | Update Order |


## `createOrder()`

```php
createOrder($ordersCreateRequestBody): \OpenAPI\Client\Model\OrdersCreateResponseBody
```

Create Order

Creates an order object and triggers an order creation event.  📘 Upsert Mode  If you pass an id or a source_id that already exists in the order database, Voucherify will return a related order object with updated fields.

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordersCreateRequestBody = {"amount":20000,"customer":{"source_id":"sample_customer"},"status":"PAID","items":[{"quantity":1,"price":20000,"source_id":"sample product1","related_object":"product","product":{"metadata":{"key":"value"}}}]}; // \OpenAPI\Client\Model\OrdersCreateRequestBody | Specify the order parameters.

try {
    $result = $apiInstance->createOrder($ordersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ordersCreateRequestBody** | [**\OpenAPI\Client\Model\OrdersCreateRequestBody**](../Model/OrdersCreateRequestBody.md)| Specify the order parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersCreateResponseBody**](../Model/OrdersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrderExport()`

```php
createOrderExport($ordersExportCreateRequestBody): \OpenAPI\Client\Model\OrdersExportCreateResponseBody
```

Create Orders Export

Creates a downloadable CSV file containing a list of orders. The parameters listed in the payload resembles headers in the CSV file. To include a parameter to the file, add it to the parameters.fields object in the request body. The available filters are all order object attributes. Additionally, any metadata defined in the metadata schema can be exported. Passing an empty JSON will generate a file containing three default fields: id, source_id, and status. The fields array is an array of strings containing the data in the export. These fields define the headers in the CSV file. The array can be a combination of any of the following available fields:

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordersExportCreateRequestBody = {"parameters":{"fields":["id","source_id","status","created_at","updated_at","amount","discount_amount","items_discount_amount","total_discount_amount","total_amount","customer_id","referrer_id","metadata.payment_mean"]}}; // \OpenAPI\Client\Model\OrdersExportCreateRequestBody | Specify which order parameters you would like to export.

try {
    $result = $apiInstance->createOrderExport($ordersExportCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrderExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ordersExportCreateRequestBody** | [**\OpenAPI\Client\Model\OrdersExportCreateRequestBody**](../Model/OrdersExportCreateRequestBody.md)| Specify which order parameters you would like to export. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersExportCreateResponseBody**](../Model/OrdersExportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($orderId): \OpenAPI\Client\Model\OrdersGetResponseBody
```

Get Order

Retrieve an order.

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | Unique Voucherify order ID or order source ID.

try {
    $result = $apiInstance->getOrder($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Unique Voucherify order ID or order source ID. | |

### Return type

[**\OpenAPI\Client\Model\OrdersGetResponseBody**](../Model/OrdersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importOrders()`

```php
importOrders($ordersImportCreateRequestBodyItem): \OpenAPI\Client\Model\OrdersImportCreateResponseBody
```

Import Orders

🚧 Historical orders  This endpoint should only be used to import historical orders into Voucherify. For on-going synchronization, the create order and update order endpoints should be used. This is critical because this endpoint does not store events or launch distributions. # Limitations ## Import volume There can be only a single on-going order import per tenant per project at a given time. The user can schedule more imports but those extra imports will be scheduled to run in sequence one by one.   ## Maximum count of orders in single import There is a 2000 limit but we might decide to change it to a lower / higher value at any given time depending if we find this value is too high or too low with time. # Notifications There are no notifications on the Dashboard because this import is launched via the API. # Triggered actions    If you import orders with customers, then a logic will be scheduled responsible for placing these customers into segments and refreshing the segments summary. Consequently, this update will trigger  - **customers entering into segments**  - **distributions** based on any rules tied to customer entering segment(s) - **earning rules** based on the customer entering segment(s) # What is not triggered 1. No webhooks are triggered during the import of orders - for both orders and upserted products / skus.   2. Distributions based on Order Update, Order Paid, Order Created and Order Cancelled. In other words if you have a distribution based on Order Paid and you import an order with a PAID status, the distribution is not going to be triggered.     3. No events are created during the import of orders - for both orders and upserted products / skus. In other words you wont see any events in the Activity tab in the Dashboard such as Order created or Order paid. If you are additionally upserting products / skus, then you wont see the Product created events listed, etc.    4. Earning rules based on Order Paid wont be triggered. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ordersImportCreateRequestBodyItem = [{"source_id":"orderImport14","status":"PAID","metadata":{"location_id":["L1","L2"],"payment_mean":["paypal","credit-card"]},"customer":{"source_id":"bob2.smith@email.com","name":"Bob Smith","description":"A nice customer","email":"bob.smith@email.com","phone":"+1 933 222 3333","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-01-01"},"referrer":{"source_id":"jane.smith@email.com","name":"Jane Smith","description":"A really nice customer","email":"jane.smith@email.com","phone":"+1 933 222 3334","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":false},"birthday":"2022-03-03"},"items":[{"source_id":"prod_1","related_object":"product","quantity":2,"product":{"name":"Apple iPhone 12","price":70000,"metadata":{"color":["silver"],"vendor":"mall"},"override":true}},{"source_id":"ComicBook_1","related_object":"sku","quantity":1,"product":{"source_id":"Books","name":"Comic Books1","price":1600,"metadata":{"color":["silver"],"vendor":"Bookstore1"},"override":true},"sku":{"sku":"Comics1","source_id":"ComicBook_1","price":1600,"metadata":{"color":["golden"],"vendor":"islands"},"override":true}}]},{"source_id":"orderImport15","status":"PAID","metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]},"customer":{"source_id":"bob2.smith@email.com"},"referrer":{"source_id":"jane.smith@email.com"},"items":[{"source_id":"ComicBook_1","quantity":4,"related_object":"sku","sku":{"source_id":"ComicBook_1"}},{"source_id":"vase_1","quantity":1,"related_object":"product","product":{"source_id":"vase_1"}}]},{"source_id":"orderImport16","status":"FULFILLED","metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]},"customer":{"id":"cust_LMY4ZylSdUYB1J4tzqNcl5VV"},"referrer":{"id":"cust_Vzck5i8U3OhcEUFY6MKhN9Rv"},"items":[{"product_id":"prod_0b72b0bd64d198e3ae","quantity":2},{"sku_id":"sku_0b1621b319d248b79f","quantity":2}]},{"source_id":"orderImport17","status":"CANCELED","amount":7000,"metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]}},{"source_id":"orderImport18","status":"CREATED","metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]},"items":[{"source_id":"ComicBook_1","amount":900,"related_object":"sku"},{"source_id":"vase_1","amount":2000,"related_object":"product"}]},{"source_id":"orderImport19","status":"CREATED","metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]},"items":[{"amount":900},{"amount":2000}]},{"source_id":"orderImport20","status":"CREATED","metadata":{"location_id":["L3"],"payment_mean":["wire-transfer"]},"items":[{"price":900,"quantity":2},{"price":2000,"quantity":3}]}]; // \OpenAPI\Client\Model\OrdersImportCreateRequestBodyItem[] | The request body is sent in the form of an array of order objects.

try {
    $result = $apiInstance->importOrders($ordersImportCreateRequestBodyItem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->importOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ordersImportCreateRequestBodyItem** | [**\OpenAPI\Client\Model\OrdersImportCreateRequestBodyItem[]**](../Model/OrdersImportCreateRequestBodyItem.md)| The request body is sent in the form of an array of order objects. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersImportCreateResponseBody**](../Model/OrdersImportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrders()`

```php
listOrders($limit, $page, $order): \OpenAPI\Client\Model\OrdersListResponseBody
```

List Orders

Returns a list of orders.

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListOrders(); // ParameterOrderListOrders | This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listOrders($limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->listOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListOrders**](../Model/.md)| This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersListResponseBody**](../Model/OrdersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOrder()`

```php
updateOrder($orderId, $ordersUpdateRequestBody): \OpenAPI\Client\Model\OrdersUpdateResponseBody
```

Update Order

Updates the specified order by setting the values of the parameters passed in the request body. Any parameters not provided will be left unchanged.

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


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderId = 'orderId_example'; // string | Unique Voucherify order ID or order source ID.
$ordersUpdateRequestBody = {"status":"CANCELED"}; // \OpenAPI\Client\Model\OrdersUpdateRequestBody | Specify the parameters of the order that are to be updated.

try {
    $result = $apiInstance->updateOrder($orderId, $ordersUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Unique Voucherify order ID or order source ID. | |
| **ordersUpdateRequestBody** | [**\OpenAPI\Client\Model\OrdersUpdateRequestBody**](../Model/OrdersUpdateRequestBody.md)| Specify the parameters of the order that are to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrdersUpdateResponseBody**](../Model/OrdersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
