# # ManagementProjectsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the projects in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of project objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ManagementProject[]**](ManagementProject.md) | Array of project objects. | [optional]
**total** | **int** | The total number of projects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
