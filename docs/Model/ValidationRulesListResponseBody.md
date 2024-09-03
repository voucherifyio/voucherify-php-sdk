# # ValidationRulesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about validation rules. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of validation rules. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ValidationRule[]**](ValidationRule.md) | An array of validation rules. | [optional]
**total** | **int** | Total number of validation rules in the project. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
