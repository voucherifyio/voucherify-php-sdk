# # MemberTierProgress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current** | **mixed** |  |
**tierStructure** | **mixed** |  |
**deferred** | [**\OpenAPI\Client\Model\MemberTierProgressDeferred[]**](MemberTierProgressDeferred.md) | Upcoming tier assignments scheduled to start later, when the tier structure defers tier changes. The member will be assigned to the deferred tier at the start date. | [optional]
**risks** | [**\OpenAPI\Client\Model\MemberTierProgressRisk[]**](MemberTierProgressRisk.md) | Upcoming risks of losing or downgrading the current tier. | [optional]
**opportunities** | [**\OpenAPI\Client\Model\MemberTierProgressOpportunity[]**](MemberTierProgressOpportunity.md) | Opportunities to reach higher tiers. Deferred tiers are not included in this list. | [optional]
**object** | **string** | Object type marker, always &#x60;member_tier_progress&#x60;. | [optional] [default to 'member_tier_progress']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
