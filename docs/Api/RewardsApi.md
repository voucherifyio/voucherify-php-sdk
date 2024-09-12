# OpenAPI\Client\RewardsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReward()**](RewardsApi.md#createReward) | **POST** /v1/rewards | Create Reward |
| [**createRewardAssignment()**](RewardsApi.md#createRewardAssignment) | **POST** /v1/rewards/{rewardId}/assignments | Create Reward Assignment |
| [**deleteReward()**](RewardsApi.md#deleteReward) | **DELETE** /v1/rewards/{rewardId} | Delete Reward |
| [**deleteRewardAssignment()**](RewardsApi.md#deleteRewardAssignment) | **DELETE** /v1/rewards/{rewardId}/assignments/{assignmentId} | Delete Reward Assignment |
| [**getReward()**](RewardsApi.md#getReward) | **GET** /v1/rewards/{rewardId} | Get Reward |
| [**getRewardAssignment()**](RewardsApi.md#getRewardAssignment) | **GET** /v1/rewards/{rewardId}/assignments/{assignmentId} | Get Reward Assignment |
| [**listRewardAssignments()**](RewardsApi.md#listRewardAssignments) | **GET** /v1/rewards/{rewardId}/assignments | List Reward Assignments |
| [**listRewards()**](RewardsApi.md#listRewards) | **GET** /v1/rewards | List Rewards |
| [**updateReward()**](RewardsApi.md#updateReward) | **PUT** /v1/rewards/{rewardId} | Update Reward |
| [**updateRewardAssignment()**](RewardsApi.md#updateRewardAssignment) | **PUT** /v1/rewards/{rewardId}/assignments/{assignmentId} | Update Reward Assignment |


## `createReward()`

```php
createReward($rewardsCreateRequestBody): \OpenAPI\Client\Model\RewardsCreateResponseBody
```

Create Reward

Create a new reward.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardsCreateRequestBody = {"name":"Digital - Gift Card Reward","type":"CAMPAIGN","metadata":{"Type":"Gift"},"parameters":{"campaign":{"id":"camp_hC2GdqYtOmTT45zfhib62cK1","balance":3000}}}; // \OpenAPI\Client\Model\RewardsCreateRequestBody | Define parameters of the new reward.

try {
    $result = $apiInstance->createReward($rewardsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->createReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardsCreateRequestBody** | [**\OpenAPI\Client\Model\RewardsCreateRequestBody**](../Model/RewardsCreateRequestBody.md)| Define parameters of the new reward. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsCreateResponseBody**](../Model/RewardsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRewardAssignment()`

```php
createRewardAssignment($rewardId, $rewardsAssignmentsCreateRequestBody): \OpenAPI\Client\Model\RewardsAssignmentsCreateResponseBody
```

Create Reward Assignment

Assigns a reward to a specified loyalty campaign.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$rewardsAssignmentsCreateRequestBody = {"campaign":"camp_OTuGGP90PivbvROsRvfM65El","parameters":{"loyalty":{"points":39}}}; // \OpenAPI\Client\Model\RewardsAssignmentsCreateRequestBody | Provide the campaign ID of the campaign to which the reward is to be assigned and define the cost of the reward in terms of loyalty points.

try {
    $result = $apiInstance->createRewardAssignment($rewardId, $rewardsAssignmentsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->createRewardAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **rewardsAssignmentsCreateRequestBody** | [**\OpenAPI\Client\Model\RewardsAssignmentsCreateRequestBody**](../Model/RewardsAssignmentsCreateRequestBody.md)| Provide the campaign ID of the campaign to which the reward is to be assigned and define the cost of the reward in terms of loyalty points. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsAssignmentsCreateResponseBody**](../Model/RewardsAssignmentsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReward()`

```php
deleteReward($rewardId)
```

Delete Reward

Delete a reward.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.

try {
    $apiInstance->deleteReward($rewardId);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->deleteReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |

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

## `deleteRewardAssignment()`

```php
deleteRewardAssignment($rewardId, $assignmentId)
```

Delete Reward Assignment

This method deletes a reward assignment for a particular reward.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$assignmentId = 'assignmentId_example'; // string | A unique reward assignment ID.

try {
    $apiInstance->deleteRewardAssignment($rewardId, $assignmentId);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->deleteRewardAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **assignmentId** | **string**| A unique reward assignment ID. | |

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

## `getReward()`

```php
getReward($rewardId): \OpenAPI\Client\Model\Reward
```

Get Reward

Retrieve a reward by the reward ID.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.

try {
    $result = $apiInstance->getReward($rewardId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |

### Return type

[**\OpenAPI\Client\Model\Reward**](../Model/Reward.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardAssignment()`

```php
getRewardAssignment($rewardId, $assignmentId): \OpenAPI\Client\Model\RewardsAssignmentsGetResponseBody
```

Get Reward Assignment

Retrieve a reward assignment.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$assignmentId = 'assignmentId_example'; // string | A unique reward assignment ID.

try {
    $result = $apiInstance->getRewardAssignment($rewardId, $assignmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewardAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **assignmentId** | **string**| A unique reward assignment ID. | |

### Return type

[**\OpenAPI\Client\Model\RewardsAssignmentsGetResponseBody**](../Model/RewardsAssignmentsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRewardAssignments()`

```php
listRewardAssignments($rewardId, $limit, $page): \OpenAPI\Client\Model\RewardsAssignmentsListResponseBody
```

List Reward Assignments

Retrieve reward assignments by the reward ID.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.

try {
    $result = $apiInstance->listRewardAssignments($rewardId, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->listRewardAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsAssignmentsListResponseBody**](../Model/RewardsAssignmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRewards()`

```php
listRewards($limit, $page, $assignmentId): \OpenAPI\Client\Model\RewardsListResponseBody
```

List Rewards

Retrieve rewards.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$assignmentId = 'assignmentId_example'; // string | A unique reward assignment ID. Use this parameter to get the reward details in the context of an assignment ID.

try {
    $result = $apiInstance->listRewards($limit, $page, $assignmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->listRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **assignmentId** | **string**| A unique reward assignment ID. Use this parameter to get the reward details in the context of an assignment ID. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsListResponseBody**](../Model/RewardsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReward()`

```php
updateReward($rewardId, $rewardsUpdateRequestBody): \OpenAPI\Client\Model\RewardsUpdateResponseBody
```

Update Reward

Update the details of a reward.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$rewardsUpdateRequestBody = {"name":"Digital - Gift Card Reward","metadata":{"Type":"Gift"},"parameters":{"campaign":{"id":"camp_hC2GdqYtOmTT45zfhib62cK1","balance":3000}}}; // \OpenAPI\Client\Model\RewardsUpdateRequestBody | Define the parameters to be updated for the reward.

try {
    $result = $apiInstance->updateReward($rewardId, $rewardsUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->updateReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **rewardsUpdateRequestBody** | [**\OpenAPI\Client\Model\RewardsUpdateRequestBody**](../Model/RewardsUpdateRequestBody.md)| Define the parameters to be updated for the reward. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsUpdateResponseBody**](../Model/RewardsUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRewardAssignment()`

```php
updateRewardAssignment($rewardId, $assignmentId, $rewardsAssignmentsUpdateRequestBody): \OpenAPI\Client\Model\RewardsAssignmentsUpdateResponseBody
```

Update Reward Assignment

Update the number of points needed to successfully redeem the reward.

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


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rewardId = 'rewardId_example'; // string | A unique reward ID.
$assignmentId = 'assignmentId_example'; // string | A unique reward assignment ID.
$rewardsAssignmentsUpdateRequestBody = {"parameters":{"loyalty":{"points":35}}}; // \OpenAPI\Client\Model\RewardsAssignmentsUpdateRequestBody | Define the number of points required to exchange for the reward.

try {
    $result = $apiInstance->updateRewardAssignment($rewardId, $assignmentId, $rewardsAssignmentsUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->updateRewardAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rewardId** | **string**| A unique reward ID. | |
| **assignmentId** | **string**| A unique reward assignment ID. | |
| **rewardsAssignmentsUpdateRequestBody** | [**\OpenAPI\Client\Model\RewardsAssignmentsUpdateRequestBody**](../Model/RewardsAssignmentsUpdateRequestBody.md)| Define the number of points required to exchange for the reward. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RewardsAssignmentsUpdateResponseBody**](../Model/RewardsAssignmentsUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
