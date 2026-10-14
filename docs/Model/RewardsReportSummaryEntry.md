# # RewardsReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the summary row (format: &#x60;lprrs_&#x60; followed by hexadecimal characters). | [optional]
**rewardId** | **string** | Identifies the reward (&#x60;lrew_...&#x60;). | [optional]
**successCount** | **float** | Counts approved reward purchases. | [optional]
**failuresCount** | **float** | Counts reward purchase attempts that failed. | [optional]
**failuresBreakdown** | **object** | Counts failed reward purchase attempts by reason. A reason is present only when it was recorded. Empty when no failures were recorded. Keys can also be a card-transaction rejection reason or a publication error key. |
**object** | **string** | Object type marker. Always &#x60;program_rewards_summary_report&#x60;. | [optional] [default to 'program_rewards_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
