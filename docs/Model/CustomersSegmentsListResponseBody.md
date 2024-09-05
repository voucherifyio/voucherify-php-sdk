# # CustomersSegmentsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about customer segments. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the JSON property that contains the array of segment IDs. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\SimpleSegment[]**](SimpleSegment.md) | A dictionary that contains an array of segment IDs and names. | [optional]
**total** | **int** | Total number of segments the customer belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
