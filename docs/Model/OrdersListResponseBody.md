# # OrdersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about orders in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of order objects. | [optional] [default to 'orders']
**orders** | [**\OpenAPI\Client\Model\OrderCalculated[]**](OrderCalculated.md) | Contains array of order objects. | [optional]
**total** | **int** | Total number of orders. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
