# # LoyaltiesExamineRewardsExamineResponseBodyCardRewardEstimation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward** | [**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBodyRewardReference**](LoyaltiesExamineRewardsExamineResponseBodyRewardReference.md) |  |
**status** | **string** | Whether the reward can currently be obtained with this card. | [optional]
**cost** | [**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBodyRewardCost**](LoyaltiesExamineRewardsExamineResponseBodyRewardCost.md) |  |
**unavailabilityReasons** | [**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBodyRewardUnavailabilityReason[]**](LoyaltiesExamineRewardsExamineResponseBodyRewardUnavailabilityReason.md) | Reasons the reward is unavailable. Absent when the reward is available. | [optional]
**object** | **string** | Object type marker. Always &#x60;reward_estimation&#x60;. | [optional] [default to 'reward_estimation']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
