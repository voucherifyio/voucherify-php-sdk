# OpenAPI\Client\BinApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBinEntry()**](BinApi.md#deleteBinEntry) | **DELETE** /v1/trash-bin/{binEntryId} | Delete Bin Entry |
| [**listBinEntries()**](BinApi.md#listBinEntries) | **GET** /v1/trash-bin | List Bin Entries |


## `deleteBinEntry()`

```php
deleteBinEntry($binEntryId)
```

Delete Bin Entry

Deletes permanently a bin entry with a given ID.The following resources can be moved to the bin and permanently deleted: - campaigns - vouchers - products - SKUs To use this endpoint and delete a given resource type, you must have the following permissions: - vouchers.delete to delete a voucher, - campaigns.delete to delete a campaign, - products.delete to delete a product or SKU.

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


$apiInstance = new OpenAPI\Client\Api\BinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binEntryId = 'binEntryId_example'; // string | Provide the unique identifier of the bin entry.

try {
    $apiInstance->deleteBinEntry($binEntryId);
} catch (Exception $e) {
    echo 'Exception when calling BinApi->deleteBinEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **binEntryId** | **string**| Provide the unique identifier of the bin entry. | |

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

## `listBinEntries()`

```php
listBinEntries($limit, $order, $startingAfterId, $filters): \OpenAPI\Client\Model\TrashBinListResponseBody
```

List Bin Entries

Retrieves a list of resources moved to the bin. The following resources can be moved to the bin: - campaigns - vouchers - products - SKUs To use this endpoint, you must have the following permissions: - vouchers.read - campaigns.read - products.read

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


$apiInstance = new OpenAPI\Client\Api\BinApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListBin(); // ParameterOrderListBin | Orders the bin entries according to the bin entry ID. The dash - preceding a sorting option means sorting in a descending order.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the results starting after a result with the given ID.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListBin(); // ParameterFiltersListBin | Filters for listing bin entries.

try {
    $result = $apiInstance->listBinEntries($limit, $order, $startingAfterId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinApi->listBinEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListBin**](../Model/.md)| Orders the bin entries according to the bin entry ID. The dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the results starting after a result with the given ID. | [optional] |
| **filters** | [**ParameterFiltersListBin**](../Model/.md)| Filters for listing bin entries. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TrashBinListResponseBody**](../Model/TrashBinListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
