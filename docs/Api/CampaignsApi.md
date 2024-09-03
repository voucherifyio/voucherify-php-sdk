# OpenAPI\Client\CampaignsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addVoucherWithSpecificCodeToCampaign()**](CampaignsApi.md#addVoucherWithSpecificCodeToCampaign) | **POST** /v1/campaigns/{campaignId}/vouchers/{code} | Add Voucher with Specific Code to Campaign |
| [**addVouchersToCampaign()**](CampaignsApi.md#addVouchersToCampaign) | **POST** /v1/campaigns/{campaignId}/vouchers | Add Vouchers to Campaign |
| [**createCampaign()**](CampaignsApi.md#createCampaign) | **POST** /v1/campaigns | Create Campaign |
| [**deleteCampaign()**](CampaignsApi.md#deleteCampaign) | **DELETE** /v1/campaigns/{campaignId} | Delete Campaign |
| [**disableCampaign()**](CampaignsApi.md#disableCampaign) | **POST** /v1/campaigns/{campaignId}/disable | Disable Campaign |
| [**enableCampaign()**](CampaignsApi.md#enableCampaign) | **POST** /v1/campaigns/{campaignId}/enable | Enable Campaign |
| [**getCampaign()**](CampaignsApi.md#getCampaign) | **GET** /v1/campaigns/{campaignId} | Get Campaign |
| [**importVouchersToCampaign()**](CampaignsApi.md#importVouchersToCampaign) | **POST** /v1/campaigns/{campaignId}/import | Import Vouchers to Campaign |
| [**importVouchersToCampaignUsingCsv()**](CampaignsApi.md#importVouchersToCampaignUsingCsv) | **POST** /v1/campaigns/{campaignId}/importCSV | Import Vouchers to Campaign by CSV |
| [**listCampaigns()**](CampaignsApi.md#listCampaigns) | **GET** /v1/campaigns | List Campaigns |
| [**updateCampaign()**](CampaignsApi.md#updateCampaign) | **PUT** /v1/campaigns/{campaignId} | Update Campaign |


## `addVoucherWithSpecificCodeToCampaign()`

```php
addVoucherWithSpecificCodeToCampaign($campaign_id, $code, $campaigns_vouchers_create_request_body): \OpenAPI\Client\Model\CampaignsVouchersCreateResponseBody
```

Add Voucher with Specific Code to Campaign

This method gives a possibility to add a new voucher to an existing campaign. The voucher definition will be inherited from the definition kept in the campaign profile. However, you are able to overwrite a few properties inherited from the campaign.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign to which voucher will be added. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$code = 'code_example'; // string | A custom **code** that identifies the voucher.
$campaigns_vouchers_create_request_body = {"category_id":"cat_0bb81a481615a37b5e","start_date":"2022-09-24T00:00:00Z","expiration_date":"2022-09-25T23:59:59Z","active":false,"redemption":{"quantity":null},"additional_info":"Voucher added using API","metadata":{"Season":"Fall"}}; // \OpenAPI\Client\Model\CampaignsVouchersCreateRequestBody | Specify the voucher parameters that you would like to overwrite.

try {
    $result = $apiInstance->addVoucherWithSpecificCodeToCampaign($campaign_id, $code, $campaigns_vouchers_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->addVoucherWithSpecificCodeToCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the campaign to which voucher will be added. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |
| **code** | **string**| A custom **code** that identifies the voucher. | |
| **campaigns_vouchers_create_request_body** | [**\OpenAPI\Client\Model\CampaignsVouchersCreateRequestBody**](../Model/CampaignsVouchersCreateRequestBody.md)| Specify the voucher parameters that you would like to overwrite. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsVouchersCreateResponseBody**](../Model/CampaignsVouchersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addVouchersToCampaign()`

```php
addVouchersToCampaign($campaign_id, $vouchers_count, $campaigns_vouchers_create_in_bulk_request_body): \OpenAPI\Client\Model\CampaignsVouchersCreateCombinedResponseBody
```

Add Vouchers to Campaign

This method gives the possibility to push new vouchers to an existing campaign. New vouchers will inherit properties from the campaign profile. However, it is possible to overwrite some of them in the request body. If you provide an optional code_config parameter with a voucher code configuration, then it will be used to generate new voucher codes. Otherwise, the voucher code configuration from the campaign will be used. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign to which voucher(s) will be added. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$vouchers_count = 56; // int | Number of vouchers that should be added.
$campaigns_vouchers_create_in_bulk_request_body = new \OpenAPI\Client\Model\CampaignsVouchersCreateInBulkRequestBody(); // \OpenAPI\Client\Model\CampaignsVouchersCreateInBulkRequestBody | Specify the voucher parameters that you would like to overwrite.

try {
    $result = $apiInstance->addVouchersToCampaign($campaign_id, $vouchers_count, $campaigns_vouchers_create_in_bulk_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->addVouchersToCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the campaign to which voucher(s) will be added. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |
| **vouchers_count** | **int**| Number of vouchers that should be added. | [optional] |
| **campaigns_vouchers_create_in_bulk_request_body** | [**\OpenAPI\Client\Model\CampaignsVouchersCreateInBulkRequestBody**](../Model/CampaignsVouchersCreateInBulkRequestBody.md)| Specify the voucher parameters that you would like to overwrite. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsVouchersCreateCombinedResponseBody**](../Model/CampaignsVouchersCreateCombinedResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaign()`

```php
createCampaign($campaigns_create_request_body): \OpenAPI\Client\Model\CampaignsCreateResponseBody
```

Create Campaign

Method to create a batch of vouchers aggregated in one campaign. You can choose a variety of voucher types and define a unique pattern for generating codes.    📘 Global uniqueness  All campaign codes are unique across the whole project. Voucherify will not allow you to generate 2 campaigns with the same coupon code.    🚧 Code generation status  This is an asynchronous action; you cant read or modify a newly created campaign until the code generation is completed. See the creation_status field in the campaign object description.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaigns_create_request_body = {"name":"Discount Campaign 4","campaign_type":"DISCOUNT_COUPONS","join_once":true,"type":"AUTO_UPDATE","category_id":"cat_0bb343dee3cdb5ec0c","start_date":"2020-08-16T00:00:00Z","expiration_date":"2023-12-26T00:00:00Z","vouchers_count":3,"voucher":{"type":"DISCOUNT_VOUCHER","discount":{"percent_off":10,"type":"PERCENT"},"redemption":{"quantity":10},"code_config":{"pattern":"10OFF-#######"}},"validity_timeframe":{"interval":"P2D","duration":"P1D"},"validity_day_of_week":[0,1,2],"activity_duration_after_publishing":"P24D","use_voucher_metadata_schema":false,"metadata":{"region":"AMER"}}; // \OpenAPI\Client\Model\CampaignsCreateRequestBody | Specify the details of the campaign that you would like to create.

try {
    $result = $apiInstance->createCampaign($campaigns_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaigns_create_request_body** | [**\OpenAPI\Client\Model\CampaignsCreateRequestBody**](../Model/CampaignsCreateRequestBody.md)| Specify the details of the campaign that you would like to create. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsCreateResponseBody**](../Model/CampaignsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaign()`

```php
deleteCampaign($campaign_id, $force): \OpenAPI\Client\Model\CampaignsDeleteResponseBody
```

Delete Campaign

Deletes a campaign and all related vouchers. This action cannot be undone. Also, this method immediately removes any redemptions on the voucher. If the force parameter is set to false or not set at all, the campaign and all related vouchers will be moved to the bin. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$force = True; // bool | If this flag is set to true, the campaign and related vouchers will be removed permanently. If it is set to false or not set at all, the campaign and related vouchers will be moved to the bin. Going forward, the user will be able to create the next campaign with exactly the same name.

try {
    $result = $apiInstance->deleteCampaign($campaign_id, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->deleteCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |
| **force** | **bool**| If this flag is set to true, the campaign and related vouchers will be removed permanently. If it is set to false or not set at all, the campaign and related vouchers will be moved to the bin. Going forward, the user will be able to create the next campaign with exactly the same name. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsDeleteResponseBody**](../Model/CampaignsDeleteResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableCampaign()`

```php
disableCampaign($campaign_id): object
```

Disable Campaign

There are various times when youll want to manage a campaigns accessibility. This can be done by two API methods for managing the campaign state - *enable* and *disable*.   Sets campaign state to **inactive**. The vouchers in this campaign can no longer be redeemed.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign being disabled. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.

try {
    $result = $apiInstance->disableCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->disableCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the campaign being disabled. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |

### Return type

**object**

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableCampaign()`

```php
enableCampaign($campaign_id): object
```

Enable Campaign

There are various times when youll want to manage a campaigns accessibility. This can be done by two API methods for managing the campaign state - *enable* and *disable*.   Sets campaign state to **active**. The vouchers in this campaign can be redeemed - only if the redemption occurs after the start date of the campaign and voucher and the voucher and campaign are not expired.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign being enabled. You can either pass the campaign ID, which was assigned by Voucherify or the name of the campaign as the path parameter value.

try {
    $result = $apiInstance->enableCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->enableCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the campaign being enabled. You can either pass the campaign ID, which was assigned by Voucherify or the name of the campaign as the path parameter value. | |

### Return type

**object**

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaign()`

```php
getCampaign($campaign_id): \OpenAPI\Client\Model\CampaignsGetResponseBody
```

Get Campaign

Retrieves the campaign with the given campaign ID or campaign name.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.

try {
    $result = $apiInstance->getCampaign($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |

### Return type

[**\OpenAPI\Client\Model\CampaignsGetResponseBody**](../Model/CampaignsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importVouchersToCampaign()`

```php
importVouchersToCampaign($campaign_id, $campaigns_import_voucher_item): \OpenAPI\Client\Model\CampaignsImportCreateResponseBody
```

Import Vouchers to Campaign

Imports vouchers to an **existing** campaign. This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The ID of an existing campaign to which youre importing the codes. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$campaigns_import_voucher_item = [{"code":"CODE7","category":"First","redemption":{"quantity":1},"metadata":{"season":"Fall"},"additional_info":"secret-code1","active":true},{"code":"CODE8","category":"Second","redemption":{"quantity":18},"metadata":{"season":"Fall"},"additional_info":"secret-code1","active":true},{"code":"CODE9","category_id":"cat_0bb343dee3cdb5ec0c","redemption":{"quantity":4},"metadata":{"season":"Fall"},"additional_info":"secret-code1","active":true}]; // \OpenAPI\Client\Model\CampaignsImportVoucherItem[] | Discount type, expiration date and the remaining attributes will be taken from the Campaign settings.

try {
    $result = $apiInstance->importVouchersToCampaign($campaign_id, $campaigns_import_voucher_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->importVouchersToCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The ID of an existing campaign to which youre importing the codes. You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |
| **campaigns_import_voucher_item** | [**\OpenAPI\Client\Model\CampaignsImportVoucherItem[]**](../Model/CampaignsImportVoucherItem.md)| Discount type, expiration date and the remaining attributes will be taken from the Campaign settings. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsImportCreateResponseBody**](../Model/CampaignsImportCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importVouchersToCampaignUsingCsv()`

```php
importVouchersToCampaignUsingCsv($campaign_id, $file): \OpenAPI\Client\Model\CampaignsImportCsvCreateResponseBody
```

Import Vouchers to Campaign by CSV

Imports vouchers to an **existing** campaign.   The CSV file has to include headers in the first line.  This API request starts a process that affects Voucherify data in bulk.  In case of small jobs (like bulk update) the request is put into a queue and processed once every other bulk request placed in the queue prior to this request is finished. However, when the job takes a longer time (like vouchers generation) then it is processed in small portions in a round-robin fashion. When there is a list of vouchers generation scheduled, then they will all have the IN_PROGRESS status shortly. This way, small jobs added just after scheduling big jobs of the same type will be processed in a short time window.  The result will return the async ID. You can verify the status of your request via this API request.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | The campaign ID or name of the campaign being enabled. You can either pass the campaign ID, which was assigned by Voucherify or the name of the campaign as the path parameter value.
$file = "/path/to/file.txt"; // \SplFileObject | File path.

try {
    $result = $apiInstance->importVouchersToCampaignUsingCsv($campaign_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->importVouchersToCampaignUsingCsv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| The campaign ID or name of the campaign being enabled. You can either pass the campaign ID, which was assigned by Voucherify or the name of the campaign as the path parameter value. | |
| **file** | **\SplFileObject****\SplFileObject**| File path. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsImportCsvCreateResponseBody**](../Model/CampaignsImportCsvCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaigns()`

```php
listCampaigns($limit, $page, $campaign_type, $expand, $order): \OpenAPI\Client\Model\CampaignsListResponseBody
```

List Campaigns

Retrieve a list of campaigns in a project.  The campaigns are returned sorted by creation date, with the most recent campaigns appearing first.   When you get a list of campaigns, you can optionally specify query parameters to customize the amount of campaigns returned per call using limit, which page of campaigns to return using page, sort the campaigns using the order query parameter and filter the results by the campaign_type. This method will return an error when trying to return a limit of more than 100 campaigns.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$campaign_type = new \OpenAPI\Client\Model\ParameterCampaignType(); // ParameterCampaignType | This attribute allows filtering by campaign type.
$expand = new \OpenAPI\Client\Model\ParameterExpandListCampaigns(); // ParameterExpandListCampaigns | Include an expanded categories object in the response.
$order = new \OpenAPI\Client\Model\ParameterOrderListCampaigns(); // ParameterOrderListCampaigns | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listCampaigns($limit, $page, $campaign_type, $expand, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->listCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **campaign_type** | [**ParameterCampaignType**](../Model/.md)| This attribute allows filtering by campaign type. | [optional] |
| **expand** | [**ParameterExpandListCampaigns**](../Model/.md)| Include an expanded categories object in the response. | [optional] |
| **order** | [**ParameterOrderListCampaigns**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsListResponseBody**](../Model/CampaignsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaign()`

```php
updateCampaign($campaign_id, $campaigns_update_request_body): \OpenAPI\Client\Model\CampaignsUpdateResponseBody
```

Update Campaign

Updates the specified campaign by setting the values of the parameters passed in the request body. Any parameters not provided in the payload will be left unchanged.  Fields other than the ones listed in the request body wont be modified. Even if provided, they will be silently skipped.     ## Vouchers will be affected  This method will update vouchers aggregated in the campaign. It will affect all vouchers that are not published or redeemed yet.

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


$apiInstance = new OpenAPI\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value.
$campaigns_update_request_body = {"description":"New description"}; // \OpenAPI\Client\Model\CampaignsUpdateRequestBody | Specify the campaign parameters to be updated.

try {
    $result = $apiInstance->updateCampaign($campaign_id, $campaigns_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->updateCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| You can either pass the campaign ID, which was assigned by Voucherify, or the name of the campaign as the path parameter value. | |
| **campaigns_update_request_body** | [**\OpenAPI\Client\Model\CampaignsUpdateRequestBody**](../Model/CampaignsUpdateRequestBody.md)| Specify the campaign parameters to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\CampaignsUpdateResponseBody**](../Model/CampaignsUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
