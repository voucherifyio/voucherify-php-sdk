# # ProductsSkusListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about SKUs. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the JSON property that contains the array of SKUs. | [optional] [default to 'data']
**skus** | [**\OpenAPI\Client\Model\Sku[]**](Sku.md) | A dictionary that contains an array of SKUs. | [optional]
**total** | **int** | Total number of SKUs in the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
