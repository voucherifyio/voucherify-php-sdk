# OpenAPI\Client\LocationsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLocation()**](LocationsApi.md#getLocation) | **GET** /v1/locations/{locationId} | Get Location |
| [**listLocations()**](LocationsApi.md#listLocations) | **GET** /v1/locations | List Locations |


## `getLocation()`

```php
getLocation($locationId): \OpenAPI\Client\Model\LocationsGetResponseBody
```

Get Location

Returns a location object.

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = 'locationId_example'; // string | The unique location ID.

try {
    $result = $apiInstance->getLocation($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **locationId** | **string**| The unique location ID. | |

### Return type

[**\OpenAPI\Client\Model\LocationsGetResponseBody**](../Model/LocationsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLocations()`

```php
listLocations($limit, $order, $filters, $endDate): \OpenAPI\Client\Model\LocationsListResponseBody
```

List Locations

Returns a list of your locations.

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


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = new \OpenAPI\Client\Model\ParameterOrderListLocations(); // ParameterOrderListLocations | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListLocations(); // ParameterFiltersListLocations | Filter the locations using one of the available filters.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A filter on the list based on the end date. This will filter out all locations whose end date falls before the specified date and time. A date value must be presented in the ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16).

try {
    $result = $apiInstance->listLocations($limit, $order, $filters, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->listLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | [**ParameterOrderListLocations**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **filters** | [**ParameterFiltersListLocations**](../Model/.md)| Filter the locations using one of the available filters. | [optional] |
| **endDate** | **\DateTime**| A filter on the list based on the end date. This will filter out all locations whose end date falls before the specified date and time. A date value must be presented in the ISO 8601 format (2016-11-16T14:14:31Z or 2016-11-16). | [optional] |

### Return type

[**\OpenAPI\Client\Model\LocationsListResponseBody**](../Model/LocationsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
