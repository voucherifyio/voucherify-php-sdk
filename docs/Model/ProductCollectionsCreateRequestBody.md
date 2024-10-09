# # ProductCollectionsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Show that the product collection is static (manually selected products). | [optional] [default to 'STATIC']
**name** | **string** | Unique user-defined product collection name. | [optional]
**products** | [**\OpenAPI\Client\Model\ProductCollectionsCreateRequestBodyProductsItem[]**](ProductCollectionsCreateRequestBodyProductsItem.md) | Defines a set of products for a &#x60;STATIC&#x60; product collection type. | [optional]
**filter** | **object** | Defines a set of criteria and boundary conditions for an &#x60;AUTO_UPDATE&#x60; product collection type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
