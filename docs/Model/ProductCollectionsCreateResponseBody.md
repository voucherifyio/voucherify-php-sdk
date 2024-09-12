# # ProductCollectionsCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Product collection ID. | [optional]
**name** | **string** | Unique user-defined product collection name. | [optional]
**type** | **string** | Describes whether the product collection is dynamic (products come in and leave based on set criteria) or static (manually selected products). | [optional]
**filter** | [**\OpenAPI\Client\Model\ProductCollectionsCreateResponseBodyFilter**](ProductCollectionsCreateResponseBodyFilter.md) |  | [optional]
**products** | [**\OpenAPI\Client\Model\ProductCollectionsCreateResponseBodyProductsItem[]**](ProductCollectionsCreateResponseBodyProductsItem.md) | Defines a set of products for a &#x60;STATIC&#x60; product collection type. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the product collection was created. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the static product collection. | [optional] [default to 'products_collection']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
