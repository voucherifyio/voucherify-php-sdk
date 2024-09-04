# # OrdersCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID assigned by Voucherify of an existing order that will be linked to the redemption of this request. | [optional]
**source_id** | **string** | Unique source ID of an existing order that will be linked to the redemption of this request. | [optional]
**status** | **string** | The order status. | [optional]
**amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**initial_amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**discount_amount** | **int** | Sum of all order-level discounts applied to the order. | [optional]
**items_discount_amount** | **int** | Sum of all product-specific discounts applied to the order. | [optional]
**total_discount_amount** | **int** | Sum of all order-level AND all product-specific discounts applied to the order. | [optional]
**total_amount** | **int** | Order amount after undoing all the discounts through the rollback redemption. | [optional]
**applied_discount_amount** | **int** | This field shows the order-level discount applied. | [optional]
**items_applied_discount_amount** | **int** | Sum of all product-specific discounts applied in a particular request.   &#x60;sum(items, i &#x3D;&gt; i.applied_discount_amount)&#x60; | [optional]
**total_applied_discount_amount** | **int** | Sum of all order-level AND all product-specific discounts applied in a particular request.   &#x60;total_applied_discount_amount&#x60; &#x3D; &#x60;applied_discount_amount&#x60; + &#x60;items_applied_discount_amount&#x60; | [optional]
**items** | [**\OpenAPI\Client\Model\OrderItemCalculated[]**](OrderItemCalculated.md) | Array of items applied to the order. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to an order. It can be useful for storing additional information about the order in a structured format. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'order']
**created_at** | **\DateTime** | Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the order was last updated in ISO 8601 format. | [optional]
**customer_id** | **string** | Unique customer ID of the customer making the purchase. | [optional]
**referrer_id** | **string** | Unique referrer ID. | [optional]
**customer** | [**\OpenAPI\Client\Model\OrdersCreateResponseBodyCustomer**](OrdersCreateResponseBodyCustomer.md) |  | [optional]
**referrer** | [**\OpenAPI\Client\Model\OrdersCreateResponseBodyReferrer**](OrdersCreateResponseBodyReferrer.md) |  | [optional]
**redemptions** | [**array<string,\OpenAPI\Client\Model\OrderRedemptions>**](OrderRedemptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
