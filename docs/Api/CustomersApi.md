# OpenAPI\Client\CustomersApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /v1/customers | Create Customer |
| [**customerPermanentlyDeletion()**](CustomersApi.md#customerPermanentlyDeletion) | **POST** /v1/customers/{customerId}/permanent-deletion | Delete Customer Permanently |
| [**deleteCustomer()**](CustomersApi.md#deleteCustomer) | **DELETE** /v1/customers/{customerId} | Delete Customer |
| [**getCustomer()**](CustomersApi.md#getCustomer) | **GET** /v1/customers/{customerId} | Get Customer |
| [**importCustomersUsingCsv()**](CustomersApi.md#importCustomersUsingCsv) | **POST** /v1/customers/importCSV | Import and Update Customers using CSV |
| [**listCustomerActivity()**](CustomersApi.md#listCustomerActivity) | **GET** /v1/customers/{customerId}/activity | List Customer Activity |
| [**listCustomerRedeemables()**](CustomersApi.md#listCustomerRedeemables) | **GET** /v1/customers/{customerId}/redeemables | List Customer&#39;s Redeemables |
| [**listCustomerSegments()**](CustomersApi.md#listCustomerSegments) | **GET** /v1/customers/{customerId}/segments | List Customer&#39;s Segments |
| [**listCustomers()**](CustomersApi.md#listCustomers) | **GET** /v1/customers | List Customers |
| [**updateCustomer()**](CustomersApi.md#updateCustomer) | **PUT** /v1/customers/{customerId} | Update Customer |
| [**updateCustomersConsents()**](CustomersApi.md#updateCustomersConsents) | **PUT** /v1/customers/{customerId}/consents | Update Customer&#39;s consents [Deprecated] |
| [**updateCustomersInBulk()**](CustomersApi.md#updateCustomersInBulk) | **POST** /v1/customers/bulk/async | Update Customers in Bulk |
| [**updateCustomersMetadataInBulk()**](CustomersApi.md#updateCustomersMetadataInBulk) | **POST** /v1/customers/metadata/async | Update Customers&#39; Metadata in Bulk |


## `createCustomer()`

```php
createCustomer($customersCreateRequestBody): \OpenAPI\Client\Model\CustomersCreateResponseBody
```

Create Customer

Creates a customer object.  📘 Upsert Mode  If you pass an id or a source_id that already exists in the customer database, Voucherify will return a related customer object with updated fields.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customersCreateRequestBody = {"source_id":"source_123","name":"Bob Smith","description":"A frequent customer","email":"bob.smith@email.com","phone":"+1 933 222 3333","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-01-01"}; // \OpenAPI\Client\Model\CustomersCreateRequestBody | Create a customer with specified parameters.

try {
    $result = $apiInstance->createCustomer($customersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customersCreateRequestBody** | [**\OpenAPI\Client\Model\CustomersCreateRequestBody**](../Model/CustomersCreateRequestBody.md)| Create a customer with specified parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersCreateResponseBody**](../Model/CustomersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPermanentlyDeletion()`

```php
customerPermanentlyDeletion($customerId): \OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBody
```

Delete Customer Permanently

The organization user can remove consumer data permanently from the Voucherify system by using this API method. It deletes all customer data and connected resources. It makes the customer profile forgotten by Voucherify.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify customers id or source_id.

try {
    $result = $apiInstance->customerPermanentlyDeletion($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->customerPermanentlyDeletion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify customers id or source_id. | |

### Return type

[**\OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBody**](../Model/CustomersPermanentDeletionCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomer()`

```php
deleteCustomer($customerId)
```

Delete Customer

This method deletes a customer.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify customers id or source_id.

try {
    $apiInstance->deleteCustomer($customerId);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify customers id or source_id. | |

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

## `getCustomer()`

```php
getCustomer($customerId): \OpenAPI\Client\Model\CustomersGetResponseBody
```

Get Customer

Retrieve customer details.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify customers id or source_id.

try {
    $result = $apiInstance->getCustomer($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify customers id or source_id. | |

### Return type

[**\OpenAPI\Client\Model\CustomersGetResponseBody**](../Model/CustomersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCustomersUsingCsv()`

```php
importCustomersUsingCsv($file): \OpenAPI\Client\Model\CustomersImportCsvCreateResponseBody
```

Import and Update Customers using CSV

This API method lets you import or update customer data. To get a proper and valid response, please send a CSV file with data separated by commas.   # Request Example # CSV File Format The CSV file has to include headers in the first line. All properties which cannot be mapped to standard customer fields will be added to the metadata object.  📘 Standard customer fields mapping  **No spaces allowed in field names**    Id, Name, Email, Phone, Birthdate, Source_id, Address_line_1, Address_line_2, Address_Postal_Code, Address_City, Address_State, Address_Country, Description, Metadata_name_1, Metadata_name_2 # Update Customers using CSV If you would like to update customers data, you can do it using the CSV file with new data. However, remember to include a source_id in your CSV file to manage the update successfully. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importCustomersUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->importCustomersUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersImportCsvCreateResponseBody**](../Model/CustomersImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerActivity()`

```php
listCustomerActivity($customerId, $limit, $order, $startingAfterId, $startDate, $endDate, $campaignId, $campaignType, $category, $type): \OpenAPI\Client\Model\CustomersActivityListResponseBody
```

List Customer Activity

Retrieve customer activities.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify customers id or source ID of the customer who performed the activities.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderCreatedAt(); // ParameterOrderCreatedAt | Apply this filter to order the events according the date and time when it was created.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must begin on. Represented in ISO 8601 format.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.
$campaignId = 'campaignId_example'; // string | Requests only events related to specific campaign identified by its ID.
$campaignType = new \OpenAPI\Client\Model\ParameterCampaignType(); // ParameterCampaignType | Filters related customers activity for the selected campaign types. Allowed values:  DISCOUNT_COUPONS, REFERRAL_PROGRAM, GIFT_VOUCHERS, PROMOTION, LOYALTY_PROGRAM.
$category = new \OpenAPI\Client\Model\ParameterActivityCategory(); // ParameterActivityCategory | Filters activities for actions or effects. Allowed values:  ACTION, EFFECT.
$type = 'type_example'; // string | Event name of the customer event.

try {
    $result = $apiInstance->listCustomerActivity($customerId, $limit, $order, $startingAfterId, $startDate, $endDate, $campaignId, $campaignType, $category, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerActivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify customers id or source ID of the customer who performed the activities. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderCreatedAt**](../Model/.md)| Apply this filter to order the events according the date and time when it was created. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |
| **startDate** | **\DateTime**| Timestamp representing the date and time which results must begin on. Represented in ISO 8601 format. | [optional] |
| **endDate** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |
| **campaignId** | **string**| Requests only events related to specific campaign identified by its ID. | [optional] |
| **campaignType** | [**ParameterCampaignType**](../Model/.md)| Filters related customers activity for the selected campaign types. Allowed values:  DISCOUNT_COUPONS, REFERRAL_PROGRAM, GIFT_VOUCHERS, PROMOTION, LOYALTY_PROGRAM. | [optional] |
| **category** | [**ParameterActivityCategory**](../Model/.md)| Filters activities for actions or effects. Allowed values:  ACTION, EFFECT. | [optional] |
| **type** | **string**| Event name of the customer event. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersActivityListResponseBody**](../Model/CustomersActivityListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerRedeemables()`

```php
listCustomerRedeemables($customerId, $limit, $order, $startingAfterId, $filters): \OpenAPI\Client\Model\CustomersRedeemablesListResponseBody
```

List Customer's Redeemables

Retrieves all the redeemables that have been assigned to the customer. To use this endpoint, you must have the following permissions: - Read Customers (customers.details.read)

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Unique identifier of a customer represented by an internal customer ID or customer source ID.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListRedeemables(); // ParameterOrderListRedeemables | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListCustomerRedeemables(); // ParameterFiltersListCustomerRedeemables | Filters for listing customer redeemables.

try {
    $result = $apiInstance->listCustomerRedeemables($customerId, $limit, $order, $startingAfterId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerRedeemables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| Unique identifier of a customer represented by an internal customer ID or customer source ID. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListRedeemables**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |
| **filters** | [**ParameterFiltersListCustomerRedeemables**](../Model/.md)| Filters for listing customer redeemables. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersRedeemablesListResponseBody**](../Model/CustomersRedeemablesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomerSegments()`

```php
listCustomerSegments($customerId): \OpenAPI\Client\Model\CustomersSegmentsListResponseBody
```

List Customer's Segments

Returns the list of segments IDs to which the customer belongs to.   If you pass a customerId which is not stored and recognized by Voucherify as an existing customer in the system, the response will generate a list of segments that the customer would potentialy qualify for if they were to become a customer tracked in the system.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | Unique identifier of a customer represented by an internal customer ID or customer source ID.

try {
    $result = $apiInstance->listCustomerSegments($customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomerSegments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| Unique identifier of a customer represented by an internal customer ID or customer source ID. | |

### Return type

[**\OpenAPI\Client\Model\CustomersSegmentsListResponseBody**](../Model/CustomersSegmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomers()`

```php
listCustomers($limit, $page, $email, $city, $name, $segmentId, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $order, $startingAfter): \OpenAPI\Client\Model\CustomersListResponseBody
```

List Customers

Returns a list of customers.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$email = 'email_example'; // string | Limit the customers to the ones that have this specific email address.
$city = 'city_example'; // string | Limit the customers to the ones that are located in the specified city.
$name = 'name_example'; // string | Filter customers by the name property.
$segmentId = 'segmentId_example'; // string | Filter customers by the segment id.
$createdAtBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was created.
$createdAtAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was created.
$updatedAtBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was updated last time.
$updatedAtAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter customers by date customer was updated last time.
$order = new \OpenAPI\Client\Model\ParameterOrderListCustomers(); // ParameterOrderListCustomers | This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A cursor for pagination. This is a date-time value that defines your place in the list based on created_at property from the customer object. For instance, if you make a list request and receive 100 objects, ending with an object created at 2020-05-24T13:43:09.024Z, your subsequent call can include starting_after 2020-05-24T13:43:09.024Z in order to fetch the next page of the list.

try {
    $result = $apiInstance->listCustomers($limit, $page, $email, $city, $name, $segmentId, $createdAtBefore, $createdAtAfter, $updatedAtBefore, $updatedAtAfter, $order, $startingAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->listCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **email** | **string**| Limit the customers to the ones that have this specific email address. | [optional] |
| **city** | **string**| Limit the customers to the ones that are located in the specified city. | [optional] |
| **name** | **string**| Filter customers by the name property. | [optional] |
| **segmentId** | **string**| Filter customers by the segment id. | [optional] |
| **createdAtBefore** | **\DateTime**| Filter customers by date customer was created. | [optional] |
| **createdAtAfter** | **\DateTime**| Filter customers by date customer was created. | [optional] |
| **updatedAtBefore** | **\DateTime**| Filter customers by date customer was updated last time. | [optional] |
| **updatedAtAfter** | **\DateTime**| Filter customers by date customer was updated last time. | [optional] |
| **order** | [**ParameterOrderListCustomers**](../Model/.md)| This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfter** | **\DateTime**| A cursor for pagination. This is a date-time value that defines your place in the list based on created_at property from the customer object. For instance, if you make a list request and receive 100 objects, ending with an object created at 2020-05-24T13:43:09.024Z, your subsequent call can include starting_after 2020-05-24T13:43:09.024Z in order to fetch the next page of the list. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersListResponseBody**](../Model/CustomersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomer()`

```php
updateCustomer($customerId, $customersUpdateRequestBody): \OpenAPI\Client\Model\CustomersUpdateResponseBody
```

Update Customer

Updates the specified customer by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify customers id or source_id.
$customersUpdateRequestBody = {"name":"Alice McDonald","email":"alice.mdconald@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-01-01","birthday":"2022-01-02"}; // \OpenAPI\Client\Model\CustomersUpdateRequestBody | Specify the parameters to be updated.

try {
    $result = $apiInstance->updateCustomer($customerId, $customersUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify customers id or source_id. | |
| **customersUpdateRequestBody** | [**\OpenAPI\Client\Model\CustomersUpdateRequestBody**](../Model/CustomersUpdateRequestBody.md)| Specify the parameters to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersUpdateResponseBody**](../Model/CustomersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersConsents()`

```php
updateCustomersConsents($customerId, $body)
```

Update Customer's consents [Deprecated]

Update marketing permissions for the specified customer. ❗️ Deprecated  This endpoint is deprecated. The feature of managing consents will be soon removed from Voucherify, including this endpoint.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customerId = 'customerId_example'; // string | A Voucherify unique customer identifier or source ID.
$body = {"cnst_6jQ5XcUOLnj5L7ImQAdBsJ1I":true,"cnst_VCmucIvAsmDYw2PPAok6bcYy":false}; // object | Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use unsubscribed as a consent identifier and true as its value.   ## Examples  Opt-out from all communication:

try {
    $apiInstance->updateCustomersConsents($customerId, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersConsents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customerId** | **string**| A Voucherify unique customer identifier or source ID. | |
| **body** | **object**| Key-value pairs where the key is the consent identifier and value is a boolean that identifies if a customer has given the consent or not. To deny all consents use unsubscribed as a consent identifier and true as its value.   ## Examples  Opt-out from all communication: | [optional] |

### Return type

void (empty response body)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersInBulk()`

```php
updateCustomersInBulk($customersUpdateInBulkRequestBody): \OpenAPI\Client\Model\CustomersUpdateInBulkResponseBody
```

Update Customers in Bulk

Updates customers in one asynchronous operation. The request can include up to **10 MB** of data. The response returns a unique asynchronous action ID. Use this ID in the query paramater of the GET Async Action endpoint to check, e.g.: - The status of your request (in queue, in progress, done, or failed) - Resources that failed to be updated - The report file with details about the update If a customer object is not found, it is **upserted**. This is shown in the report file in the GET Async Action endpoint. The upserted resources have value false in the found column and true in the updated column. This API request starts a process that affects Voucherify data in bulk. In the case of small jobs (like bulk update), the request is put into a queue and processed when every other bulk request placed in the queue prior to this request is finished.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customersUpdateInBulkRequestBody = [{"source_id":"John.Smith@email.com","name":"John Smith","email":"john.smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthday":"2022-04-04"},{"source_id":"Jane.Smith@email.com","name":"Jane Smith","email":"Jane.Smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthday":"2022-03-03"},{"source_id":"Sally.Smith@email.com","name":"Sally Smith","email":"Sally.Smith@email.com","description":"Updating customer data","phone":"+1 (132) 222-2222","address":{"city":"New York","country":"United States","line_1":"123 Main St.","line_2":"APT 3 BLG 4","postal_code":"10001","state":"NY"},"metadata":{"lang":"en","test":true},"birthdate":"2022-02-02"}]; // \OpenAPI\Client\Model\CustomersUpdateInBulkRequestBody[] | List the customer fields to be updated in each customer object.

try {
    $result = $apiInstance->updateCustomersInBulk($customersUpdateInBulkRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customersUpdateInBulkRequestBody** | [**\OpenAPI\Client\Model\CustomersUpdateInBulkRequestBody[]**](../Model/CustomersUpdateInBulkRequestBody.md)| List the customer fields to be updated in each customer object. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersUpdateInBulkResponseBody**](../Model/CustomersUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomersMetadataInBulk()`

```php
updateCustomersMetadataInBulk($customersMetadataUpdateInBulkRequestBody): \OpenAPI\Client\Model\CustomersMetadataUpdateInBulkResponseBody
```

Update Customers' Metadata in Bulk

Updates metadata parameters for a list of customers. Every resource in the list will receive the metadata defined in the request. The request can include up to **10 MB** of data. The response returns a unique asynchronous action ID. Use this ID in the query paramater of the GET Async Action endpoint to check, e.g.: - The status of your request (in queue, in progress, done, or failed) - Resources that failed to be updated - The report file with details about the update If a product object is not found, it is **upserted**. This is shown in the report file in the GET Async Action endpoint. The upserted resources have value false in the found column and true in the updated column. This API request starts a process that affects Voucherify data in bulk. In the case of small jobs (like bulk update), the request is put into a queue and processed when every other bulk request placed in the queue prior to this request is finished.

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


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customersMetadataUpdateInBulkRequestBody = {"source_ids":["source_123","source_456"],"metadata":{"lang":"en","test":false}}; // \OpenAPI\Client\Model\CustomersMetadataUpdateInBulkRequestBody | List the source_ids of the customers you would like to update with the metadata key/value pairs.

try {
    $result = $apiInstance->updateCustomersMetadataInBulk($customersMetadataUpdateInBulkRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomersMetadataInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customersMetadataUpdateInBulkRequestBody** | [**\OpenAPI\Client\Model\CustomersMetadataUpdateInBulkRequestBody**](../Model/CustomersMetadataUpdateInBulkRequestBody.md)| List the source_ids of the customers you would like to update with the metadata key/value pairs. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CustomersMetadataUpdateInBulkResponseBody**](../Model/CustomersMetadataUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
