# # CustomersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about customers in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of customer objects. | [optional] [default to 'customers']
**customers** | [**\OpenAPI\Client\Model\CustomerWithSummaryLoyaltyReferrals[]**](CustomerWithSummaryLoyaltyReferrals.md) | Contains array of customer objects. | [optional]
**total** | **int** | Total number of customers. | [optional]
**has_more** | **bool** | As query results are always limited (by the limit parameter), the &#x60;has_more&#x60; flag indicates if there are more records for given filter parameters. This lets you know if you can run another request (with a different end date filter) to get more records returned in the results. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
