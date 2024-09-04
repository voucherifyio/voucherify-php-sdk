# # OrderItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the &#x60;order_item&#x60;. | [optional] [default to 'order_item']
**sku_id** | **string** | Unique identifier of the SKU. It is assigned by Voucherify. | [optional]
**product_id** | **string** | Unique identifier of the product. It is assigned by Voucherify. | [optional]
**related_object** | **string** | Used along with the source_id property, can be set to either sku or product. | [optional]
**source_id** | **string** | The merchant&#39;s product/SKU ID (if it is different from the Voucherify product/SKU ID). It is useful in the integration between multiple systems. It can be an ID from an eCommerce site, a database, or a third-party service. | [optional]
**quantity** | **int** | The quantity of the particular item in the cart. | [optional]
**discount_quantity** | **int** | Number of dicounted items. | [optional]
**initial_quantity** | **int** | A positive integer in the smallest unit quantity representing the total amount of the order; this is the sum of the order items&#39; quantity. | [optional]
**amount** | **int** | The total amount of the order item (price * quantity). | [optional]
**discount_amount** | **int** | Sum of all order-item-level discounts applied to the order. | [optional]
**initial_amount** | **int** | A positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the total amount of the order. This is the sum of the order items&#39; amounts. | [optional]
**applied_discount_amount** | **int** | Order-level discount amount applied in the transaction. | [optional]
**applied_discount_quantity** | **int** | Number of the discounted items applied in the transaction. | [optional]
**applied_quantity** | **int** | Quantity of items changed by the application of a new quantity items. It can be positive when an item is added or negative if an item is replaced. | [optional]
**applied_quantity_amount** | **int** | Amount for the items changed by the application of a new quantity items. It can be positive when an item is added or negative if an item is replaced. | [optional]
**price** | **int** | Unit price of an item. Value is multiplied by 100 to precisely represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**subtotal_amount** | **int** | Final order item amount after the applied item-level discount.  If there are no item-level discounts applied, this item is equal to the &#x60;amount&#x60;.    &#x60;subtotal_amount&#x60;&#x3D;&#x60;amount&#x60;-&#x60;discount_amount&#x60; | [optional]
**product** | [**\OpenAPI\Client\Model\OrderItemProduct**](OrderItemProduct.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\OrderItemSku**](OrderItemSku.md) |  | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to an order item. It can be useful for storing additional information about the order item in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
