# # CardActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** | Timestamp when the activity was recorded (ISO 8601). | [optional]
**groupId** | **string** | ID grouping activities recorded within the same request. | [optional]
**source** | [**\OpenAPI\Client\Model\ActivitySource**](ActivitySource.md) |  | [optional]
**id** | **string** | Unique activity ID. | [optional]
**cardId** | **string** | ID of the card the activity relates to. | [optional]
**type** | **string** | Activity type. Allowed values: &#x60;vl.card.created&#x60;, &#x60;vl.card.assigned&#x60;, &#x60;vl.card.unassigned&#x60;, &#x60;vl.card.code_generation.succeeded&#x60;, and &#x60;vl.card.code_generation.failed&#x60;. | [optional]
**data** | [**\OpenAPI\Client\Model\CardActivityData**](CardActivityData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
