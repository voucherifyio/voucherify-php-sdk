# # LoyaltiesExamineEarningRulesExamineResponseBodyMembership

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member** | [**\OpenAPI\Client\Model\ExamineMemberReference**](ExamineMemberReference.md) |  | [optional]
**program** | [**\OpenAPI\Client\Model\ExamineProgramReference**](ExamineProgramReference.md) |  | [optional]
**cards** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBodyCardEstimation[]**](LoyaltiesExamineEarningRulesExamineResponseBodyCardEstimation.md) | Point estimations per card. | [optional]
**benefits** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBodyBenefitEstimation[]**](LoyaltiesExamineEarningRulesExamineResponseBodyBenefitEstimation.md) | Benefit estimations. | [optional]
**object** | **string** | Object type marker. Always &#x60;member_earnings_opportunity&#x60;. | [optional] [default to 'member_earnings_opportunity']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
