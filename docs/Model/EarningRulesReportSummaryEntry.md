# # EarningRulesReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the summary row (format: &#x60;lpers_&#x60; followed by hexadecimal characters). | [optional]
**earningRuleId** | **string** | Identifies the earning rule (format &#x60;lern_...&#x60;). | [optional]
**successCount** | **float** | Counts eligibility checks that passed the trigger limit. | [optional]
**failuresCount** | **float** | Counts eligibility checks that failed the trigger limit. | [optional]
**failuresBreakdown** | [**\OpenAPI\Client\Model\EarningRulesReportFailuresBreakdown**](EarningRulesReportFailuresBreakdown.md) |  |
**object** | **string** | Object type marker. Always &#x60;program_earning_rules_summary_report&#x60;. | [optional] [default to 'program_earning_rules_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
