# # LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyalty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**points** | **int** | Defines how the points will be added to the loyalty card. FIXED adds a fixed number of points. | [optional]
**calculation_type** | **string** | CUSTOMER_METADATA: Customer Metadata (X points for every Y in metadata attribute, defined in the property key under the customer.metadata object) | [optional] [default to 'CUSTOMER_METADATA']
**customer** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyaltyCustomer**](LoyaltiesEarningRulesCreateEnteredSegmentRequestBodyLoyaltyCustomer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
