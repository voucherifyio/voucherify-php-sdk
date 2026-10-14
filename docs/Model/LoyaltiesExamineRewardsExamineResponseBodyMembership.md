# # LoyaltiesExamineRewardsExamineResponseBodyMembership

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member** | [**\OpenAPI\Client\Model\ExamineMemberReference**](ExamineMemberReference.md) |  |
**program** | [**\OpenAPI\Client\Model\ExamineProgramReference**](ExamineProgramReference.md) |  |
**cards** | [**\OpenAPI\Client\Model\LoyaltiesExamineRewardsExamineResponseBodyCardEstimation[]**](LoyaltiesExamineRewardsExamineResponseBodyCardEstimation.md) | Lists cards that have at least one reward with a resolved points cost. Can be empty. | [optional]
**object** | **string** | Object type marker. Always &#x60;member_rewards_opportunity&#x60;. | [optional] [default to 'member_rewards_opportunity']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
