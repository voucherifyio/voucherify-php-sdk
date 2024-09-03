# # ExportsGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique export ID. | [optional]
**object** | **string** | The type of object being represented. This object stores information about the export. | [optional] [default to 'export']
**created_at** | **\DateTime** | Timestamp representing the date and time when the export was scheduled in ISO 8601 format. | [optional]
**status** | **string** | Status of the export. Informs you whether the export has already been completed, i.e. indicates whether the file containing the exported data has been generated. | [optional]
**channel** | **string** | The channel through which the export was triggered. | [optional]
**result** | [**\OpenAPI\Client\Model\ExportsGetResponseBodyResult**](ExportsGetResponseBodyResult.md) |  | [optional]
**user_id** | **string** | Identifies the specific user who initiated the export through the Voucherify Dashboard; returned when the channel value is WEBSITE. | [optional]
**exported_object** | **string** |  | [optional]
**parameters** | [**\OpenAPI\Client\Model\ExportsGetResponseBodyParameters**](ExportsGetResponseBodyParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
