# # AsyncActionBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Async action unique ID. | [optional]
**type** | **string** | Type of async action. | [optional]
**status** | **string** | Status of the async action. Informs you whether the async action has already been completed. | [optional]
**operationStatus** | **string** | Status of async action processing. Informs about the async action status, whether it failed, succeeded, or the status is unknown. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the async action was scheduled in ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the async action was updated. The value is shown in the ISO 8601 format. | [optional]
**requestId** | **string** | Unique request ID. | [optional]
**processingTime** | **int** | The length of time it took to process the request in milliseconds. | [optional]
**progress** | **int** | % progress to completion of the asynchronous action. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the &#x60;async_action&#x60;. | [optional] [default to 'async_action']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
