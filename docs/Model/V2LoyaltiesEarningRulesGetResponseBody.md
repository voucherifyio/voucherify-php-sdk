# # V2LoyaltiesEarningRulesGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Earning rule ID (&#x60;lern_...&#x60;). | [optional]
**name** | **string** | Earning rule name. | [optional]
**status** | **string** | Current status. &#x60;DELETED&#x60; also exists internally but deleted rules are excluded from API reads. | [optional]
**earnings** | [**\OpenAPI\Client\Model\EarningRuleEarning[]**](EarningRuleEarning.md) | Earning definitions of the rule. Contains at least one earning. | [optional]
**trigger** | [**\OpenAPI\Client\Model\EarningRuleTrigger**](EarningRuleTrigger.md) |  |
**error** | [**\OpenAPI\Client\Model\LoyaltyV2ActivityEarningRuleError**](LoyaltyV2ActivityEarningRuleError.md) |  | [optional]
**validityHours** | [**\OpenAPI\Client\Model\EarningRuleValidityHours**](EarningRuleValidityHours.md) |  |
**startDate** | **\DateTime** | Date-time from which the rule is active. Can be &#x60;null&#x60;. | [optional]
**endDate** | **\DateTime** | Date-time until which the rule is active. Can be &#x60;null&#x60;. | [optional]
**triggerLimits** | [**\OpenAPI\Client\Model\V2LoyaltiesEarningRulesGetResponseBodyTriggerLimits**](V2LoyaltiesEarningRulesGetResponseBodyTriggerLimits.md) |  | [optional]
**earningLimits** | [**\OpenAPI\Client\Model\LoyaltyV2ActivityEarningRuleEarningLimits**](LoyaltyV2ActivityEarningRuleEarningLimits.md) |  |
**metadata** | **array<string,mixed>** | Arbitrary key-value metadata; any JSON object is accepted. |
**createdAt** | **\DateTime** | Creation timestamp (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Last update timestamp (ISO 8601). &#x60;null&#x60; when never updated. | [optional]
**object** | **string** | Object type marker. Always &#x60;earning_rule&#x60;. | [optional] [default to 'earning_rule']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
