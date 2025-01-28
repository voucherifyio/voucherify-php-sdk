# # RedemptionsListResponseBodyRedemptionsItemOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID assigned by Voucherify of an existing order that will be linked to the redemption of this request. | [optional]
**sourceId** | **string** | Unique source ID of an existing order that will be linked to the redemption of this request. | [optional]
**status** | **string** | The order status. | [optional]
**amount** | **int** | This is the sum of the order items&#39; amounts. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**initialAmount** | **int** | This is the sum of the order items&#39; amounts before any discount or other effect (e.g. add missing units) is applied. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**discountAmount** | **int** | Sum of all order-level discounts applied to the order. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**itemsDiscountAmount** | **int** | Sum of all product-specific discounts applied to the order. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**totalDiscountAmount** | **int** | Sum of all order-level AND all product-specific discounts applied to the order. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**totalAmount** | **int** | Order amount after undoing all the discounts through the rollback redemption. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**appliedDiscountAmount** | **int** | This field shows the order-level discount applied. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00). | [optional]
**itemsAppliedDiscountAmount** | **int** | Sum of all product-specific discounts applied in a particular request. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00).   &#x60;sum(items, i &#x3D;&gt; i.applied_discount_amount)&#x60; | [optional]
**totalAppliedDiscountAmount** | **int** | Sum of all order-level AND all product-specific discounts applied in a particular request. It is expressed as an integer in the smallest currency unit (e.g. 100 cents for $1.00).   &#x60;total_applied_discount_amount&#x60; &#x3D; &#x60;applied_discount_amount&#x60; + &#x60;items_applied_discount_amount&#x60; | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to an order. It can be useful for storing additional information about the order in a structured format. It can be used to define business validation rules or discount formulas. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'order']
**createdAt** | **\DateTime** | Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the order was last updated in ISO 8601 format. | [optional]
**customerId** | **string** | Unique customer identifier of the customer making the purchase. The ID is assigned by Voucherify. | [optional]
**referrerId** | **string** | Unique referrer ID. | [optional]
**customer** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemOrderCustomer**](RedemptionsListResponseBodyRedemptionsItemOrderCustomer.md) |  | [optional]
**referrer** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemOrderReferrer**](RedemptionsListResponseBodyRedemptionsItemOrderReferrer.md) |  | [optional]
**redemptions** | [**array<string,\OpenAPI\Client\Model\OrderRedemptionsEntry>**](OrderRedemptionsEntry.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\OrderCalculatedItem[]**](OrderCalculatedItem.md) | Array of items applied to the order. It can include up 500 items. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
