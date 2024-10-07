# OpenAPI\Client\ReferralsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**referralsAddHolders()**](ReferralsApi.md#referralsAddHolders) | **POST** /v1/referrals/members/{memberId}/holders | Add Referral Code Holders |
| [**referralsAddHolders1()**](ReferralsApi.md#referralsAddHolders1) | **POST** /v1/referrals/{campaignId}/members/{memberId}/holders | Add Referral Code Holders |
| [**referralsCodeHolders()**](ReferralsApi.md#referralsCodeHolders) | **GET** /v1/referrals/{campaignId}/members/{memberId}/holders | List Referral Code Holders |
| [**referralsCodeHolders1()**](ReferralsApi.md#referralsCodeHolders1) | **GET** /v1/referrals/members/{memberId}/holders | List Referral Code Holders |
| [**referralsRemoveHolder()**](ReferralsApi.md#referralsRemoveHolder) | **DELETE** /v1/referrals/members/{memberId}/holders/{holderId} | Remove Referral Card Holder |
| [**referralsRemoveHolder1()**](ReferralsApi.md#referralsRemoveHolder1) | **DELETE** /v1/referrals/{campaignId}/members/{memberId}/holders/{holderId} | Remove Referral Card Holder |


## `referralsAddHolders()`

```php
referralsAddHolders($memberId, $referralsMembersHoldersCreateInBulkRequestBody): \OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkResponseBody
```

Add Referral Code Holders

Adds new holders to a referral code as **referees**. The data sent in the request is upserted into the customer data. If the request returns an error even for one customer, you have to resend the whole request. Customer data is upserted if the data for all customers is correct. To use this endpoint, you must have the following permissions: - Create and modify Customers and Segments (customers.modify) - Publish Voucher (vouchers.publish)  👍 To add a holder as a referer, use the Create Publication endpoint.  📘 Alternative endpoint This endpoint is an alternative to the Add Referral Code Holders endpoint. The URL was re-designed to retrieve the referral member holders without providing the campaignId as a path paremeter.

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$referralsMembersHoldersCreateInBulkRequestBody = {"holders":[{"source_id":"cst-prsn01","name":"Alex Doe","email":"alex-doe@your.domain.com","country":"England"},{"source_id":"cst-prsn02","name":"Alex Joe","email":"alex-joe@your.domain.com","country":"Wales"}],"metadata":{"influencer_code":true}}; // \OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkRequestBody | Specify the customer data to be upserted as redeemable holders.

try {
    $result = $apiInstance->referralsAddHolders($memberId, $referralsMembersHoldersCreateInBulkRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsAddHolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **referralsMembersHoldersCreateInBulkRequestBody** | [**\OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkRequestBody**](../Model/ReferralsMembersHoldersCreateInBulkRequestBody.md)| Specify the customer data to be upserted as redeemable holders. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkResponseBody**](../Model/ReferralsMembersHoldersCreateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referralsAddHolders1()`

```php
referralsAddHolders1($campaignId, $memberId, $referralsMembersHoldersCreateInBulkRequestBody): \OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkResponseBody
```

Add Referral Code Holders

Adds new holders to a referral code as **referees**. The data sent in the request is upserted into the customer data. If the request returns an error even for one customer, you have to resend the whole request. Customer data is upserted if the data for all customers is correct. To use this endpoint, you must have the following permissions: - Create and modify Customers and Segments (customers.modify) - Publish Voucher (vouchers.publish)  👍 To add a holder as a referer, use the Create Publication endpoint.

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique identifier of a referral program campaign.
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$referralsMembersHoldersCreateInBulkRequestBody = {"holders":[{"source_id":"cst-prsn01","name":"Alex Doe","email":"alex-doe@your.domain.com","country":"England"},{"source_id":"cst-prsn02","name":"Alex Joe","email":"alex-joe@your.domain.com","country":"Wales"}],"metadata":{"influencer_code":true}}; // \OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkRequestBody | Specify the customer data to be upserted as redeemable holders.

try {
    $result = $apiInstance->referralsAddHolders1($campaignId, $memberId, $referralsMembersHoldersCreateInBulkRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsAddHolders1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier of a referral program campaign. | |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **referralsMembersHoldersCreateInBulkRequestBody** | [**\OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkRequestBody**](../Model/ReferralsMembersHoldersCreateInBulkRequestBody.md)| Specify the customer data to be upserted as redeemable holders. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReferralsMembersHoldersCreateInBulkResponseBody**](../Model/ReferralsMembersHoldersCreateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referralsCodeHolders()`

```php
referralsCodeHolders($campaignId, $memberId, $limit, $order, $startingAfterId, $filters): \OpenAPI\Client\Model\ReferralsMembersHoldersListResponseBody
```

List Referral Code Holders

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique identifier of a referral program campaign.
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListRedeemables(); // ParameterOrderListRedeemables | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListReferralsRedeemableHolders(); // ParameterFiltersListReferralsRedeemableHolders | Filters for listing customer redeemables.

try {
    $result = $apiInstance->referralsCodeHolders($campaignId, $memberId, $limit, $order, $startingAfterId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsCodeHolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier of a referral program campaign. | |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListRedeemables**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |
| **filters** | [**ParameterFiltersListReferralsRedeemableHolders**](../Model/.md)| Filters for listing customer redeemables. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReferralsMembersHoldersListResponseBody**](../Model/ReferralsMembersHoldersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referralsCodeHolders1()`

```php
referralsCodeHolders1($memberId, $limit, $order, $startingAfterId, $filters): \OpenAPI\Client\Model\ReferralsMembersHoldersListResponseBody
```

List Referral Code Holders

Retrieves the holders of the referral code from a referral campaign. To use this endpoint, you must have the following permissions: - Read Customers (customers.details.read)  📘 Alternative endpoint This endpoint is an alternative to the List Member Holders endpoint. The URL was re-designed to retrieve the referral member holders without providing the campaignId as a path paremeter.

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListRedeemables(); // ParameterOrderListRedeemables | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the events starting after an event with the given ID.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListReferralsRedeemableHolders(); // ParameterFiltersListReferralsRedeemableHolders | Filters for listing customer redeemables.

try {
    $result = $apiInstance->referralsCodeHolders1($memberId, $limit, $order, $startingAfterId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsCodeHolders1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListRedeemables**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the events starting after an event with the given ID. | [optional] |
| **filters** | [**ParameterFiltersListReferralsRedeemableHolders**](../Model/.md)| Filters for listing customer redeemables. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReferralsMembersHoldersListResponseBody**](../Model/ReferralsMembersHoldersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referralsRemoveHolder()`

```php
referralsRemoveHolder($memberId, $holderId)
```

Remove Referral Card Holder

Removes the holder from a referral card. You can remove a referee only. To use this endpoint, you must have the following permissions: - Create and modify Customers and Segments (customers.modify) - Publish Voucher (vouchers.publish)  📘 Alternative endpoint This endpoint is an alternative to the Remove Referral Card Holder endpoint. The URL was re-designed to retrieve the referral member holders without providing the campaignId as a path paremeter.

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$holderId = 'holderId_example'; // string | Unique identifier of a redeemable holder.

try {
    $apiInstance->referralsRemoveHolder($memberId, $holderId);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsRemoveHolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **holderId** | **string**| Unique identifier of a redeemable holder. | |

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

## `referralsRemoveHolder1()`

```php
referralsRemoveHolder1($campaignId, $memberId, $holderId)
```

Remove Referral Card Holder

Removes the holder from a referral card. You can remove a referee only. To use this endpoint, you must have the following permissions: - Create and modify Customers and Segments (customers.modify) - Publish Voucher (vouchers.publish)

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


$apiInstance = new OpenAPI\Client\Api\ReferralsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = 'campaignId_example'; // string | Unique identifier of a referral program campaign.
$memberId = 'memberId_example'; // string | Unique referral code or its identifier.
$holderId = 'holderId_example'; // string | Unique identifier of a redeemable holder.

try {
    $apiInstance->referralsRemoveHolder1($campaignId, $memberId, $holderId);
} catch (Exception $e) {
    echo 'Exception when calling ReferralsApi->referralsRemoveHolder1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignId** | **string**| Unique identifier of a referral program campaign. | |
| **memberId** | **string**| Unique referral code or its identifier. | |
| **holderId** | **string**| Unique identifier of a redeemable holder. | |

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
