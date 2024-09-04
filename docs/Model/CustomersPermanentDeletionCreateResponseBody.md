# # CustomersPermanentDeletionCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique permanent deletion object ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the customer was requested to be deleted in ISO 8601 format. | [optional]
**related_object_id** | **string** | Unique customer ID that is being deleted. | [optional]
**related_object** | **string** | Object being deleted. | [optional] [default to 'customer']
**status** | **string** | Deletion status. | [optional] [default to 'DONE']
**data_json** | [**\OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBodyDataJson**](CustomersPermanentDeletionCreateResponseBodyDataJson.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'pernament_deletion']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
