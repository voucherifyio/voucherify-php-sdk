# # ManagementProjectsStackingRulesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the stacking rules in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of stacking rule objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ManagementProjectsStackingRules[]**](ManagementProjectsStackingRules.md) | Array of only one stacking rule object. | [optional]
**total** | **int** | The total number of stacking rule objects. It is always 1. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
