# # ManagementProjectsWebhooksListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the webhook configurations in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of webhook objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ManagementProjectsWebhook[]**](ManagementProjectsWebhook.md) | Array of webhook objects. | [optional]
**total** | **int** | The total number of webhook objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
