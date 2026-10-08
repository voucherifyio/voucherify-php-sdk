# # LoyaltiesExamineEarningRulesExamineResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | Examined trigger event (e.g. &#x60;customer.order.paid&#x60;, &#x60;customer.segment.entered&#x60;, &#x60;customer.custom_event&#x60;). &#x60;null&#x60; when &#x60;trigger.type&#x60; is &#x60;ALL&#x60;. | [optional]
**customer** | [**\OpenAPI\Client\Model\ExamineCustomerReference**](ExamineCustomerReference.md) |  | [optional]
**earningRules** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBodyEarningRuleDetail[]**](LoyaltiesExamineEarningRulesExamineResponseBodyEarningRuleDetail.md) | Lists earning rules that produced a points or benefit estimation, deduplicated across memberships. | [optional]
**memberships** | [**\OpenAPI\Client\Model\LoyaltiesExamineEarningRulesExamineResponseBodyMembership[]**](LoyaltiesExamineEarningRulesExamineResponseBodyMembership.md) | Lists one entry for each active membership whose program has earning rules for the examined trigger. Includes a card only when its estimated points are greater than 0, and a benefit only when an earning rule can grant it. Both arrays can be empty. | [optional]
**object** | **string** | Object type marker. Always &#x60;earnings_examine_result&#x60;. | [optional] [default to 'earnings_examine_result']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
