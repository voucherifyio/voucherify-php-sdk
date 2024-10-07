# # MetadataSchemasListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the metadata schemas in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of metadata schema objects. | [optional] [default to 'schemas']
**schemas** | [**\OpenAPI\Client\Model\MetadataSchemaDeprecated[]**](MetadataSchemaDeprecated.md) | Array of metadata schema objects. The metadata schemas are listed by related object properties. | [optional]
**total** | **int** | The total number of metadata schema objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
