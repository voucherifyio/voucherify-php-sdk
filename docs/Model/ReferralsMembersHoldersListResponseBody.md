# # ReferralsMembersHoldersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about redeemables holders | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the JSON property that contains the array of holders. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\RedeemableHolder[]**](RedeemableHolder.md) | A dictionary that contains an array of holders. | [optional]
**total** | **int** | Total number of holders assigned to the redeemable. | [optional]
**hasMore** | **bool** | As query results are always limited (by the limit parameter), the &#x60;has_more&#x60; flag indicates if there are more records for given filter parameters. This lets you know if you can run another request with a &#x60;starting_after_id&#x60; query or a different limit to get more records returned in the results. | [optional]
**moreStartingAfter** | **string** | Returns an ID that can be used to return another page of results. Use the ID in the &#x60;starting_after_id&#x60; query parameter to display another page of the results occuring after the field with that ID. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
