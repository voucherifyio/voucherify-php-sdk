# # LoyaltiesPointsExpirationExportCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique export ID. | [optional]
**object** | **string** | The type of object being represented. This object stores information about the export. | [optional] [default to 'export']
**created_at** | **\DateTime** | Timestamp representing the date and time when the export was scheduled in ISO 8601 format. | [optional]
**status** | **string** | Status of the export. Informs you whether the export has already been completed. | [optional] [default to 'SCHEDULED']
**channel** | **string** | The channel through which the export was triggered. | [optional]
**exported_object** | **string** | The type of exported object. | [optional] [default to 'points_expiration']
**parameters** | [**\OpenAPI\Client\Model\LoyaltiesPointsExpirationExportCreateResponseBodyParameters**](LoyaltiesPointsExpirationExportCreateResponseBodyParameters.md) |  | [optional]
**result** | **object** | Always null. | [optional]
**user_id** | **string** | &#x60;user_id&#x60; identifies the specific user who initiated the export through the Voucherify Dashboard. &#x60;user_id&#x60; is returned when the channel value is &#x60;WEBSITE&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
