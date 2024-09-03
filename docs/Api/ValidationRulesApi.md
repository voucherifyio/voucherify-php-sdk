# OpenAPI\Client\ValidationRulesApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createValidationRuleAssignment()**](ValidationRulesApi.md#createValidationRuleAssignment) | **POST** /v1/validation-rules/{validationRuleId}/assignments | Create Validation Rules Assignments |
| [**createValidationRules()**](ValidationRulesApi.md#createValidationRules) | **POST** /v1/validation-rules | Create Validation Rules |
| [**deleteValidationRuleAssignment()**](ValidationRulesApi.md#deleteValidationRuleAssignment) | **DELETE** /v1/validation-rules/{validationRuleId}/assignments/{assignmentId} | Delete Validation Rule Assignment |
| [**deleteValidationRules()**](ValidationRulesApi.md#deleteValidationRules) | **DELETE** /v1/validation-rules/{validationRuleId} | Delete Validation Rule |
| [**getValidationRule()**](ValidationRulesApi.md#getValidationRule) | **GET** /v1/validation-rules/{validationRuleId} | Get Validation Rule |
| [**listValidationRuleAssignments()**](ValidationRulesApi.md#listValidationRuleAssignments) | **GET** /v1/validation-rules/{validationRuleId}/assignments | List Validation Rule Assignments |
| [**listValidationRules()**](ValidationRulesApi.md#listValidationRules) | **GET** /v1/validation-rules | List Validation Rules |
| [**listValidationRulesAssignments()**](ValidationRulesApi.md#listValidationRulesAssignments) | **GET** /v1/validation-rules-assignments | List Validation Rules&#39; Assignment(s) |
| [**updateValidationRule()**](ValidationRulesApi.md#updateValidationRule) | **PUT** /v1/validation-rules/{validationRuleId} | Update Validation Rule |


## `createValidationRuleAssignment()`

```php
createValidationRuleAssignment($validation_rule_id, $force, $validation_rules_assignments_create_request_body): \OpenAPI\Client\Model\ValidationRulesAssignmentsCreateResponseBody
```

Create Validation Rules Assignments

Assign validation rule to either one of the following objects: voucher, campaign, promotion tier, earning rule, reward, distribution.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | Unique validation rule ID.
$force = True; // bool | If this flag is set to true, the previous assignment with the same data will be deleted and a new one will be added.
$validation_rules_assignments_create_request_body = {"voucher":"v_ssR6vhswwh5odSloN2Vc3O60w7aea018"}; // \OpenAPI\Client\Model\ValidationRulesAssignmentsCreateRequestBody | Specify the resource that you would like to assign the validation rule to.

try {
    $result = $apiInstance->createValidationRuleAssignment($validation_rule_id, $force, $validation_rules_assignments_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->createValidationRuleAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| Unique validation rule ID. | |
| **force** | **bool**| If this flag is set to true, the previous assignment with the same data will be deleted and a new one will be added. | [optional] |
| **validation_rules_assignments_create_request_body** | [**\OpenAPI\Client\Model\ValidationRulesAssignmentsCreateRequestBody**](../Model/ValidationRulesAssignmentsCreateRequestBody.md)| Specify the resource that you would like to assign the validation rule to. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesAssignmentsCreateResponseBody**](../Model/ValidationRulesAssignmentsCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createValidationRules()`

```php
createValidationRules($validation_rules_create_request_body): \OpenAPI\Client\Model\ValidationRulesCreateResponseBody
```

Create Validation Rules

Create validation rules.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rules_create_request_body = {"name":"Set of Validation Rules","error":{"message":"Your order does not meet at least one of the required criteria."},"applicable_to":{"included_all":false,"excluded":[{"object":"product","id":"prod_0bae45ffc7003ffc52","source_id":"second_product","strict":false,"effect":"APPLY_TO_EVERY"}],"included":[{"object":"product","id":"prod_0b72b00ffed198e344","source_id":null,"effect":"APPLY_TO_MOST_EXPENSIVE","quantity_limit":1},{"object":"products_collection","id":"pc_4ndRXAsTOzwSdHcQcxf489uU","source_id":null,"effect":"APPLY_TO_EVERY","quantity_limit":5}]},"rules":{"1":{"name":"order.metadata","property":"location","rules":{},"conditions":{"$is":["Santorini"]},"error":{"message":"Your order must be placed at one of our Santorini shops."}},"2":{"name":"custom_event.metadata","property":"test","rules":{},"conditions":{"$greater_than_or_equal":[1]}},"3":{"name":"order.items.every","rules":{"1":{"name":"order.items.metadata","property":"test","rules":{},"conditions":{"$greater_than_or_equal":[1]}}},"conditions":{"$is":[{"id":"<PROD_ID>","effect":"APPLY_TO_EVERY","object":"product","source_id":"<SOURCE_ID>"}]}},"logic":"1 or 2"}}; // \OpenAPI\Client\Model\ValidationRulesCreateRequestBody | Specify the validation rules parameters.

try {
    $result = $apiInstance->createValidationRules($validation_rules_create_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->createValidationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rules_create_request_body** | [**\OpenAPI\Client\Model\ValidationRulesCreateRequestBody**](../Model/ValidationRulesCreateRequestBody.md)| Specify the validation rules parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesCreateResponseBody**](../Model/ValidationRulesCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteValidationRuleAssignment()`

```php
deleteValidationRuleAssignment($validation_rule_id, $assignment_id)
```

Delete Validation Rule Assignment

This method deletes a validation rule assignment.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | A unique validation rule ID.
$assignment_id = 'assignment_id_example'; // string | A unique validation rule assignment ID.

try {
    $apiInstance->deleteValidationRuleAssignment($validation_rule_id, $assignment_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->deleteValidationRuleAssignment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| A unique validation rule ID. | |
| **assignment_id** | **string**| A unique validation rule assignment ID. | |

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

## `deleteValidationRules()`

```php
deleteValidationRules($validation_rule_id)
```

Delete Validation Rule

This method deletes a validation rule.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | A unique validation rule ID.

try {
    $apiInstance->deleteValidationRules($validation_rule_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->deleteValidationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| A unique validation rule ID. | |

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

## `getValidationRule()`

```php
getValidationRule($validation_rule_id): \OpenAPI\Client\Model\ValidationRulesGetResponseBody
```

Get Validation Rule

Retrieve the details of a validation rule.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | A unique validation rule ID.

try {
    $result = $apiInstance->getValidationRule($validation_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->getValidationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| A unique validation rule ID. | |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesGetResponseBody**](../Model/ValidationRulesGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listValidationRuleAssignments()`

```php
listValidationRuleAssignments($validation_rule_id, $limit, $page, $order): \OpenAPI\Client\Model\ValidationRulesAssignmentsListResponseBody
```

List Validation Rule Assignments

Retrieve validation rule assignments for a specific validation rule.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | Unique validation rule ID.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListValidationRuleAssignments(); // ParameterOrderListValidationRuleAssignments | This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listValidationRuleAssignments($validation_rule_id, $limit, $page, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->listValidationRuleAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| Unique validation rule ID. | |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListValidationRuleAssignments**](../Model/.md)| This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesAssignmentsListResponseBody**](../Model/ValidationRulesAssignmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listValidationRules()`

```php
listValidationRules($limit, $page, $order, $start_date, $end_date): \OpenAPI\Client\Model\ValidationRulesListResponseBody
```

List Validation Rules

Retrieve validation rules.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$order = new \OpenAPI\Client\Model\ParameterOrderListValidationRules(); // ParameterOrderListValidationRules | This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must start on. Represented in ISO 8601 format.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Timestamp representing the date and time which results must end on. Represented in ISO 8601 format.

try {
    $result = $apiInstance->listValidationRules($limit, $page, $order, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->listValidationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **order** | [**ParameterOrderListValidationRules**](../Model/.md)| This is a property that controls the sorting direction of the results. Sort the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **start_date** | **\DateTime**| Timestamp representing the date and time which results must start on. Represented in ISO 8601 format. | [optional] |
| **end_date** | **\DateTime**| Timestamp representing the date and time which results must end on. Represented in ISO 8601 format. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesListResponseBody**](../Model/ValidationRulesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listValidationRulesAssignments()`

```php
listValidationRulesAssignments($related_object_id, $rule, $page, $limit, $order): \OpenAPI\Client\Model\ValidationRulesAssignmentsListResponseBody
```

List Validation Rules' Assignment(s)

List all validation rules assignments or filter the results using the related object ID or the validation rule ID query parameters.  # How to retrieve specific validation rule assignments(s) ## Related object ID To find an assignment for a particular resource, you can use the ID of the object to which the validation rule was assigned. This could be, for example, an ID of a: voucher, campaign, distribution, reward assignment, earning rule, promotion tier.    ## Validation rule ID You can use the validation rule ID to find assignment(s) for a specific validation rule.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$related_object_id = 'related_object_id_example'; // string | The resource ID to which the validation rule was assigned; this could be, for example, a resource ID of a voucher, campaign, earning rule, reward assignment, promotion tier, or distribution.
$rule = 'rule_example'; // string | Validation rule ID.
$page = 56; // int | Which page of results to return. The lowest value is 1.
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$order = 'order_example'; // string | Sorts the results using one of the filtering options: -created_at, created_at, where the dash - preceding a sorting option means sorting in a descending order.

try {
    $result = $apiInstance->listValidationRulesAssignments($related_object_id, $rule, $page, $limit, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->listValidationRulesAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **related_object_id** | **string**| The resource ID to which the validation rule was assigned; this could be, for example, a resource ID of a voucher, campaign, earning rule, reward assignment, promotion tier, or distribution. | [optional] |
| **rule** | **string**| Validation rule ID. | [optional] |
| **page** | **int**| Which page of results to return. The lowest value is 1. | [optional] |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **order** | **string**| Sorts the results using one of the filtering options: -created_at, created_at, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesAssignmentsListResponseBody**](../Model/ValidationRulesAssignmentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateValidationRule()`

```php
updateValidationRule($validation_rule_id, $validation_rules_update_request_body): \OpenAPI\Client\Model\ValidationRulesUpdateResponseBody
```

Update Validation Rule

Update validation rule parameters.

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


$apiInstance = new OpenAPI\Client\Api\ValidationRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validation_rule_id = 'validation_rule_id_example'; // string | A unique validation rule ID.
$validation_rules_update_request_body = {"name":"Set of Validation Rules Updated","error":{"message":"Your orders do not meet at least one of the required criteria."},"applicable_to":{"included_all":false,"excluded":[{"object":"product","id":"prod_0bae45ffc7003ffccc","source_id":"second_product","strict":false,"effect":"APPLY_TO_EVERY"}],"included":[{"object":"product","id":"prod_0b72b00ffed198e333","source_id":null,"effect":"APPLY_TO_CHEAPEST","quantity_limit":1},{"object":"products_collection","id":"pc_4ndRXAsTOzwSdHcQcxf489uU","source_id":null,"effect":"APPLY_TO_EVERY","quantity_limit":5}]},"rules":{"1":{"name":"order.metadata","property":"place","rules":{},"conditions":{"$is":["Santorini"]},"error":{"message":"Your order must be placed at one of our Santorini shops on the beach."}},"2":{"name":"custom_event.metadata","property":"lining","rules":{},"conditions":{"$greater_than_or_equal":[1]}},"3":{"name":"order.items.every","rules":{"1":{"name":"order.items.metadata","property":"test","rules":{},"conditions":{"$greater_than_or_equal":[1]}}},"conditions":{"$is":[{"id":"<PRODs_ID>","effect":"APPLY_TO_EVERY","object":"product","source_id":"<SOURCEs_ID>"}]}},"logic":"1 and 2"}}; // \OpenAPI\Client\Model\ValidationRulesUpdateRequestBody | Specify the parameters to be updated.

try {
    $result = $apiInstance->updateValidationRule($validation_rule_id, $validation_rules_update_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationRulesApi->updateValidationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validation_rule_id** | **string**| A unique validation rule ID. | |
| **validation_rules_update_request_body** | [**\OpenAPI\Client\Model\ValidationRulesUpdateRequestBody**](../Model/ValidationRulesUpdateRequestBody.md)| Specify the parameters to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ValidationRulesUpdateResponseBody**](../Model/ValidationRulesUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
