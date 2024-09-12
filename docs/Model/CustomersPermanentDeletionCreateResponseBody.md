# # CustomersPermanentDeletionCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique permanent deletion object ID. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the customer was requested to be deleted in ISO 8601 format. | [optional]
**relatedObjectId** | **string** | Unique customer ID that is being deleted. | [optional]
**relatedObject** | **string** | Object being deleted. | [optional] [default to 'customer']
**status** | **string** | Deletion status. | [optional] [default to 'DONE']
**dataJson** | [**\OpenAPI\Client\Model\CustomersPermanentDeletionCreateResponseBodyDataJson**](CustomersPermanentDeletionCreateResponseBodyDataJson.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'pernament_deletion']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
