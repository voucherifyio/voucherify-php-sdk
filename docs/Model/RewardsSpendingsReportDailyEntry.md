# # RewardsSpendingsReportDailyEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rewardId** | **string** | Identifies the reward (&#x60;lrew_...&#x60;). | [optional]
**costId** | **string** | Identifies the reward cost (&#x60;lrcst_...&#x60;). | [optional]
**spendingId** | **string** | Identifies the reward spending (&#x60;lrspn_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Identifies the card definition (&#x60;lcdef_...&#x60;). | [optional]
**date** | **\DateTime** | Identifies the start of the truncated aggregation period (&#x60;YYYY-MM-DD&#x60;). For &#x60;week&#x60; this is Monday. For &#x60;month&#x60; this is the first day. For &#x60;quarter&#x60; this is the quarter start. | [optional]
**successCount** | **float** | Counts approved reward point spends in the period. | [optional]
**points** | **float** | Totals points spent on those reward spends in the period. | [optional]
**object** | **string** | Object type marker. Always &#x60;program_rewards_spendings_daily_report&#x60;. | [optional] [default to 'program_rewards_spendings_daily_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
