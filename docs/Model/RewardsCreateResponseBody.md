# # RewardsCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward ID, assigned by Voucherify. | [optional]
**name** | **string** | Reward name. | [optional]
**stock** | **int** | Configurable for **material rewards**. The number of units of the product that you want to share as reward. | [optional]
**redeemed** | **int** | Defines the number of already invoked (successful) reward redemptions. | [optional]
**attributes** | [**\OpenAPI\Client\Model\RewardsCreateResponseBodyAttributes**](RewardsCreateResponseBodyAttributes.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the reward. A set of key/value pairs that you can attach to a reward object. It can be useful for storing additional information about the reward in a structured format. | [optional]
**type** | **string** | Reward type. | [optional]
**parameters** | [**\OpenAPI\Client\Model\RewardType**](RewardType.md) |  | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the reward was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the reward was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the reward. | [default to 'reward']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
