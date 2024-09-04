# # LoyaltiesEarningRulesCreateCustomEventRequestBodyLoyalty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**points** | **int** | Defines how the points will be added to the loyalty card. FIXED adds a fixed number of points. | [optional]
**calculation_type** | **string** | CUSTOM_EVENT_METADATA: Custom event metadata (X points for every Y in metadata attribute). | [optional] [default to 'CUSTOM_EVENT_METADATA']
**custom_event** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateCustomEventRequestBodyLoyaltyCustomEvent**](LoyaltiesEarningRulesCreateCustomEventRequestBodyLoyaltyCustomEvent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
