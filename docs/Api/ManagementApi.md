# OpenAPI\Client\ManagementApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignUser()**](ManagementApi.md#assignUser) | **POST** /management/v1/projects/{projectId}/users | Assign User |
| [**createBrand()**](ManagementApi.md#createBrand) | **POST** /management/v1/projects/{projectId}/branding | Create Brand |
| [**createCustomEventSchema()**](ManagementApi.md#createCustomEventSchema) | **POST** /management/v1/projects/{projectId}/custom-event-schemas | Create Custom Event Schema |
| [**createMetadataSchema()**](ManagementApi.md#createMetadataSchema) | **POST** /management/v1/projects/{projectId}/metadata-schemas | Create Metadata Schema |
| [**createProject()**](ManagementApi.md#createProject) | **POST** /management/v1/projects | Create Project |
| [**createStackingRules()**](ManagementApi.md#createStackingRules) | **POST** /management/v1/projects/{projectId}/stacking-rules | Create Stacking Rules |
| [**createWebhook()**](ManagementApi.md#createWebhook) | **POST** /management/v1/projects/{projectId}/webhooks | Create Webhook |
| [**deleteBrand()**](ManagementApi.md#deleteBrand) | **DELETE** /management/v1/projects/{projectId}/branding/{brandingId} | Delete Brand |
| [**deleteCustomEventSchema()**](ManagementApi.md#deleteCustomEventSchema) | **DELETE** /management/v1/projects/{projectId}/custom-event-schemas/{customEventSchemaId} | Delete Custom Event Schema |
| [**deleteMetadataSchema()**](ManagementApi.md#deleteMetadataSchema) | **DELETE** /management/v1/projects/{projectId}/metadata-schemas/{metadataSchemaId} | Delete Metadata Schema |
| [**deleteProject()**](ManagementApi.md#deleteProject) | **DELETE** /management/v1/projects/{projectId} | Delete Project |
| [**deleteStackingRules()**](ManagementApi.md#deleteStackingRules) | **DELETE** /management/v1/projects/{projectId}/stacking-rules/{stackingRulesId} | Delete Stacking Rules |
| [**deleteWebhook()**](ManagementApi.md#deleteWebhook) | **DELETE** /management/v1/projects/{projectId}/webhooks/{webhookId} | Delete Webhook |
| [**getBrand()**](ManagementApi.md#getBrand) | **GET** /management/v1/projects/{projectId}/branding/{brandingId} | Get Brand |
| [**getCustomEventSchema()**](ManagementApi.md#getCustomEventSchema) | **GET** /management/v1/projects/{projectId}/custom-event-schemas/{customEventSchemaId} | Get Custom Event Schema |
| [**getMetadataSchema1()**](ManagementApi.md#getMetadataSchema1) | **GET** /management/v1/projects/{projectId}/metadata-schemas/{metadataSchemaId} | Get Metadata Schema |
| [**getProject()**](ManagementApi.md#getProject) | **GET** /management/v1/projects/{projectId} | Get Project |
| [**getStackingRules()**](ManagementApi.md#getStackingRules) | **GET** /management/v1/projects/{projectId}/stacking-rules/{stackingRulesId} | Get Stacking Rules |
| [**getUser()**](ManagementApi.md#getUser) | **GET** /management/v1/projects/{projectId}/users/{userId} | Get User |
| [**getWebhook()**](ManagementApi.md#getWebhook) | **GET** /management/v1/projects/{projectId}/webhooks/{webhookId} | Get Webhook |
| [**inviteUser()**](ManagementApi.md#inviteUser) | **POST** /management/v1/projects/users/invite | Invite a New User |
| [**listBrands()**](ManagementApi.md#listBrands) | **GET** /management/v1/projects/{projectId}/branding | List Brands |
| [**listCustomEventSchemas()**](ManagementApi.md#listCustomEventSchemas) | **GET** /management/v1/projects/{projectId}/custom-event-schemas | List Custom Event Schemas |
| [**listMetadataSchemas1()**](ManagementApi.md#listMetadataSchemas1) | **GET** /management/v1/projects/{projectId}/metadata-schemas | List Metadata Schemas |
| [**listProjects()**](ManagementApi.md#listProjects) | **GET** /management/v1/projects | List Projects |
| [**listStackingRules()**](ManagementApi.md#listStackingRules) | **GET** /management/v1/projects/{projectId}/stacking-rules | List Stacking Rules |
| [**listUsers()**](ManagementApi.md#listUsers) | **GET** /management/v1/projects/{projectId}/users | List Users |
| [**listWebhooks()**](ManagementApi.md#listWebhooks) | **GET** /management/v1/projects/{projectId}/webhooks | List Webhooks |
| [**unassignUser()**](ManagementApi.md#unassignUser) | **DELETE** /management/v1/projects/{projectId}/users/{userId} | Unassign User |
| [**updateBrand()**](ManagementApi.md#updateBrand) | **PUT** /management/v1/projects/{projectId}/branding/{brandingId} | Update Brand |
| [**updateCustomEventSchema()**](ManagementApi.md#updateCustomEventSchema) | **PUT** /management/v1/projects/{projectId}/custom-event-schemas/{customEventSchemaId} | Update Custom Event Schema |
| [**updateMetadataSchema()**](ManagementApi.md#updateMetadataSchema) | **PUT** /management/v1/projects/{projectId}/metadata-schemas/{metadataSchemaId} | Update Metadata Schema |
| [**updateProject()**](ManagementApi.md#updateProject) | **PUT** /management/v1/projects/{projectId} | Update Project |
| [**updateStackingRules()**](ManagementApi.md#updateStackingRules) | **PUT** /management/v1/projects/{projectId}/stacking-rules/{stackingRulesId} | Update Stacking Rules |
| [**updateUser()**](ManagementApi.md#updateUser) | **PUT** /management/v1/projects/{projectId}/users/{userId} | Update User |
| [**updateWebhook()**](ManagementApi.md#updateWebhook) | **PUT** /management/v1/projects/{projectId}/webhooks/{webhookId} | Update Webhook |


## `assignUser()`

```php
assignUser($projectId, $managementProjectsUsersAssignRequestBody): \OpenAPI\Client\Model\ManagementProjectsUsersAssignResponseBody
```

Assign User

Assigns a user to a given project. The user must be an existing user in Voucherify.  🚧 Correct Use of Data To avoid errors, use the role key with either id or login keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsUsersAssignRequestBody = new \OpenAPI\Client\Model\ManagementProjectsUsersAssignRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsUsersAssignRequestBody | Defines the user details.

try {
    $result = $apiInstance->assignUser($projectId, $managementProjectsUsersAssignRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->assignUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsUsersAssignRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsUsersAssignRequestBody**](../Model/ManagementProjectsUsersAssignRequestBody.md)| Defines the user details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsUsersAssignResponseBody**](../Model/ManagementProjectsUsersAssignResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBrand()`

```php
createBrand($projectId, $managementProjectsBrandingCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsBrandingCreateResponseBody
```

Create Brand

Creates a new brand configuration. You can have only one brand configured for a project.  📘 White Labelling  The white labelling settings which can be found in Project Settings > Brand Details and which are available only for Enterprise clients as a separate service can be configured only in the user interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsBrandingCreateRequestBody = {"brand":{"name":"Voucherify PSA","privacy_policy_url":null,"terms_of_use_url":null,"permission_reminder":"You are receiving this email because you opted in at our website.","website_url":"voucherify.io"},"address":{"street":"Porcelanowa 23","city":"Katowice","postal":"43-246","state":null,"country":"Poland"},"contact":{"email":"support@voucherify.io","phone":null},"cockpits":{"campaigns_overview_enabled":false,"loyalty_enabled":true,"gift_cards_enabled":true,"coupons_enabled":true,"referrals_enabled":true,"theme":"default","use_custom_double_opt_in_redirect_url":false,"custom_double_opt_in_redirect_url":null}}; // \OpenAPI\Client\Model\ManagementProjectsBrandingCreateRequestBody | Defines a brand configuration.

try {
    $result = $apiInstance->createBrand($projectId, $managementProjectsBrandingCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsBrandingCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsBrandingCreateRequestBody**](../Model/ManagementProjectsBrandingCreateRequestBody.md)| Defines a brand configuration. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsBrandingCreateResponseBody**](../Model/ManagementProjectsBrandingCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomEventSchema()`

```php
createCustomEventSchema($projectId, $managementProjectsCustomEventSchemasCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasCreateResponseBody
```

Create Custom Event Schema

Creates a custom event schema. The properties object is required, but it can be empty, however. This object is for optional custom properties (metadata).  📘 Custom Event Documentation  Read [Custom Events](https://support.voucherify.io/article/111-custom-events) article to learn how custom events work in Voucherify. Read also the details about the Track Custom Event endpoint and the Custom Event Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsCustomEventSchemasCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasCreateRequestBody | Defines the custom event schema.

try {
    $result = $apiInstance->createCustomEventSchema($projectId, $managementProjectsCustomEventSchemasCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createCustomEventSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsCustomEventSchemasCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasCreateRequestBody**](../Model/ManagementProjectsCustomEventSchemasCreateRequestBody.md)| Defines the custom event schema. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasCreateResponseBody**](../Model/ManagementProjectsCustomEventSchemasCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMetadataSchema()`

```php
createMetadataSchema($projectId, $managementProjectsMetadataSchemasCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasCreateResponseBody
```

Create Metadata Schema

Creates a new metadata (custom attribute) schema. The schema consists of a set of key-value pairs to customize Voucherify resources.  You can nest your object within a standard metadata schema, e.g. within a campaign or customer schema. However, your nested object cannot include another nested object. The standard metadata schemas are: - Campaign - Voucher - Publication - Redemption - Product - Customer - Order - Order line item - Loyalty Tier - Promotion Tier - Earning rule - Reward  📘 Metadata Documentation  Read the Getting Started with Metadata articles to learn how metadata work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsMetadataSchemasCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasCreateRequestBody | Defines the metadata schema.

try {
    $result = $apiInstance->createMetadataSchema($projectId, $managementProjectsMetadataSchemasCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsMetadataSchemasCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasCreateRequestBody**](../Model/ManagementProjectsMetadataSchemasCreateRequestBody.md)| Defines the metadata schema. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasCreateResponseBody**](../Model/ManagementProjectsMetadataSchemasCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProject()`

```php
createProject($managementProjectsCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsCreateResponseBody
```

Create Project

Creates a new project. You can add users, specify the cluster, timezone, currency, and other details. All owners are added to the project by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementProjectsCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsCreateRequestBody | Define project details.

try {
    $result = $apiInstance->createProject($managementProjectsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **managementProjectsCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsCreateRequestBody**](../Model/ManagementProjectsCreateRequestBody.md)| Define project details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsCreateResponseBody**](../Model/ManagementProjectsCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createStackingRules()`

```php
createStackingRules($projectId, $managementProjectsStackingRulesCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsStackingRulesCreateResponseBody
```

Create Stacking Rules

Overwrites the default stacking rules. If new stacking rules have been created for the project earlier (e.g. in the user interface), it returns an error. Use Update Stacking Rules endpoint to change the rules.  📘 Stacking Rules Documentation  Read [the Stacking Rules article](https://support.voucherify.io/article/604-stacking-rules) to learn how they work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsStackingRulesCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsStackingRulesCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsStackingRulesCreateRequestBody | Defines the stacking rule parameters.

try {
    $result = $apiInstance->createStackingRules($projectId, $managementProjectsStackingRulesCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createStackingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsStackingRulesCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsStackingRulesCreateRequestBody**](../Model/ManagementProjectsStackingRulesCreateRequestBody.md)| Defines the stacking rule parameters. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsStackingRulesCreateResponseBody**](../Model/ManagementProjectsStackingRulesCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWebhook()`

```php
createWebhook($projectId, $managementProjectsWebhooksCreateRequestBody): \OpenAPI\Client\Model\ManagementProjectsWebhooksCreateResponseBody
```

Create Webhook

Creates a new webhook configuration.  📘 Webhook Documentation  Read Webhooks v2024-01-01 article to learn how webhooks work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsWebhooksCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsWebhooksCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsWebhooksCreateRequestBody | Defines a webhook configuration.

try {
    $result = $apiInstance->createWebhook($projectId, $managementProjectsWebhooksCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsWebhooksCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsWebhooksCreateRequestBody**](../Model/ManagementProjectsWebhooksCreateRequestBody.md)| Defines a webhook configuration. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsWebhooksCreateResponseBody**](../Model/ManagementProjectsWebhooksCreateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBrand()`

```php
deleteBrand($projectId, $brandingId)
```

Delete Brand

Deletes permanently a brand configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$brandingId = 'brandingId_example'; // string | Provide the unique identifier of the brand configuration.

try {
    $apiInstance->deleteBrand($projectId, $brandingId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **brandingId** | **string**| Provide the unique identifier of the brand configuration. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomEventSchema()`

```php
deleteCustomEventSchema($projectId, $customEventSchemaId)
```

Delete Custom Event Schema

Deletes permanently the custom event schema with its custom properties (metadata).  📘 Custom Event Documentation  Read [Custom Events](https://support.voucherify.io/article/111-custom-events) article to learn how custom events work in Voucherify. Read also the details about the Track Custom Event endpoint and the Custom Event Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$customEventSchemaId = 'customEventSchemaId_example'; // string | Provide the unique identifier of the custom event schema.

try {
    $apiInstance->deleteCustomEventSchema($projectId, $customEventSchemaId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteCustomEventSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **customEventSchemaId** | **string**| Provide the unique identifier of the custom event schema. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMetadataSchema()`

```php
deleteMetadataSchema($projectId, $metadataSchemaId)
```

Delete Metadata Schema

Deletes permanently the metadata schema. In standard metadata schemas, this endpoint removes permanently all definitions. The standard metadata schemas are: - Campaign - Voucher - Publication - Redemption - Product - Customer - Order - Order line item - Loyalty Tier - Promotion Tier - Earning rule - Reward If you want to delete only one definition, use the Update Metadata Schema endpoint. In the request, provide the deleted: true pair in the definition object. This definition will be moved to Removed definitions. If you want to create a new standard metadata schema, use the Create Metadata Schema endpoint.  🚧 Metadata Purging This endpoint deletes permanently the metadata schemas only. However, it does not purge the metadata from associated entities, so the metadata added to those entities will remain. If you want to purge metadata from the entities: 1. Remove all the definitions you want to purge. You can do this either in Voucherify Project Settings > Metadata Schema tab or with the Update Metadata Schema endpoint. 2. In Voucherify Project Settings > Metadata Schema tab, go to the relevant metadata schema. 3. In Removed definitions, click the bin button next to the definitions whose metadata you want to purge from entities. Note: - This is an asynchronous action. You will be notified when it has been completed. - You cannot purge metadata for the Redemption and Publication schemas. 4. Use the Delete Metadata Schema request to delete the metadata schema from Voucherify.  📘 Metadata Documentation  Read the Getting Started with Metadata articles to learn how metadata work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$metadataSchemaId = 'metadataSchemaId_example'; // string | Provide the unique identifier of the metadata schema.

try {
    $apiInstance->deleteMetadataSchema($projectId, $metadataSchemaId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **metadataSchemaId** | **string**| Provide the unique identifier of the metadata schema. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProject()`

```php
deleteProject($projectId)
```

Delete Project

Deletes an existing project. The users currently using the deleted project will be automatically logged out.  🚧 Sandbox Project The sandbox project cannot be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $apiInstance->deleteProject($projectId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteStackingRules()`

```php
deleteStackingRules($projectId, $stackingRulesId)
```

Delete Stacking Rules

Deletes permanently the current settings for the stacking rules. The stacking rules are restored to default values.  📘 Stacking Rules Documentation  Read [the Stacking Rules article](https://support.voucherify.io/article/604-stacking-rules) to learn how they work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$stackingRulesId = 'stackingRulesId_example'; // string | Provide the unique identifier of the stacking rules.

try {
    $apiInstance->deleteStackingRules($projectId, $stackingRulesId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteStackingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **stackingRulesId** | **string**| Provide the unique identifier of the stacking rules. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWebhook()`

```php
deleteWebhook($projectId, $webhookId)
```

Delete Webhook

Deletes a webhook configuration.  📘 Webhook Documentation  Read Webhooks v2024-01-1 article to learn how webhooks work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$webhookId = 'webhookId_example'; // string | Provide the unique identifier of the webhook configuration.

try {
    $apiInstance->deleteWebhook($projectId, $webhookId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **webhookId** | **string**| Provide the unique identifier of the webhook configuration. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrand()`

```php
getBrand($projectId, $brandingId): \OpenAPI\Client\Model\ManagementProjectsBrandingGetResponseBody
```

Get Brand

Retrieves a brand configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$brandingId = 'brandingId_example'; // string | Provide the unique identifier of the brand configuration.

try {
    $result = $apiInstance->getBrand($projectId, $brandingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **brandingId** | **string**| Provide the unique identifier of the brand configuration. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsBrandingGetResponseBody**](../Model/ManagementProjectsBrandingGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomEventSchema()`

```php
getCustomEventSchema($projectId, $customEventSchemaId): \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasGetResponseBody
```

Get Custom Event Schema

Retrieves a custom event schema.  📘 Custom Event Documentation  Read [Custom Events](https://support.voucherify.io/article/111-custom-events) article to learn how custom events work in Voucherify. Read also the details about the Track Custom Event endpoint and the Custom Event Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$customEventSchemaId = 'customEventSchemaId_example'; // string | Provide the unique identifier of the custom event schema.

try {
    $result = $apiInstance->getCustomEventSchema($projectId, $customEventSchemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getCustomEventSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **customEventSchemaId** | **string**| Provide the unique identifier of the custom event schema. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasGetResponseBody**](../Model/ManagementProjectsCustomEventSchemasGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMetadataSchema1()`

```php
getMetadataSchema1($projectId, $metadataSchemaId): \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasGetResponseBody
```

Get Metadata Schema

Retrieves a metadata schema.  📘 Metadata Documentation  Read the Getting Started with Metadata articles to learn how metadata work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$metadataSchemaId = 'metadataSchemaId_example'; // string | Provide the unique identifier of the metadata schema.

try {
    $result = $apiInstance->getMetadataSchema1($projectId, $metadataSchemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getMetadataSchema1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **metadataSchemaId** | **string**| Provide the unique identifier of the metadata schema. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasGetResponseBody**](../Model/ManagementProjectsMetadataSchemasGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProject()`

```php
getProject($projectId): \OpenAPI\Client\Model\ManagementProjectsGetResponseBody
```

Get Project

Retrieves an existing project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->getProject($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsGetResponseBody**](../Model/ManagementProjectsGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStackingRules()`

```php
getStackingRules($projectId, $stackingRulesId): \OpenAPI\Client\Model\ManagementProjectsStackingRulesGetResponseBody
```

Get Stacking Rules

Retrieves the stacking rules for the project.  📘 Stacking Rules Documentation  Read [the Stacking Rules article](https://support.voucherify.io/article/604-stacking-rules) to learn how they work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$stackingRulesId = 'stackingRulesId_example'; // string | Provide the unique identifier of the stacking rules.

try {
    $result = $apiInstance->getStackingRules($projectId, $stackingRulesId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getStackingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **stackingRulesId** | **string**| Provide the unique identifier of the stacking rules. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsStackingRulesGetResponseBody**](../Model/ManagementProjectsStackingRulesGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($projectId, $userId): \OpenAPI\Client\Model\ManagementProjectsUsersGetUserResponseBody
```

Get User

Retrieves the project users details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$userId = 'userId_example'; // string | Provide the unique identifier of the user. Alternatively, provide the users login.

try {
    $result = $apiInstance->getUser($projectId, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **userId** | **string**| Provide the unique identifier of the user. Alternatively, provide the users login. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsUsersGetUserResponseBody**](../Model/ManagementProjectsUsersGetUserResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWebhook()`

```php
getWebhook($projectId, $webhookId): \OpenAPI\Client\Model\ManagementProjectsWebhooksGetResponseBody
```

Get Webhook

Retrieves a webhook configuration.  📘 Webhook Documentation  Read Webhooks v2024-01-1 article to learn how webhooks work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$webhookId = 'webhookId_example'; // string | Provide the unique identifier of the webhook configuration.

try {
    $result = $apiInstance->getWebhook($projectId, $webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **webhookId** | **string**| Provide the unique identifier of the webhook configuration. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsWebhooksGetResponseBody**](../Model/ManagementProjectsWebhooksGetResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inviteUser()`

```php
inviteUser($managementProjectsUsersInviteCreateRequestBody)
```

Invite a New User

Sends an invitation to an email address that has not been used yet as a Voucherify user login. You can specify the projects to which the invited user will be assigned and define their roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementProjectsUsersInviteCreateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsUsersInviteCreateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsUsersInviteCreateRequestBody | Defines the details of the invitation, the project, and roles to which the user will be assigned.

try {
    $apiInstance->inviteUser($managementProjectsUsersInviteCreateRequestBody);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->inviteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **managementProjectsUsersInviteCreateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsUsersInviteCreateRequestBody**](../Model/ManagementProjectsUsersInviteCreateRequestBody.md)| Defines the details of the invitation, the project, and roles to which the user will be assigned. | [optional] |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBrands()`

```php
listBrands($projectId): \OpenAPI\Client\Model\ManagementProjectsBrandingListResponseBody
```

List Brands

Lists all brand configurations. Because a project can have only one brand, it always returns a list with one item. This endpoint can be used to retrieve the brand configuration created with the Voucherify Dashboard and the ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listBrands($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listBrands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsBrandingListResponseBody**](../Model/ManagementProjectsBrandingListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomEventSchemas()`

```php
listCustomEventSchemas($projectId): \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasListResponseBody
```

List Custom Event Schemas

Lists all custom event schemas available in the project.  📘 Custom Event Documentation  Read [Custom Events](https://support.voucherify.io/article/111-custom-events) article to learn how custom events work in Voucherify. Read also the details about the Track Custom Event endpoint and the Custom Event Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listCustomEventSchemas($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listCustomEventSchemas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasListResponseBody**](../Model/ManagementProjectsCustomEventSchemasListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMetadataSchemas1()`

```php
listMetadataSchemas1($projectId): \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasListResponseBody
```

List Metadata Schemas

Lists all metadata schemas available in the project.  📘 Metadata Documentation  Read the Getting Started with Metadata articles to learn how metadata work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listMetadataSchemas1($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listMetadataSchemas1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasListResponseBody**](../Model/ManagementProjectsMetadataSchemasListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProjects()`

```php
listProjects(): \OpenAPI\Client\Model\ManagementProjectsListResponseBody
```

List Projects

Lists all projects for the organization. The endpoint does not require any query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsListResponseBody**](../Model/ManagementProjectsListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listStackingRules()`

```php
listStackingRules($projectId): \OpenAPI\Client\Model\ManagementProjectsStackingRulesListResponseBody
```

List Stacking Rules

Lists all stacking rules. Returns always a list with one item. This endpoint can be used to retrieve the default stacking rules. The default stacking rules do not have an ID that could be used with the Get Stacking Rules or Update Stacking Rules endpoints.  📘 Stacking Rules Documentation  Read [the Stacking Rules article](https://support.voucherify.io/article/604-stacking-rules) to learn how they work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listStackingRules($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listStackingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsStackingRulesListResponseBody**](../Model/ManagementProjectsStackingRulesListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsers()`

```php
listUsers($projectId): \OpenAPI\Client\Model\ManagementProjectsUsersListResponseBody
```

List Users

Lists all users assigned to the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listUsers($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsUsersListResponseBody**](../Model/ManagementProjectsUsersListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($projectId): \OpenAPI\Client\Model\ManagementProjectsWebhooksListResponseBody
```

List Webhooks

Lists all webhook configurations for the project.  📘 Webhook Documentation  Read Webhooks v2024-01-1 article to learn how webhooks work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.

try {
    $result = $apiInstance->listWebhooks($projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsWebhooksListResponseBody**](../Model/ManagementProjectsWebhooksListResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignUser()`

```php
unassignUser($projectId, $userId)
```

Unassign User

Unassigns the user from the project. If the user is currently logged in, they are automatically logged out. If the user is assigned to only one project, they cannot be unassigned from that project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$userId = 'userId_example'; // string | Provide the unique identifier of the user. Alternatively, provide the users login.

try {
    $apiInstance->unassignUser($projectId, $userId);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->unassignUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **userId** | **string**| Provide the unique identifier of the user. Alternatively, provide the users login. | |

### Return type

void (empty response body)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBrand()`

```php
updateBrand($projectId, $brandingId, $managementProjectsBrandingUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsBrandingUpdateResponseBody
```

Update Brand

Updates a brand configuration. Only the fields sent in the request will be updated. The fields omitted in the request will remain unchanged.  📘 White Labelling  The white labelling settings which can be found in Project Settings > Brand Details and which are available only for Enterprise clients as a separate service can be configured only in the user interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$brandingId = 'brandingId_example'; // string | Provide the unique identifier of the brand configuration.
$managementProjectsBrandingUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsBrandingUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsBrandingUpdateRequestBody | Defines the brand configuration to be updated.

try {
    $result = $apiInstance->updateBrand($projectId, $brandingId, $managementProjectsBrandingUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateBrand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **brandingId** | **string**| Provide the unique identifier of the brand configuration. | |
| **managementProjectsBrandingUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsBrandingUpdateRequestBody**](../Model/ManagementProjectsBrandingUpdateRequestBody.md)| Defines the brand configuration to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsBrandingUpdateResponseBody**](../Model/ManagementProjectsBrandingUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomEventSchema()`

```php
updateCustomEventSchema($projectId, $customEventSchemaId, $managementProjectsCustomEventSchemasUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasUpdateResponseBody
```

Update Custom Event Schema

Updates a custom event schema. With this request, you can: - Add a non-existing property to a custom event schema. - Update an existing property. In the request, you can provide only those properties you want to add or update. Definitions omitted in the request remain unchanged.  👍 Additional Notes - You can change the type of an existing property, e.g. from string to number. - You can remove a custom property with this endpoint by providing deleted: true in the request. However, you cannot permanently remove an event definition or its property with this endpoint.  📘 Custom Event Documentation  Read [Custom Events](https://support.voucherify.io/article/111-custom-events) article to learn how custom events work in Voucherify. Read also the details about the Track Custom Event endpoint and the Custom Event Object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$customEventSchemaId = 'customEventSchemaId_example'; // string | Provide the unique identifier of the custom event schema.
$managementProjectsCustomEventSchemasUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasUpdateRequestBody | Defines the custom event schema to be updated.

try {
    $result = $apiInstance->updateCustomEventSchema($projectId, $customEventSchemaId, $managementProjectsCustomEventSchemasUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateCustomEventSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **customEventSchemaId** | **string**| Provide the unique identifier of the custom event schema. | |
| **managementProjectsCustomEventSchemasUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasUpdateRequestBody**](../Model/ManagementProjectsCustomEventSchemasUpdateRequestBody.md)| Defines the custom event schema to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsCustomEventSchemasUpdateResponseBody**](../Model/ManagementProjectsCustomEventSchemasUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMetadataSchema()`

```php
updateMetadataSchema($projectId, $metadataSchemaId, $managementProjectsMetadataSchemasUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasUpdateResponseBody
```

Update Metadata Schema

Updates a metadata schema. With this request, you can: - Add a non-existing attribute definition to the metadata schema. - Update an existing attribute definition by overwriting its current values. In the request, you can provide only those definitions you want to add or update. Definitions omitted in the request remain unchanged. However, if you want to update a definition, you will have to add all its current key-value pairs as well. Only the pairs sent in the request are saved for this definition. This means that the key-value pairs that are not sent in a request are restored to default values. For example, if your definition has an array with values and it is not sent in an update request, the array values will be deleted.  👍 Additional Notes - You cannot change the type of an existing schema, e.g. from string to number. - You can remove a definition with this endpoint by providing deleted: true in the request. It will be moved to the Removed definitions section in the user interface. However, you cannot permanently remove a definition with this endpoint.  📘 Metadata Documentation  Read the Getting Started with Metadata articles to learn how metadata work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$metadataSchemaId = 'metadataSchemaId_example'; // string | Provide the unique identifier of the metadata schema.
$managementProjectsMetadataSchemasUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsMetadataSchemasUpdateRequestBody | Defines the metadata schema to be updated.

try {
    $result = $apiInstance->updateMetadataSchema($projectId, $metadataSchemaId, $managementProjectsMetadataSchemasUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateMetadataSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **metadataSchemaId** | **string**| Provide the unique identifier of the metadata schema. | |
| **managementProjectsMetadataSchemasUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasUpdateRequestBody**](../Model/ManagementProjectsMetadataSchemasUpdateRequestBody.md)| Defines the metadata schema to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsMetadataSchemasUpdateResponseBody**](../Model/ManagementProjectsMetadataSchemasUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProject()`

```php
updateProject($projectId, $managementProjectsUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsUpdateResponseBody
```

Update Project

Updates an existing project. You can add or modify settings for timezone, currency, notifications, and other details. Only the fields sent in the request will be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$managementProjectsUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsUpdateRequestBody | Define the project details to be updated.

try {
    $result = $apiInstance->updateProject($projectId, $managementProjectsUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **managementProjectsUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsUpdateRequestBody**](../Model/ManagementProjectsUpdateRequestBody.md)| Define the project details to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsUpdateResponseBody**](../Model/ManagementProjectsUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateStackingRules()`

```php
updateStackingRules($projectId, $stackingRulesId, $managementProjectsStackingRulesUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsStackingRulesUpdateResponseBody
```

Update Stacking Rules

Updates the stacking rules. Only the provided fields will be updated. However, if you update an array, the content of the array is overwritten. This means that if you want to add new values to an array and retain existing ones, you need to provide both the existing and new values in the request.  📘 Stacking Rules Documentation  Read [the Stacking Rules article](https://support.voucherify.io/article/604-stacking-rules) to learn how they work.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$stackingRulesId = 'stackingRulesId_example'; // string | Provide the unique identifier of the stacking rules.
$managementProjectsStackingRulesUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsStackingRulesUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsStackingRulesUpdateRequestBody | Defines the stacking rules to be updated.

try {
    $result = $apiInstance->updateStackingRules($projectId, $stackingRulesId, $managementProjectsStackingRulesUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateStackingRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **stackingRulesId** | **string**| Provide the unique identifier of the stacking rules. | |
| **managementProjectsStackingRulesUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsStackingRulesUpdateRequestBody**](../Model/ManagementProjectsStackingRulesUpdateRequestBody.md)| Defines the stacking rules to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsStackingRulesUpdateResponseBody**](../Model/ManagementProjectsStackingRulesUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($projectId, $userId, $managementProjectsUsersUpdateRoleRequestBody): \OpenAPI\Client\Model\ManagementProjectsUsersUpdateRoleResponseBody
```

Update User

Updates the users role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$userId = 'userId_example'; // string | Provide the unique identifier of the user. Alternatively, provide the users login.
$managementProjectsUsersUpdateRoleRequestBody = new \OpenAPI\Client\Model\ManagementProjectsUsersUpdateRoleRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsUsersUpdateRoleRequestBody | Defines the users new role.

try {
    $result = $apiInstance->updateUser($projectId, $userId, $managementProjectsUsersUpdateRoleRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **userId** | **string**| Provide the unique identifier of the user. Alternatively, provide the users login. | |
| **managementProjectsUsersUpdateRoleRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsUsersUpdateRoleRequestBody**](../Model/ManagementProjectsUsersUpdateRoleRequestBody.md)| Defines the users new role. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsUsersUpdateRoleResponseBody**](../Model/ManagementProjectsUsersUpdateRoleResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhook()`

```php
updateWebhook($projectId, $webhookId, $managementProjectsWebhooksUpdateRequestBody): \OpenAPI\Client\Model\ManagementProjectsWebhooksUpdateResponseBody
```

Update Webhook

Updates a webhook configuration. The events listed in the request are overwritten. If you want to add more events, provide also the events that are already in the webhook configuration.  📘 Webhook Documentation  Read Webhooks v2024-01-1 article to learn how webhooks work in Voucherify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-Management-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Token', 'Bearer');

// Configure API key authorization: X-Management-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Management-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Management-Id', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$projectId = 'projectId_example'; // string | Provide the unique identifier of the project.
$webhookId = 'webhookId_example'; // string | Provide the unique identifier of the webhook configuration.
$managementProjectsWebhooksUpdateRequestBody = new \OpenAPI\Client\Model\ManagementProjectsWebhooksUpdateRequestBody(); // \OpenAPI\Client\Model\ManagementProjectsWebhooksUpdateRequestBody | Defines the webhook configuration to be updated.

try {
    $result = $apiInstance->updateWebhook($projectId, $webhookId, $managementProjectsWebhooksUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManagementApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**| Provide the unique identifier of the project. | |
| **webhookId** | **string**| Provide the unique identifier of the webhook configuration. | |
| **managementProjectsWebhooksUpdateRequestBody** | [**\OpenAPI\Client\Model\ManagementProjectsWebhooksUpdateRequestBody**](../Model/ManagementProjectsWebhooksUpdateRequestBody.md)| Defines the webhook configuration to be updated. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ManagementProjectsWebhooksUpdateResponseBody**](../Model/ManagementProjectsWebhooksUpdateResponseBody.md)

### Authorization

[X-Management-Token](../../README.md#X-Management-Token), [X-Management-Id](../../README.md#X-Management-Id)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
