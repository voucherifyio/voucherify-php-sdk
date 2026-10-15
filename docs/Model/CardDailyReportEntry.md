# # CardDailyReportEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Identifies the start of the truncated aggregation period (&#x60;YYYY-MM-DD&#x60;). For &#x60;week&#x60; this is Monday. For &#x60;month&#x60; this is the first day. For &#x60;quarter&#x60; this is the quarter start. | [optional]
**pointsTotal** | **float** | Points credited to the card in the period. Sums &#x60;points_earned&#x60;, &#x60;points_added&#x60;, and &#x60;points_purchased&#x60;. Points spent, expired, subtracted, refunded, returned, or reversed are not deducted. | [optional]
**pointsEarned** | **float** | Points earned through earning rules in the period. Includes pending points activated in the period. | [optional]
**pointsAdded** | **float** | Points added manually in the period. | [optional]
**pointsPurchased** | **float** | Points purchased (e.g. via loyalty-card-points rewards) in the period. | [optional]
**pointsPurchasedReversed** | **float** | Purchased points reversed (e.g. by reward refunds) in the period. | [optional]
**pointsSubtracted** | **float** | Points subtracted manually in the period. | [optional]
**pointsExpired** | **float** | Points expired in the period. | [optional]
**pointsSpent** | **float** | Points spent (on rewards and order payments) in the period. | [optional]
**pointsRefunded** | **float** | Points refunded in the period. | [optional]
**pointsReturned** | **float** | Points returned in the period. | [optional]
**pointsLocked** | **float** | Points locked in the period. | [optional]
**pointsUnlocked** | **float** | Points unlocked in the period. Includes points released when a spending transaction is approved (also counted in &#x60;points_spent&#x60;) or rejected. | [optional]
**pendingPointsTotal** | **float** | Pending points added in the period. Activated and canceled pending points are not deducted. | [optional]
**pendingPointsActivated** | **float** | Pending points activated in the period. Also counted in &#x60;points_earned&#x60; and &#x60;points_total&#x60;. | [optional]
**pendingPointsCanceled** | **float** | Pending points canceled in the period. | [optional]
**object** | **string** | Object type marker. Always &#x60;card_daily_report&#x60;. | [optional] [default to 'card_daily_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
