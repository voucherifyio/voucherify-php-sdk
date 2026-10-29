# # SpendingReportDailyEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Identifies the start of the truncated aggregation period (&#x60;YYYY-MM-DD&#x60;). For &#x60;week&#x60; this is Monday. For &#x60;month&#x60; this is the first day. For &#x60;quarter&#x60; this is the quarter start. | [optional]
**cardDefinitionId** | **string** | Identifies the card definition (&#x60;lcdef_...&#x60;). | [optional]
**success** | **float** | Counts successful spending operations in the period. | [optional]
**successOnReward** | **float** | Counts successful reward purchases in the period. | [optional]
**successOnOrder** | **float** | Counts successful order payments in the period. | [optional]
**points** | **float** | Totals points spent in the period. | [optional]
**pointsOnRewards** | **float** | Totals points spent on reward purchases in the period. | [optional]
**pointsOnOrder** | **float** | Totals points spent on order payments in the period. | [optional]
**amountOnOrder** | **float** | Totals order amount paid with points in the period. | [optional]
**object** | **string** | Object type marker. Always &#x60;spending_daily_report&#x60;. | [optional] [default to 'spending_daily_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
