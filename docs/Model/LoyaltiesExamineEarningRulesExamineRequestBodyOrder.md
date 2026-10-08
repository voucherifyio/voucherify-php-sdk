# # LoyaltiesExamineEarningRulesExamineRequestBodyOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Order amount after discounts - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**initialAmount** | **float** | Order amount before discounts - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**discountAmount** | **float** | Total discount amount - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**items** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineRequestBodyOrderItem[]**](LoyaltiesExamineEarningRulesExamineRequestBodyOrderItem.md) | Order line items (up to 500). Can be &#x60;null&#x60;. | [optional]
**metadata** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
