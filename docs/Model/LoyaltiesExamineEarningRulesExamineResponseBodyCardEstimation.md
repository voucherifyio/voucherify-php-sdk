# # LoyaltiesExamineEarningRulesExamineResponseBodyCardEstimation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card** | [**\OpenAPI\Client\Model\ExamineCardReference**](ExamineCardReference.md) |  | [optional]
**pointsEstimation** | **float** | Total estimated points for the card across matching earning rules. | [optional]
**earningRules** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBodyCardEarningRuleEstimation[]**](LoyaltiesExamineEarningRulesExamineResponseBodyCardEarningRuleEstimation.md) | Per-earning-rule estimations contributing to the total. | [optional]
**object** | **string** | Object type marker. Always &#x60;card_estimation&#x60;. | [optional] [default to 'card_estimation']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
