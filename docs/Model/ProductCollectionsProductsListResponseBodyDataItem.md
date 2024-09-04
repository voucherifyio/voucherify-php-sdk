# # ProductCollectionsProductsListResponseBodyDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**source_id** | **string** |  | [optional]
**name** | **string** | Unique user-defined product name. | [optional]
**price** | **int** | Unit price. It is represented by a value multiplied by 100 to accurately reflect 2 decimal places, such as &#x60;$100.00&#x60; being expressed as &#x60;10000&#x60;. | [optional]
**attributes** | **string[]** | A list of product attributes whose values you can customize for given SKUs: &#x60;[\&quot;color\&quot;,\&quot;size\&quot;,\&quot;ranking\&quot;]&#x60;. Each child SKU can have a unique value for a given attribute. | [optional]
**metadata** | **object** |  | [optional]
**image_url** | **string** |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**object** | **string** |  | [optional]
**product_id** | **string** | The parent product&#39;s unique ID. | [optional]
**sku** | **string** | Unique user-defined SKU name. | [optional]
**currency** | **string** | SKU price currency. | [optional]
**product** | [**\OpenAPI\Client\Model\ProductWithoutSkus**](ProductWithoutSkus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
