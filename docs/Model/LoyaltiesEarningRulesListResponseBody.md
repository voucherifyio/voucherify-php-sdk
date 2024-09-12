# # LoyaltiesEarningRulesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about earning rules in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of earning rule objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\EarningRule[]**](EarningRule.md) | Contains array of earning rule objects. | [optional]
**total** | **int** | Total number of earning rule objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
