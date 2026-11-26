# # RewardsAssignmentsCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward assignment ID, assigned by Voucherify. | [optional]
**rewardId** | **string** | Associated reward ID. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the reward assignment was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the reward assignment was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the reward assignment. | [optional] [default to 'reward_assignment']
**relatedObjectId** | **string** | Related object ID to which the reward was assigned. For &#x60;related_object_type&#x60; &#x60;campaign&#x60;, this is the campaign ID. For &#x60;referral_tier&#x60;, this is the referral tier ID. | [optional]
**relatedObjectType** | **string** | Related object type to which the reward was assigned. Use &#x60;campaign&#x60; for **legacy loyalty** campaign rewards. Use &#x60;referral_tier&#x60; for &#x60;LOYALTY_POINTS&#x60; rewards that credit a &#x60;v2/loyalties&#x60; (loyalty hub) card from a referral tier. A &#x60;LOYALTY_POINTS&#x60; reward can only be assigned to a referral tier. | [optional] [default to 'campaign']
**parameters** | [**\OpenAPI\Client\Model\RewardsAssignmentsCreateResponseBodyParameters**](RewardsAssignmentsCreateResponseBodyParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
