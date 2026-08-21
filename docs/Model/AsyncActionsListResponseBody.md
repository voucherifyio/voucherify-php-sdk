# # AsyncActionsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about asynchronous actions. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the JSON property that contains the array of asynchronous actions. | [optional] [default to 'async_actions']
**asyncActions** | [**\OpenAPI\Client\Model\AsyncActionBase[]**](AsyncActionBase.md) |  | [optional]
**hasMore** | **bool** | As query results are always limited by parameters, the &#x60;has_more&#x60; flag indicates if there are more records available. This lets you know if you can run another request to get more records returned in the results. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
