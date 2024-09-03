# # PublicationsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about publications in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of publications. | [optional] [default to 'publications']
**publications** | [**\OpenAPI\Client\Model\PublicationsListResponseBodyPublicationsItem[]**](PublicationsListResponseBodyPublicationsItem.md) | Response schema model for publishing vouchers to a specific customer. | [optional]
**total** | **int** | Total number of publications. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
