# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID assigned by Voucherify of an existing order that will be linked to the redemption of this request. | [optional]
**sourceId** | **string** | Unique source ID of an existing order that will be linked to the redemption of this request. | [optional]
**status** | **string** | The order status. | [optional]
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**initialAmount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**discountAmount** | **int** | Sum of all order-level discounts applied to the order. | [optional]
**items** | [**\OpenAPI\Client\Model\OrderItem[]**](OrderItem.md) | Array of items applied to the order. It can include up 500 items. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to an order. It can be useful for storing additional information about the order in a structured format. It can be used to define business validation rules or discount formulas. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
