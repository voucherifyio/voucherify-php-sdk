# # EarningRuleDailyReportEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Identifies the start of the truncated aggregation period (&#x60;YYYY-MM-DD&#x60;). For &#x60;week&#x60; this is Monday. For &#x60;month&#x60; this is the first day. For &#x60;quarter&#x60; this is the quarter start. | [optional]
**count** | **float** | Counts successful earning-rule triggers for the member in the period. A trigger rejected by its limit check is not included. | [optional]
**object** | **string** | Object type marker. Always &#x60;earning_rule_daily_report&#x60;. | [optional] [default to 'earning_rule_daily_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
