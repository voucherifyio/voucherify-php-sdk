# # OrdersUpdateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The order status. | [optional]
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**discount_amount** | **int** | Sum of all order-level discounts applied to the order. | [optional]
**initial_amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**items** | [**\OpenAPI\Client\Model\OrderItem[]**](OrderItem.md) | Array of items applied to the order. | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**customer_id** | **string** | Unique customer ID of the customer making the purchase. | [optional]
**referrer** | [**\OpenAPI\Client\Model\Referrer**](Referrer.md) |  | [optional]
**referrer_id** | **string** | Unique referrer ID. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to an order. It can be useful for storing additional information about the order in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
