# # LoyaltiesRewardsCreateAssignmentResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward assignment ID, assigned by Voucherify. | [optional]
**reward_id** | **string** | Associated reward ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the reward assignment was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the reward assignment was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the reward assignment. | [optional] [default to 'reward_assignment']
**related_object_id** | **string** | Related object ID to which the reward was assigned. | [optional]
**related_object_type** | **string** | Related object type to which the reward was assigned. | [optional] [default to 'campaign']
**parameters** | [**\OpenAPI\Client\Model\LoyaltiesRewardsCreateAssignmentResponseBodyParameters**](LoyaltiesRewardsCreateAssignmentResponseBodyParameters.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
