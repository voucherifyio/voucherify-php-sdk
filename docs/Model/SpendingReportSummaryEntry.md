# # SpendingReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the summary row (&#x60;lssum_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Identifies the card definition (&#x60;lcdef_...&#x60;). | [optional]
**success** | **float** | Counts successful spending operations. | [optional]
**successOnReward** | **float** | Counts successful reward purchases. | [optional]
**successOnOrder** | **float** | Counts successful order payments. | [optional]
**points** | **float** | Totals points spent. | [optional]
**pointsOnRewards** | **float** | Totals points spent on reward purchases. | [optional]
**pointsOnOrder** | **float** | Totals points spent on order payments. | [optional]
**amountOnOrder** | **float** | Totals order amount paid with points. | [optional]
**object** | **string** | Object type marker. Always &#x60;spending_summary_report&#x60;. | [optional] [default to 'spending_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
