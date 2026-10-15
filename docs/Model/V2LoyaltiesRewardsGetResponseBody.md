# # V2LoyaltiesRewardsGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique reward identifier, prefixed with &#x60;lrew_&#x60;. | [optional]
**name** | **string** | Display name of the reward. | [optional]
**type** | **string** | Reward type. | [optional]
**status** | **string** | Current lifecycle status of the reward. | [optional]
**startDate** | **\DateTime** | Date from which the reward is available, or &#x60;null&#x60; when not set. | [optional]
**endDate** | **\DateTime** | Date until which the reward is available, or &#x60;null&#x60; when not set. | [optional]
**validityHours** | [**\OpenAPI\Client\Model\RewardValidityHoursResponse**](RewardValidityHoursResponse.md) |  |
**material** | [**\OpenAPI\Client\Model\RewardMaterialResponse**](RewardMaterialResponse.md) |  | [optional]
**digital** | [**\OpenAPI\Client\Model\RewardDigitalResponse**](RewardDigitalResponse.md) |  | [optional]
**refunds** | [**\OpenAPI\Client\Model\LoyaltyV2ActivityRewardRefunds**](LoyaltyV2ActivityRewardRefunds.md) |  |
**costs** | [**\OpenAPI\Client\Model\RewardCostResponse[]**](RewardCostResponse.md) | Point costs of the reward. Empty array when no costs are defined. | [optional]
**purchaseLimits** | [**\OpenAPI\Client\Model\RewardPurchaseLimits**](RewardPurchaseLimits.md) |  |
**metadata** | **object** | Arbitrary key-value metadata attached to the reward. Empty object when not set. | [optional]
**createdAt** | **\DateTime** | Timestamp when the reward was created (ISO-8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the reward was last updated (ISO-8601), or &#x60;null&#x60; when never updated. | [optional]
**object** | **string** | Object type marker; always &#x60;reward&#x60;. | [optional] [default to 'reward']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
