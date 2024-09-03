# # RewardsAssignmentsUpdateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward assignment ID, assigned by Voucherify. | [optional]
**rewardId** | **string** | Associated reward ID. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the reward assignment was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the reward assignment was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the reward assignment. | [optional] [default to 'reward_assignment']
**relatedObjectId** | **string** | Related object ID to which the reward was assigned. | [optional]
**relatedObjectType** | **string** | Related object type to which the reward was assigned. | [optional] [default to 'campaign']
**parameters** | [**\OpenAPI\Client\Model\RewardsAssignmentsUpdateResponseBodyParameters**](RewardsAssignmentsUpdateResponseBodyParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
