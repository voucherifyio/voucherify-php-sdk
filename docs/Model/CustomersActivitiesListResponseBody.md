# # CustomersActivitiesListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about customer activities in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of customer activity objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\CustomerActivity[]**](CustomerActivity.md) | Array of customer activity objects. | [optional]
**total** | **int** | Total number of customer activities. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
