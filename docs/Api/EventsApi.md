# OpenAPI\Client\EventsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**trackCustomEvent()**](EventsApi.md#trackCustomEvent) | **POST** /v1/events | Track Custom Event |


## `trackCustomEvent()`

```php
trackCustomEvent($eventsCreateRequestBody): \OpenAPI\Client\Model\EventsCreateResponseBody
```

Track Custom Event

To track a custom event, you create an event object.   The event object must be linked to the customer who performs the action. If a customer doesnt exist in Voucherify, the customer will be created.

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


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventsCreateRequestBody = {"event":"event-name","customer":{"source_id":"referee-source_id"},"referral":{"code":"voucher-code","referrer_id":"referrer-source_id"}}; // \OpenAPI\Client\Model\EventsCreateRequestBody | Specify the details of the custom event.

try {
    $result = $apiInstance->trackCustomEvent($eventsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->trackCustomEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **eventsCreateRequestBody** | [**\OpenAPI\Client\Model\EventsCreateRequestBody**](../Model/EventsCreateRequestBody.md)| Specify the details of the custom event. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EventsCreateResponseBody**](../Model/EventsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
