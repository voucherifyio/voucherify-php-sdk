# # VLMemberActivity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdAt** | **\DateTime** | Timestamp when the activity was recorded (ISO 8601). | [optional]
**groupId** | **string** | ID grouping activities recorded within the same request. | [optional]
**source** | [**\OpenAPI\Client\Model\ActivitySource**](ActivitySource.md) |  | [optional]
**id** | **string** | Unique activity ID. | [optional]
**memberId** | **string** | ID of the member the activity relates to. | [optional]
**type** | **string** | Activity type. Allowed values: &#x60;vl.member.created&#x60;, &#x60;vl.member.updated&#x60;, &#x60;vl.member.deleted&#x60;, &#x60;vl.member.activated&#x60;, &#x60;vl.member.deactivated&#x60;, &#x60;vl.member.card.assigned&#x60;, and &#x60;vl.member.card.unassigned&#x60;. | [optional]
**data** | [**\OpenAPI\Client\Model\VLMemberActivityData**](VLMemberActivityData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
