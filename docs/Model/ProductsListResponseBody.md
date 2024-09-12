# # ProductsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about products in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of product objects. | [optional] [default to 'products']
**products** | [**\OpenAPI\Client\Model\Product[]**](Product.md) | Contains array of product objects. | [optional]
**total** | **int** | Total number of product objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
