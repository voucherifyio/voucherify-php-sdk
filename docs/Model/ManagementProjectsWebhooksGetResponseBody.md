# # ManagementProjectsWebhooksGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the webhook. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'webhook']
**createdAt** | **\DateTime** | Timestamp representing the date and time when the webhook configuration was created. The value for this parameter is shown in the ISO 8601 format. | [optional]
**targetUrl** | **string** | URL address that receives webhooks. | [optional]
**events** | **string[]** | Lists the events that trigger webhook sendout. | [optional]
**active** | **bool** | Determines if the webhook configuration is active. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
