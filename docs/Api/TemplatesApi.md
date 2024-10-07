# OpenAPI\Client\TemplatesApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addTierFromTemplate()**](TemplatesApi.md#addTierFromTemplate) | **POST** /v1/templates/campaigns/{campaignTemplateId}/tier-setup | Add Promotion Tier From Template |
| [**createCampaignFromTemplate()**](TemplatesApi.md#createCampaignFromTemplate) | **POST** /v1/templates/campaigns/{campaignTemplateId}/campaign-setup | Create Campaign From Template |
| [**createCampaignTemplate()**](TemplatesApi.md#createCampaignTemplate) | **POST** /v1/templates/campaigns | Create Campaign Template |
| [**deleteCampaignTemplate()**](TemplatesApi.md#deleteCampaignTemplate) | **DELETE** /v1/templates/campaigns/{campaignTemplateId} | Delete Campaign Template |
| [**getCampaignTemplate()**](TemplatesApi.md#getCampaignTemplate) | **GET** /v1/templates/campaigns/{campaignTemplateId} | Get Campaign Template |
| [**listCampaignTemplates()**](TemplatesApi.md#listCampaignTemplates) | **GET** /v1/templates/campaigns | List Campaign Templates |
| [**updateCampaignTemplate()**](TemplatesApi.md#updateCampaignTemplate) | **PUT** /v1/templates/campaigns/{campaignTemplateId} | Update Campaign Template |


## `addTierFromTemplate()`

```php
addTierFromTemplate($campaignTemplateId, $templatesCampaignsTierSetupCreateRequestBody): \OpenAPI\Client\Model\TemplatesCampaignsTierSetupCreateResponseBody
```

Add Promotion Tier From Template

Creates a promotion tier out of a discount campaign template and adds it to an existing promotion campaign. To add a promotion tier to a campaign, you need to provide the name in the request and the campaign ID. Other fields are optional. If no other fields are sent, the configuration from the template will be used. You can send new values of the fields listed below to replace the settings saved in the template. However, you cannot assign an action or an existing validation rule or create a new one in the request. If the template has a validation rule, a new validation rule is always created for the promotion tier. When the promotion tier has been created, then you can: - Update the validation rule, - Unassign the validation rule, - Assign an existing validation rule.  👍 Promotion Tiers and Campaign Templates You can create a campaign template out of a promotion tier. Promotion tiers are converted to a discount campaign with the DISCOUNT_COUPON type. You can use this template to create: - Discount campaign - Promotion tier  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTemplateId = 'campaignTemplateId_example'; // string | Pass the campaign template ID that was assigned by Voucherify.
$templatesCampaignsTierSetupCreateRequestBody = new \OpenAPI\Client\Model\TemplatesCampaignsTierSetupCreateRequestBody(); // \OpenAPI\Client\Model\TemplatesCampaignsTierSetupCreateRequestBody | Only name and campaign_id are required. The rest of the fields will overwrite the template configuration.

try {
    $result = $apiInstance->addTierFromTemplate($campaignTemplateId, $templatesCampaignsTierSetupCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->addTierFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignTemplateId** | **string**| Pass the campaign template ID that was assigned by Voucherify. | |
| **templatesCampaignsTierSetupCreateRequestBody** | [**\OpenAPI\Client\Model\TemplatesCampaignsTierSetupCreateRequestBody**](../Model/TemplatesCampaignsTierSetupCreateRequestBody.md)| Only name and campaign_id are required. The rest of the fields will overwrite the template configuration. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsTierSetupCreateResponseBody**](../Model/TemplatesCampaignsTierSetupCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignFromTemplate()`

```php
createCampaignFromTemplate($campaignTemplateId, $templatesCampaignsCampaignSetupCreateRequestBody): \OpenAPI\Client\Model\TemplatesCampaignsCampaignSetupCreateResponseBody
```

Create Campaign From Template

Creates a campaign out of a campaign template. To create a campaign, you need to provide the name in the request, while other fields are optional. If no other fields are sent, the configuration from the template will be used. You can send new values of the fields listed below to replace the settings saved in the template. However, you cannot assign an existing validation rule or create a new one in the request. If the template has a validation rule, a new validation rule is always created for the campaign. When the campaign has been created, then you can: - Update the validation rule, - Unassign the validation rule, - Assign an existing validation rule.  👍 Promotion Tiers and Campaign Templates You can create a campaign template out of a promotion tier. Promotion tiers are converted to a discount campaign with the DISCOUNT_COUPON type. You can use this template to create: - Discount campaign - Promotion tier  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTemplateId = 'campaignTemplateId_example'; // string | Pass the campaign template ID that was assigned by Voucherify.
$templatesCampaignsCampaignSetupCreateRequestBody = {"name":"Campaign-out-of-template","description":"Created out of a template","auto_join":true,"join_once":true}; // \OpenAPI\Client\Model\TemplatesCampaignsCampaignSetupCreateRequestBody | Only name is required. The rest of the fields will overwrite the template configuration.

try {
    $result = $apiInstance->createCampaignFromTemplate($campaignTemplateId, $templatesCampaignsCampaignSetupCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createCampaignFromTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignTemplateId** | **string**| Pass the campaign template ID that was assigned by Voucherify. | |
| **templatesCampaignsCampaignSetupCreateRequestBody** | [**\OpenAPI\Client\Model\TemplatesCampaignsCampaignSetupCreateRequestBody**](../Model/TemplatesCampaignsCampaignSetupCreateRequestBody.md)| Only name is required. The rest of the fields will overwrite the template configuration. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsCampaignSetupCreateResponseBody**](../Model/TemplatesCampaignsCampaignSetupCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaignTemplate()`

```php
createCampaignTemplate($templatesCampaignsCreateRequestBody): \OpenAPI\Client\Model\TemplatesCampaignsCreateTemplateResponseBody
```

Create Campaign Template

Creates a template for a discount or gift campaign, or a promotion tier. A template stores campaign configuration **without** the following details: - Campaign name - Category - Code count The following elements are not supported by campaign templates: - Redeeming API keys - Redeeming users - Customer loyalty tier - Static segments  👍 Promotion Tiers and Campaign Templates You can create a campaign template out of a promotion tier. Promotion tiers are converted to a discount campaign with the DISCOUNT_COUPON type. You can use this template to create: - Discount campaign, - Promotion tier.  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$templatesCampaignsCreateRequestBody = new \OpenAPI\Client\Model\TemplatesCampaignsCreateRequestBody(); // \OpenAPI\Client\Model\TemplatesCampaignsCreateRequestBody | Provide details for a campaign template

try {
    $result = $apiInstance->createCampaignTemplate($templatesCampaignsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createCampaignTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **templatesCampaignsCreateRequestBody** | [**\OpenAPI\Client\Model\TemplatesCampaignsCreateRequestBody**](../Model/TemplatesCampaignsCreateRequestBody.md)| Provide details for a campaign template | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsCreateTemplateResponseBody**](../Model/TemplatesCampaignsCreateTemplateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignTemplate()`

```php
deleteCampaignTemplate($campaignTemplateId)
```

Delete Campaign Template

Deletes the campaign template permanently.  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTemplateId = 'campaignTemplateId_example'; // string | Pass the campaign template ID that was assigned by Voucherify.

try {
    $apiInstance->deleteCampaignTemplate($campaignTemplateId);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteCampaignTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignTemplateId** | **string**| Pass the campaign template ID that was assigned by Voucherify. | |

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

## `getCampaignTemplate()`

```php
getCampaignTemplate($campaignTemplateId): \OpenAPI\Client\Model\TemplatesCampaignsGetResponseBody
```

Get Campaign Template

Retrieves a campaign template available in the project.  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTemplateId = 'campaignTemplateId_example'; // string | Pass the campaign template ID that was assigned by Voucherify.

try {
    $result = $apiInstance->getCampaignTemplate($campaignTemplateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getCampaignTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignTemplateId** | **string**| Pass the campaign template ID that was assigned by Voucherify. | |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsGetResponseBody**](../Model/TemplatesCampaignsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCampaignTemplates()`

```php
listCampaignTemplates($limit, $startingAfterId, $order, $includeTotal, $filters): \OpenAPI\Client\Model\TemplatesCampaignsListResponseBody
```

List Campaign Templates

Lists all campaign templates available in the project.  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items.
$startingAfterId = 'startingAfterId_example'; // string | A cursor for pagination. It retrieves the campaign templates created after a template with the given ID.
$order = new \OpenAPI\Client\Model\ParameterTemplatesList(); // ParameterTemplatesList | Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order.
$includeTotal = True; // bool | If set to true, the response returns the number of all campaign templates, regardless of the applied filters or limits. Set to false by default.
$filters = new \OpenAPI\Client\Model\ParameterFiltersListTemplates(); // ParameterFiltersListTemplates | Filters for listing templates.

try {
    $result = $apiInstance->listCampaignTemplates($limit, $startingAfterId, $order, $includeTotal, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->listCampaignTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limits the number of objects to be returned. The limit can range between 1 and 100 items. If no limit is set, it returns 10 items. | [optional] |
| **startingAfterId** | **string**| A cursor for pagination. It retrieves the campaign templates created after a template with the given ID. | [optional] |
| **order** | [**ParameterTemplatesList**](../Model/.md)| Sorts the results using one of the filtering options, where the dash - preceding a sorting option means sorting in a descending order. | [optional] |
| **includeTotal** | **bool**| If set to true, the response returns the number of all campaign templates, regardless of the applied filters or limits. Set to false by default. | [optional] |
| **filters** | [**ParameterFiltersListTemplates**](../Model/.md)| Filters for listing templates. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsListResponseBody**](../Model/TemplatesCampaignsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCampaignTemplate()`

```php
updateCampaignTemplate($campaignTemplateId, $templatesCampaignsUpdateRequestBody): \OpenAPI\Client\Model\TemplatesCampaignsUpdateResponseBody
```

Update Campaign Template

Updates the name or description of the campaign template.  📘 Campaign Templates – Documentation Read the [Campaign Templates documentation](https://support.voucherify.io/article/620-campaign-templates) to learn more about this feature.

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


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignTemplateId = 'campaignTemplateId_example'; // string | Pass the campaign template ID that was assigned by Voucherify.
$templatesCampaignsUpdateRequestBody = new \OpenAPI\Client\Model\TemplatesCampaignsUpdateRequestBody(); // \OpenAPI\Client\Model\TemplatesCampaignsUpdateRequestBody | Provide the new name or description for the campaign template

try {
    $result = $apiInstance->updateCampaignTemplate($campaignTemplateId, $templatesCampaignsUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateCampaignTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaignTemplateId** | **string**| Pass the campaign template ID that was assigned by Voucherify. | |
| **templatesCampaignsUpdateRequestBody** | [**\OpenAPI\Client\Model\TemplatesCampaignsUpdateRequestBody**](../Model/TemplatesCampaignsUpdateRequestBody.md)| Provide the new name or description for the campaign template | [optional] |

### Return type

[**\OpenAPI\Client\Model\TemplatesCampaignsUpdateResponseBody**](../Model/TemplatesCampaignsUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
