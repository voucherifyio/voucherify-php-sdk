# OpenAPI\Client\VouchersApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVoucher()**](VouchersApi.md#createVoucher) | **POST** /v1/vouchers/{code} | Create Voucher |
| [**deleteVoucher()**](VouchersApi.md#deleteVoucher) | **DELETE** /v1/vouchers/{code} | Delete Voucher |
| [**disableVoucher()**](VouchersApi.md#disableVoucher) | **POST** /v1/vouchers/{code}/disable | Disable Voucher |
| [**enableVoucher()**](VouchersApi.md#enableVoucher) | **POST** /v1/vouchers/{code}/enable | Enable Voucher |
| [**exportVoucherTransactions()**](VouchersApi.md#exportVoucherTransactions) | **POST** /v1/vouchers/{code}/transactions/export | Export Voucher Transactions |
| [**generateRandomCode()**](VouchersApi.md#generateRandomCode) | **POST** /v1/vouchers | Generate Random Code |
| [**getVoucher()**](VouchersApi.md#getVoucher) | **GET** /v1/vouchers/{code} | Get Voucher |
| [**importVouchers()**](VouchersApi.md#importVouchers) | **POST** /v1/vouchers/import | Import Vouchers |
| [**importVouchersUsingCsv()**](VouchersApi.md#importVouchersUsingCsv) | **POST** /v1/vouchers/importCSV | Import Vouchers using CSV |
| [**listVoucherTransactions()**](VouchersApi.md#listVoucherTransactions) | **GET** /v1/vouchers/{code}/transactions | List Voucher Transactions |
| [**listVouchers()**](VouchersApi.md#listVouchers) | **GET** /v1/vouchers | List Vouchers |
| [**releaseValidationSession()**](VouchersApi.md#releaseValidationSession) | **DELETE** /v1/vouchers/{code}/sessions/{sessionKey} | Release Validation Session |
| [**updateVoucher()**](VouchersApi.md#updateVoucher) | **PUT** /v1/vouchers/{code} | Update Voucher |
| [**updateVoucherBalance()**](VouchersApi.md#updateVoucherBalance) | **POST** /v1/vouchers/{code}/balance | Add or Remove Voucher Balance |
| [**updateVouchersInBulk()**](VouchersApi.md#updateVouchersInBulk) | **POST** /v1/vouchers/bulk/async | Update Vouchers in Bulk |
| [**updateVouchersMetadataInBulk()**](VouchersApi.md#updateVouchersMetadataInBulk) | **POST** /v1/vouchers/metadata/async | Update Vouchers&#39; Metadata in Bulk |


## `createVoucher()`

```php
createVoucher($code, $vouchersCreateWithSpecificCodeRequestBody): \OpenAPI\Client\Model\VouchersCreateResponseBody
```

Create Voucher

Create a standalone voucher. You can choose to create a GIFT_VOUCHER, a DISCOUNT_VOUCHER, or a LOYALTY_CARD. The code path parameter can use all letters of the English alphabet, Arabic numerals and special characters.   When you create a new voucher, you can specify a type to create it. Creating a new voucher will create a new stand alone voucher if no campaign name or campaign_id is provided. In case of the loyalty card, a campaign name is required.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.
$vouchersCreateWithSpecificCodeRequestBody = {"category":"New Customers","type":"DISCOUNT_VOUCHER","discount":{"percent_off":10,"type":"PERCENT","effect":"APPLY_TO_ORDER"},"start_date":"2022-01-01T00:00:00Z","expiration_date":"2022-12-31T23:59:59Z","validity_timeframe":{"duration":"PT1H","interval":"P2D"},"validity_day_of_week":[1,2,3,4,5],"active":false,"additional_info":"This voucher will remain inactive until enabled.","redemption":{"quantity":10},"metadata":{"test":true,"locale":"de-en"},"validation_rules":["val_4j7DCRm2IS59"]}; // \OpenAPI\Client\Model\VouchersCreateWithSpecificCodeRequestBody | Specify the details of the voucher that you would like to create.

try {
    $result = $apiInstance->createVoucher($code, $vouchersCreateWithSpecificCodeRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->createVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |
| **vouchersCreateWithSpecificCodeRequestBody** | [**\OpenAPI\Client\Model\VouchersCreateWithSpecificCodeRequestBody**](../Model/VouchersCreateWithSpecificCodeRequestBody.md)| Specify the details of the voucher that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersCreateResponseBody**](../Model/VouchersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVoucher()`

```php
deleteVoucher($code, $force)
```

Delete Voucher

Deletes a voucher. This operation cannot be undone. Additionally, this operation removes any redemptions on the voucher. If the force parameter is set to false or not set at all, the voucher will be moved to the bin.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.
$force = True; // bool | If this flag is set to true, the voucher will be removed permanently. If it is set to false or not set at all, the voucher will be moved to the bin. Going forward, the user will be able to create another voucher with exactly the same code.

try {
    $apiInstance->deleteVoucher($code, $force);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->deleteVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |
| **force** | **bool**| If this flag is set to true, the voucher will be removed permanently. If it is set to false or not set at all, the voucher will be moved to the bin. Going forward, the user will be able to create another voucher with exactly the same code. | [optional] |

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

## `disableVoucher()`

```php
disableVoucher($code): \OpenAPI\Client\Model\VouchersDisableResponseBody
```

Disable Voucher

There are various times when youll want to manage a vouchers accessibility. This can be done by two API methods for managing the voucher state - *enable* and *disable*.   ___ This method sets the voucher state to **inactive**. The voucher cannot be redeemed.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u.

try {
    $result = $apiInstance->disableVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->disableVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u. | |

### Return type

[**\OpenAPI\Client\Model\VouchersDisableResponseBody**](../Model/VouchersDisableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableVoucher()`

```php
enableVoucher($code): \OpenAPI\Client\Model\VouchersEnableResponseBody
```

Enable Voucher

There are various times when youll want to manage a vouchers accessibility. This can be done by two API methods for managing the voucher state - *enable* and *disable*.   ___ The method sets the voucher state to **active**. The voucher can be redeemed - only if the redemption occurs after the start date and the voucher is not expired.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u.

try {
    $result = $apiInstance->enableVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->enableVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u. | |

### Return type

[**\OpenAPI\Client\Model\VouchersEnableResponseBody**](../Model/VouchersEnableResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportVoucherTransactions()`

```php
exportVoucherTransactions($code, $vouchersTransactionsExportCreateRequestBody): \OpenAPI\Client\Model\VouchersTransactionsExportCreateResponseBody
```

Export Voucher Transactions

Export transactions that are associated with credit movements on a gift card or loyalty card.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = GIFT-CARD-1; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u.
$vouchersTransactionsExportCreateRequestBody = {"parameters":{"order":"-created_at","fields":["id","type","source_id","reason","balance","amount","created_at","voucher_id","campaign_id","details","source"]}}; // \OpenAPI\Client\Model\VouchersTransactionsExportCreateRequestBody | Specify the parameters for the transaction export.

try {
    $result = $apiInstance->exportVoucherTransactions($code, $vouchersTransactionsExportCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->exportVoucherTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u. | |
| **vouchersTransactionsExportCreateRequestBody** | [**\OpenAPI\Client\Model\VouchersTransactionsExportCreateRequestBody**](../Model/VouchersTransactionsExportCreateRequestBody.md)| Specify the parameters for the transaction export. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersTransactionsExportCreateResponseBody**](../Model/VouchersTransactionsExportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateRandomCode()`

```php
generateRandomCode($vouchersCreateRequestBody): \OpenAPI\Client\Model\VouchersCreateResponseBody
```

Generate Random Code

Create a standalone voucher. You can choose to create a GIFT_VOUCHER, a DISCOUNT_VOUCHER, or a LOYALTY_CARD.  When you create a new voucher, you can specify a type to create it. Creating a new voucher will create a new stand alone voucher if no campaign name or campaign_id is provided. In case of the loyalty card, a campaign name is required. You can optionally use the code parameter to define a specific code or the code_config parameter to design rules for Voucherify API to create a random code. If neither of the two parameters are passed, then a random code is generated by the Voucherify API. This method will return an error when trying to create a voucher that already exists.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vouchersCreateRequestBody = {"category":"New Customers","code":"NEW-WELCOME-COUPON","type":"DISCOUNT_VOUCHER","campaign_id":"camp_Y6dLsYIZloGqP8izufXY6SSJ","discount":{"percent_off":10,"type":"PERCENT","effect":"APPLY_TO_ORDER"},"start_date":"2016-01-01T00:00:00Z","expiration_date":"2022-12-31T23:59:59Z","validity_timeframe":{"duration":"PT1H","interval":"P2D"},"validity_day_of_week":[1,2,3,4,5],"active":false,"additional_info":"This voucher will remain inactive until enabled.","redemption":{"quantity":10},"metadata":{"test":true,"locale":"de-en"},"validation_rules":["val_4j7DCRm2IS59"]}; // \OpenAPI\Client\Model\VouchersCreateRequestBody | Specify the details of the voucher that you would like to create.

try {
    $result = $apiInstance->generateRandomCode($vouchersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->generateRandomCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vouchersCreateRequestBody** | [**\OpenAPI\Client\Model\VouchersCreateRequestBody**](../Model/VouchersCreateRequestBody.md)| Specify the details of the voucher that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersCreateResponseBody**](../Model/VouchersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVoucher()`

```php
getVoucher($code): \OpenAPI\Client\Model\VouchersGetResponseBody
```

Get Voucher

Retrieves the voucher with the given code or unique Voucherify ID. You can either pass the voucher ID which was assigned by Voucherify, e.g., v_7HxHkf4VAkMuc8u4lZs78lyRwhRze5UE, or the code of the voucher as the path parameter value, e.g., 7fjWdr.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.

try {
    $result = $apiInstance->getVoucher($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersGetResponseBody**](../Model/VouchersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importVouchers()`

```php
importVouchers($vouchersImportCreateItemRequestBody): \OpenAPI\Client\Model\VouchersImportCreateResponseBody
```

Import Vouchers

Import standalone vouchers and gift cards into the repository.  📘 Important notes  - **Start and expiration dates** need to be provided in compliance with the ISO 8601 norms. For example, 2020-03-11T09:00:00.000Z.  - Custom code attributes (not supported by-default) need to be added as code **metadata**.  - You **cannot import the same codes** to a single Voucherify Project. Any parameters not provided in the payload will be left blank or null. For both **standalone discount vouchers and gift cards**, you can import the following fields:   - code - category - active - type - start_date - expiration_date - redemption.quantity - additional_info - metadata For **gift cards**, you can also import the following field: - gift.amount For **discount vouchers**, you can import the discount object. The object will slightly vary depending on the type of discount. Each discount type **requires** the type to be defined in the import.   Fields other than the ones listed above wont be imported. Even if provided, they will be silently skipped. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vouchersImportCreateItemRequestBody = [{"code":"PROMO-CODE30OFF-NO-EFFECT","category":"new customer acquisition","type":"DISCOUNT_VOUCHER","active":true,"discount":{"amount_off":3000,"type":"AMOUNT"},"start_date":"2020-12-01T23:00:00Z","expiration_date":"2023-12-19T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code1"},{"code":"PROMO-CODE30-PERCENT-NO-EFFECT","type":"DISCOUNT_VOUCHER","active":false,"discount":{"percent_off":30,"type":"PERCENT"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"GIFT-CARD-100","type":"GIFT_VOUCHER","active":true,"category":"new customer acquisition","gift":{"amount":10000},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":5},"metadata":{"unit":"EUR"},"additional_info":"secret-GIFT-code2"},{"code":"PROMO-CODE1-PERCENT-EFFECT-ORDER","type":"DISCOUNT_VOUCHER","active":false,"discount":{"percent_off":30,"type":"PERCENT","effect":"APPLY_TO_ORDER"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE2-PERCENT-EFFECT-ITEM","type":"DISCOUNT_VOUCHER","active":false,"discount":{"percent_off":30,"type":"PERCENT","effect":"APPLY_TO_ITEMS"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE1-PERCENT-NO-EFFECT-REDEEMED-QUANTITY-ATTRIBUTE-DOESNT-GET-PASSED","type":"DISCOUNT_VOUCHER","active":false,"discount":{"percent_off":30,"type":"PERCENT"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1,"redeemed_quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE1-AMOUNT-EFFECT-ITEMS-PROPORTIONALLY","type":"DISCOUNT_VOUCHER","active":false,"discount":{"amount_off":30,"type":"AMOUNT","effect":"APPLY_TO_ITEMS_PROPORTIONALLY"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE1-FIXED-EFFECT-ORDER","type":"DISCOUNT_VOUCHER","active":false,"discount":{"fixed_amount":30,"type":"FIXED","effect":"APPLY_TO_ORDER"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE1-UNIT-SINGLE-ITEM-EFFECT-MISSING","type":"DISCOUNT_VOUCHER","active":false,"discount":{"unit_off":1,"unit_type":"prod_0a9f9aeddb019a42db","type":"UNIT","effect":"ADD_MISSING_ITEMS"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE2-UNIT-MULTIPLE-ITEMS","type":"DISCOUNT_VOUCHER","active":true,"discount":{"type":"UNIT","effect":"ADD_MANY_ITEMS","units":[{"unit_off":1,"unit_type":"prod_0a9f9aeddb019a42db","effect":"ADD_MISSING_ITEMS"},{"unit_off":1,"unit_type":"prod_0a9f9aeddb019a42db","effect":"ADD_NEW_ITEMS"}]},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"},{"code":"PROMO-CODE1-SHIPPING","type":"DISCOUNT_VOUCHER","active":false,"discount":{"type":"UNIT","unit_off":1,"unit_type":"prod_5h1pp1ng","effect":"ADD_MISSING_ITEMS"},"start_date":"2020-12-10T23:00:00Z","expiration_date":"2023-12-31T23:00:00Z","redemption":{"quantity":1},"metadata":{"unit":"EUR"},"additional_info":"secret-code2"}]; // \OpenAPI\Client\Model\VouchersImportCreateItemRequestBody[] | The request body is an array of objects. Each object contains details about a specific voucher.

try {
    $result = $apiInstance->importVouchers($vouchersImportCreateItemRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->importVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vouchersImportCreateItemRequestBody** | [**\OpenAPI\Client\Model\VouchersImportCreateItemRequestBody[]**](../Model/VouchersImportCreateItemRequestBody.md)| The request body is an array of objects. Each object contains details about a specific voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersImportCreateResponseBody**](../Model/VouchersImportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importVouchersUsingCsv()`

```php
importVouchersUsingCsv($file): \OpenAPI\Client\Model\VouchersImportCsvCreateResponseBody
```

Import Vouchers using CSV

Import standalone vouchers into the repository using a CSV file. The CSV file has to include headers in the first line. All properties listed in the file headers that cannot be mapped to standard voucher fields will be added to the metadata object.   You can find an example CSV file [here](https://support.voucherify.io/article/45-import-codes-and-share-them-digitally#coupons). ___  📘 Standard voucher fields mapping  - Go to the import vouchers endpoint to see all standard CSV fields description (body params section).  - Supported CSV file headers: Code,Voucher Type,Value,Discount Type,Category,Start Date,Expiration Date,Redemption Limit,Redeemed Quantity, Redeemed Amount,Active,Additional Info,Custom Metadata Property Name - **Start and expiration dates** need to be provided in compliance with the ISO 8601 norms. For example, 2020-03-11T09:00:00.000Z.       - YYYY-MM-DD     - YYYY-MM-DDTHH     - YYYY-MM-DDTHH:mm     - YYYY-MM-DDTHH:mm:ss     - YYYY-MM-DDTHH:mm:ssZ     - YYYY-MM-DDTHH:mm:ssZ     - YYYY-MM-DDTHH:mm:ss.SSSZ  - Custom code attributes (not supported by-default) need to be added as code **metadata**.  - You **cannot import the same codes** to a single Voucherify Project.  📘 Categories  In the structure representing your data, you can define a category that the voucher belongs to. You can later use the category of a voucher to group and search by specific criteria in the Dashboard and using the List Vouchers endpoint. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importVouchersUsingCsv($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->importVouchersUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File path. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersImportCsvCreateResponseBody**](../Model/VouchersImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVoucherTransactions()`

```php
listVoucherTransactions($code, $limit, $order, $startingAfterId): \OpenAPI\Client\Model\VouchersTransactionsListResponseBody
```

List Voucher Transactions

List transactions that are associated with credit movements on a gift card or loyalty card.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListTransactions(); // ParameterOrderListTransactions | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the transactions starting after a transaction with the given ID.

try {
    $result = $apiInstance->listVoucherTransactions($code, $limit, $order, $startingAfterId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->listVoucherTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListTransactions**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the transactions starting after a transaction with the given ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersTransactionsListResponseBody**](../Model/VouchersTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVouchers()`

```php
listVouchers($limit, $page, $category, $campaignId, $customer, $campaign, $createdAt, $updatedAt, $order, $code, $ids): \OpenAPI\Client\Model\VouchersListResponseBody
```

List Vouchers

Returns a list of vouchers. By default, the vouchers are returned sorted by creation date, with the most recent vouchers appearing first. A maximum of 100 vouchers are returned in the response. When you get a list of vouchers, you can optionally specify query parameters to customize the number of vouchers returned per call using limit, which page of vouchers to return using page, sort the vouchers using the order query parameter and more. This method will return an error when trying to return a limit of more than 100 vouchers.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$category = 'category_example'; // string | Limit search results to vouchers within the specified category.
$campaignId = 'campaignId_example'; // string | Limit search results to vouchers within the specified campaign
$customer = 'customer_example'; // string | A tracking identifier of a customer who is the holder of the vouchers. It can be an id generated by Voucherify or the source_id. Remember to use the proper URL escape codes if the source_id contains special characters.
$campaign = 'campaign_example'; // string | A unique campaign name, identifies the parent campaign.
$createdAt = new \OpenAPI\Client\Model\ParameterCreatedBeforeAfter(); // ParameterCreatedBeforeAfter | A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z
$updatedAt = new \OpenAPI\Client\Model\ParameterUpdatedBeforeAfter(); // ParameterUpdatedBeforeAfter | A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z
$order = new \OpenAPI\Client\Model\ParameterOrderVouchers(); // ParameterOrderVouchers | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$code = 'code_example'; // string
$ids = array('ids_example'); // string[]

try {
    $result = $apiInstance->listVouchers($limit, $page, $category, $campaignId, $customer, $campaign, $createdAt, $updatedAt, $order, $code, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->listVouchers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **category** | **string**| Limit search results to vouchers within the specified category. | [optional] |
| **campaignId** | **string**| Limit search results to vouchers within the specified campaign | [optional] |
| **customer** | **string**| A tracking identifier of a customer who is the holder of the vouchers. It can be an id generated by Voucherify or the source_id. Remember to use the proper URL escape codes if the source_id contains special characters. | [optional] |
| **campaign** | **string**| A unique campaign name, identifies the parent campaign. | [optional] |
| **createdAt** | [**ParameterCreatedBeforeAfter**](../Model/.md)| A filter on the list based on the object created_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [created_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **updatedAt** | [**ParameterUpdatedBeforeAfter**](../Model/.md)| A filter on the list based on the object updated_at field. The value is a dictionary with the following options: before, after. A date value must be presented in ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). An example: [updated_at][before] 2017-09-08T13:52:18.227Z | [optional] |
| **order** | [**ParameterOrderVouchers**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **code** | **string**|  | [optional] |
| **ids** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VouchersListResponseBody**](../Model/VouchersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseValidationSession()`

```php
releaseValidationSession($code, $sessionKey)
```

Release Validation Session

Manually release a validation session that has been set up for the voucher. This method undos the actions that are explained in our guide on how a validation session was established, you can read more here.   📘 Release Session using Dashboard  You can also use the Validations Manager in the Dashboard to unlock sessions. [Read more](https://support.voucherify.io/article/16-dashboard-sections#validations).

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify.
$sessionKey = ssn_yQGMTeKBSw8OOuFPwlBEjzGy8d8VA9Ts; // string | A unique session identifier.

try {
    $apiInstance->releaseValidationSession($code, $sessionKey);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->releaseValidationSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify. | |
| **sessionKey** | **string**| A unique session identifier. | |

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

## `updateVoucher()`

```php
updateVoucher($code, $vouchersUpdateRequestBody): \OpenAPI\Client\Model\VouchersUpdateResponseBody
```

Update Voucher

Updates the specified voucher by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged. Fields other than the ones listed in the request body wont be modified. Even if provided, they will be silently skipped.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A unique **code** that identifies the voucher.
$vouchersUpdateRequestBody = {"category":"Second","type":"DISCOUNT_VOUCHER","discount":{"type":"PERCENT","percent_off":45,"percent_off_formula":"IF(ORDER_AMOUNT > 100;CUSTOMER_METADATA(\"age\");CUSTOMER_METADATA(\"age\") / 2)","amount_limit":1800,"effect":"APPLY_TO_ORDER"},"start_date":"2020-02-01T00:00:00Z","expiration_date":"2023-12-31T23:59:59Z","validity_timeframe":{"duration":"PT2H","interval":"P3D"},"validity_day_of_week":[0,1,2],"active":false,"additional_info":"This voucher can be used with other coupons. Please feel free to do so.","metadata":{"Season":"Winter"}}; // \OpenAPI\Client\Model\VouchersUpdateRequestBody | Specify the parameters to be updated.

try {
    $result = $apiInstance->updateVoucher($code, $vouchersUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A unique **code** that identifies the voucher. | |
| **vouchersUpdateRequestBody** | [**\OpenAPI\Client\Model\VouchersUpdateRequestBody**](../Model/VouchersUpdateRequestBody.md)| Specify the parameters to be updated. | |

### Return type

[**\OpenAPI\Client\Model\VouchersUpdateResponseBody**](../Model/VouchersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVoucherBalance()`

```php
updateVoucherBalance($code, $vouchersBalanceUpdateRequestBody): \OpenAPI\Client\Model\VouchersBalanceUpdateResponseBody
```

Add or Remove Voucher Balance

Add balance to an existing gift card or loyalty card.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u.
$vouchersBalanceUpdateRequestBody = {"amount":10000}; // \OpenAPI\Client\Model\VouchersBalanceUpdateRequestBody | Provide the amount to be added to/subtracted from the voucher.

try {
    $result = $apiInstance->updateVoucherBalance($code, $vouchersBalanceUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVoucherBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| A **code** that identifies the voucher or a unique voucher ID assigned by Voucherify, i.e. v_TzD19aeNiqGc9LWciMWknyEZT8IW7u4u. | |
| **vouchersBalanceUpdateRequestBody** | [**\OpenAPI\Client\Model\VouchersBalanceUpdateRequestBody**](../Model/VouchersBalanceUpdateRequestBody.md)| Provide the amount to be added to/subtracted from the voucher. | |

### Return type

[**\OpenAPI\Client\Model\VouchersBalanceUpdateResponseBody**](../Model/VouchersBalanceUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVouchersInBulk()`

```php
updateVouchersInBulk($vouchersUpdateInBulkItemRequestBody): \OpenAPI\Client\Model\VouchersUpdateInBulkResponseBody
```

Update Vouchers in Bulk

Updates specific metadata parameters for each code, respectively, in one asynchronous operation. The request can include up to **10 MB** of data. Upserts are not supported.  🚧    Currently, only **metadata** updates are supported. The response returns a unique asynchronous action ID. Use this ID in the query paramater of the GET Async Action endpoint to check, e.g.: - The status of your request (in queue, in progress, done, or failed) - Resources that failed to be updated - The report file with details about the update This API request starts a process that affects Voucherify data in bulk. In the case of small jobs (like bulk update), the request is put into a queue and processed when every other bulk request placed in the queue prior to this request is finished.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vouchersUpdateInBulkItemRequestBody = [{"code":"example_code","metadata":{"lang":"en","test":false,"MetadataTest":"Update metadata","update_value":1,"next_update_date":"2022-11-11T09:00:00.000Z"}},{"code":"example_code2","metadata":{"lang":"pl","test":false,"MetadataTest":"Update metadata","update_value":2}}]; // \OpenAPI\Client\Model\VouchersUpdateInBulkItemRequestBody[] | List the codes to be updated with the metadata key/value pairs for that code.

try {
    $result = $apiInstance->updateVouchersInBulk($vouchersUpdateInBulkItemRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVouchersInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vouchersUpdateInBulkItemRequestBody** | [**\OpenAPI\Client\Model\VouchersUpdateInBulkItemRequestBody[]**](../Model/VouchersUpdateInBulkItemRequestBody.md)| List the codes to be updated with the metadata key/value pairs for that code. | |

### Return type

[**\OpenAPI\Client\Model\VouchersUpdateInBulkResponseBody**](../Model/VouchersUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVouchersMetadataInBulk()`

```php
updateVouchersMetadataInBulk($vouchersMetadataUpdateInBulkRequestBody): \OpenAPI\Client\Model\VouchersMetadataUpdateInBulkResponseBody
```

Update Vouchers' Metadata in Bulk

Updates metadata parameters for a list of codes. Every resource in the list will receive the metadata defined in the request. The request can include up to **10 MB** of data. Upserts are not supported. The response returns a unique asynchronous action ID. Use this ID in the query paramater of the GET Async Action endpoint to check, e.g.: - The status of your request (in queue, in progress, done, or failed) - Resources that failed to be updated - The report file with details about the update This API request starts a process that affects Voucherify data in bulk. In the case of small jobs (like bulk update), the request is put into a queue and processed when every other bulk request placed in the queue prior to this request is finished.

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


$apiInstance = new OpenAPI\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vouchersMetadataUpdateInBulkRequestBody = {"codes":["PROMO-CODE810","PROMO-CODE726"],"metadata":{"lang":"en","authorized_internally":true}}; // \OpenAPI\Client\Model\VouchersMetadataUpdateInBulkRequestBody | List the codes of the vouchers you would like to update with the metadata key/value pairs.

try {
    $result = $apiInstance->updateVouchersMetadataInBulk($vouchersMetadataUpdateInBulkRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->updateVouchersMetadataInBulk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vouchersMetadataUpdateInBulkRequestBody** | [**\OpenAPI\Client\Model\VouchersMetadataUpdateInBulkRequestBody**](../Model/VouchersMetadataUpdateInBulkRequestBody.md)| List the codes of the vouchers you would like to update with the metadata key/value pairs. | |

### Return type

[**\OpenAPI\Client\Model\VouchersMetadataUpdateInBulkResponseBody**](../Model/VouchersMetadataUpdateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
