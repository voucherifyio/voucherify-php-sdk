# OpenAPI\Client\PublicationsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPublication()**](PublicationsApi.md#createPublication) | **POST** /v1/publications | Create Publication |
| [**createPublication1()**](PublicationsApi.md#createPublication1) | **GET** /v1/publications/create | Create Publication |
| [**listPublications()**](PublicationsApi.md#listPublications) | **GET** /v1/publications | List Publications |


## `createPublication()`

```php
createPublication($joinOnce, $publicationsCreateRequestBody): \OpenAPI\Client\Model\PublicationsCreateResponseBody
```

Create Publication

This method selects vouchers that are suitable for publication, adds a publish entry and returns the publication. A voucher is suitable for publication when its active and hasnt been published yet.    🚧 Clearly define the source of the voucher  You must clearly define which source you want to publish the voucher code from. It can either be a code from a campaign or a specific voucher identified by a code.    🚧 Publish multiple vouchers  In case you want to publish multiple vouchers within a single publication, you need to specify the campaign name and number of vouchers you want to publish.    📘 Auto-update campaign  In case you want to ensure the number of publishable codes increases automatically with the number of customers, you should use an **auto-update** campaign.

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


$apiInstance = new OpenAPI\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$joinOnce = True; // bool | Through this flag, you can control if a particular person gets only one and always the same code even if the app sends multiple publication requests. It means that if you have a referral program, a referrer is assigned only to one code if an integration sends publication requests more than once for the same customer.
$publicationsCreateRequestBody = {"campaign":{"name":"campaign-name"},"customer":{"source_id":"source-id","Name":"Customer Name","email":"customer email"},"voucher":"voucher-code","metadata":{"key":"value"}}; // \OpenAPI\Client\Model\PublicationsCreateRequestBody | Specify the publication parameters.

try {
    $result = $apiInstance->createPublication($joinOnce, $publicationsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->createPublication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **joinOnce** | **bool**| Through this flag, you can control if a particular person gets only one and always the same code even if the app sends multiple publication requests. It means that if you have a referral program, a referrer is assigned only to one code if an integration sends publication requests more than once for the same customer. | [optional] |
| **publicationsCreateRequestBody** | [**\OpenAPI\Client\Model\PublicationsCreateRequestBody**](../Model/PublicationsCreateRequestBody.md)| Specify the publication parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicationsCreateResponseBody**](../Model/PublicationsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPublication1()`

```php
createPublication1($customer, $joinOnce, $voucher, $campaign, $sourceId, $metadata): \OpenAPI\Client\Model\PublicationsCreateResponseBody
```

Create Publication

This method selects vouchers that are suitable for publication, adds a publish entry and returns the publication. A voucher is suitable for publication when its active and hasnt been published yet.  ❗️ Limited access  Access to this endpoint is limited. This endpoint is designed for specific integrations and the API keys need to be configured to access this endpoint. Navigate to the **Dashboard** &rarr; **Project Settings** &rarr; **General** &rarr; **Integration Keys** to set up a pair of API keys and use them to send the request.    🚧 Clearly define the source of the voucher  You must clearly define which source you want to publish the voucher code from. It can either be a code from a campaign or a specific voucher identified by a code.    🚧 Publish multiple vouchers  This endpoint does not support the publishing of multiple vouchers from a single campaign. In case you want to publish multiple vouchers within a single publication, you need to use a dedicated endpoint.    📘 Auto-update campaign  In case you want to ensure the number of publishable codes increases automatically with the number of customers, you should use an **auto-update** campaign.   # Example Request      ❗️ Required    Query param voucher OR campaign MUST be filled out. If you provide both, campaign param will be skipped.

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


$apiInstance = new OpenAPI\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = new \OpenAPI\Client\Model\Customer(); // Customer | Contains information about the customer to whom the publication was directed.
$joinOnce = True; // bool | Through this flag, you can control if a particular person gets only one and always the same code even if the app sends multiple publication requests. It means that if you have a referral program, a referrer is assigned only to one code if an integration sends publication requests more than once for the same customer.
$voucher = 'voucher_example'; // string | Code of voucher being published.
$campaign = new \OpenAPI\Client\Model\CreatePublicationCampaign(); // CreatePublicationCampaign | Create publication with campaign.
$sourceId = 'sourceId_example'; // string | The merchants publication ID if it is different from the Voucherify publication ID. Its an optional tracking identifier of a publication. It is really useful in case of an integration between multiple systems. It can be a publication ID from a CRM system, database or 3rd-party service. If source_id is provided only 1 voucher can be published per request.
$metadata = array('key' => new \stdClass); // object | The metadata object stores all custom attributes assigned to the publication. A set of key/value pairs that you can attach to a publication object. It can be useful for storing additional information about the publication in a structured format.

try {
    $result = $apiInstance->createPublication1($customer, $joinOnce, $voucher, $campaign, $sourceId, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->createPublication1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer** | [**Customer**](../Model/.md)| Contains information about the customer to whom the publication was directed. | |
| **joinOnce** | **bool**| Through this flag, you can control if a particular person gets only one and always the same code even if the app sends multiple publication requests. It means that if you have a referral program, a referrer is assigned only to one code if an integration sends publication requests more than once for the same customer. | [optional] |
| **voucher** | **string**| Code of voucher being published. | [optional] |
| **campaign** | [**CreatePublicationCampaign**](../Model/.md)| Create publication with campaign. | [optional] |
| **sourceId** | **string**| The merchants publication ID if it is different from the Voucherify publication ID. Its an optional tracking identifier of a publication. It is really useful in case of an integration between multiple systems. It can be a publication ID from a CRM system, database or 3rd-party service. If source_id is provided only 1 voucher can be published per request. | [optional] |
| **metadata** | [**object**](../Model/.md)| The metadata object stores all custom attributes assigned to the publication. A set of key/value pairs that you can attach to a publication object. It can be useful for storing additional information about the publication in a structured format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicationsCreateResponseBody**](../Model/PublicationsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPublications()`

```php
listPublications($limit, $page, $order, $campaign, $customer, $voucher, $result, $voucherType, $isReferralCode, $filters, $sourceId): \OpenAPI\Client\Model\PublicationsListResponseBody
```

List Publications

Retrieve a list of publications. To return a **particular** publication, you can use the source_id query parameter and provide the source_id of the publication you are looking for specifically. # Pagination  🚧 Important!  If you want to scroll through a huge set of records, it is recommended to use the Exports API. This API will return an error page_over_limit if you reach a page above 1000. # Filter Query The filters query parameter allows for joining multiple parameters with logical operators. The syntax looks as follows:  ## Operators:  ## Examples

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


$apiInstance = new OpenAPI\Client\Api\PublicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListPublications(); // ParameterOrderListPublications | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$campaign = 'campaign_example'; // string | Filters by a given campaign name.
$customer = 'customer_example'; // string | Filters by a unique customer ID.
$voucher = 'voucher_example'; // string | Filters by a given voucher code.
$result = new \OpenAPI\Client\Model\ParameterResultListPublications(); // ParameterResultListPublications | Filters by a publication result.
$voucherType = new \OpenAPI\Client\Model\ParameterVoucherTypeListPublications(); // ParameterVoucherTypeListPublications | Filters by a voucher type.
$isReferralCode = True; // bool | This filter works only for the true option. If set to true, the query returns only publications of codes from referral campaigns.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListPublications(); // ParameterFiltersListPublications | Filters for listing publications.
$sourceId = 'sourceId_example'; // string | Using this endpoint with a particular publication source_id, which was sent with the original request to create a publication, returns in the response, exactly the same code published initially because the code was assigned to the given publication. As a result, you can use this endpoint as a reference and return a code that was assigned in a publication by using a particular source_id.

try {
    $result = $apiInstance->listPublications($limit, $page, $order, $campaign, $customer, $voucher, $result, $voucherType, $isReferralCode, $filters, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicationsApi->listPublications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListPublications**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **campaign** | **string**| Filters by a given campaign name. | [optional] |
| **customer** | **string**| Filters by a unique customer ID. | [optional] |
| **voucher** | **string**| Filters by a given voucher code. | [optional] |
| **result** | [**ParameterResultListPublications**](../Model/.md)| Filters by a publication result. | [optional] |
| **voucherType** | [**ParameterVoucherTypeListPublications**](../Model/.md)| Filters by a voucher type. | [optional] |
| **isReferralCode** | **bool**| This filter works only for the true option. If set to true, the query returns only publications of codes from referral campaigns. | [optional] |
| **filters** | [**ParameterFiltersListPublications**](../Model/.md)| Filters for listing publications. | [optional] |
| **sourceId** | **string**| Using this endpoint with a particular publication source_id, which was sent with the original request to create a publication, returns in the response, exactly the same code published initially because the code was assigned to the given publication. As a result, you can use this endpoint as a reference and return a code that was assigned in a publication by using a particular source_id. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PublicationsListResponseBody**](../Model/PublicationsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
