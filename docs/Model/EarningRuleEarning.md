# # EarningRuleEarning

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Earning item ID (&#x60;lernei_...&#x60;). | [optional]
**name** | **string** | Earning item name. Can be &#x60;null&#x60;. | [optional]
**rules** | **object** | Group of rule definitions combined by a logical formula. Besides &#x60;logic&#x60;, only positive-integer keys are allowed (property names must match &#x60;^[1-9]\\d*$&#x60;), each referencing a rule definition. The &#x60;logic&#x60; value is a logical expression referencing the numbered rules, e.g. &#x60;\&quot;1 and 2\&quot;&#x60; or &#x60;\&quot;1 and (2 or 3)\&quot;&#x60;. At least one numbered rule is required (&#x60;minProperties: 2&#x60; including &#x60;logic&#x60;). | [optional]
**tierRules** | [**\OpenAPI\Client\Model\EarningRuleTierRules**](EarningRuleTierRules.md) |  |
**effects** | [**\OpenAPI\Client\Model\EarningRuleEffect[]**](EarningRuleEffect.md) | Effects applied when the rules match. Contains 1 to 10 effects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
