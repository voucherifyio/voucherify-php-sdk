# # SegmentsGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique segment ID. | [optional]
**name** | **string** | Segment name. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the segment was created. The value is shown in the ISO 8601 format. | [optional]
**type** | **string** | Describes whether the segment is dynamic (customers come in and leave based on set criteria) or static (manually selected customers). | [optional]
**filter** | **object** | Defines a set of criteria for an &#x60;auto-update&#x60; segment type. | [optional]
**initial_sync_status** | **string** |  | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the customer segment. | [optional] [default to 'segment']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
