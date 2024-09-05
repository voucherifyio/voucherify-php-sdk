# # CustomersActivityListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about customer activities in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of customer activity objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\CustomerActivity[]**](CustomerActivity.md) | Array of customer activity objects. | [optional]
**hasMore** | **bool** | As query results are always limited (by the limit parameter), the &#x60;has_more&#x60; flag indicates if there are more records for given filter parameters. This lets you know if you can run another request with a &#x60;starting_after_id&#x60; query or a different limit to get more records returned in the results. | [optional]
**moreStartingAfter** | **string** | Returns an ID that can be used to return another page of results. Use the event id in the &#x60;starting_after_id&#x60; query parameter to display another page of the results starting after the event with that ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
