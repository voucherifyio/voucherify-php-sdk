# # LoyaltiesExamineEarningRulesExamineRequestBodyOrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order item ID assigned by Voucherify. Can be &#x60;null&#x60;. | [optional]
**sourceId** | **string** | Order item source ID, e.g. from an external system. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**productId** | **string** | Product ID. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**skuId** | **string** | SKU ID. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**relatedObject** | **mixed** |  | [optional]
**amount** | **float** | Item amount before discounts - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**discountAmount** | **float** | Item discount amount - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**quantity** | **float** | Item quantity - a positive integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**price** | **float** | Item unit price - a non-negative integer. May be provided as a string or a number. Can be &#x60;null&#x60;. | [optional]
**product** | **mixed** |  | [optional]
**sku** | **mixed** |  | [optional]
**metadata** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
