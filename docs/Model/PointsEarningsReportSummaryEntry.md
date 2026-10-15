# # PointsEarningsReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**earningRuleId** | **string** | Identifies the earning rule (format &#x60;lern_...&#x60;). | [optional]
**earningItemId** | **string** | Identifies the earning item that produced the points (format: &#x60;lernei_&#x60; followed by hexadecimal characters). | [optional]
**cardDefinitionId** | **string** | Identifies the card definition (format &#x60;lcdef_...&#x60;). | [optional]
**id** | **string** | Identifies the summary row (format: &#x60;lppes_&#x60; followed by hexadecimal characters). | [optional]
**successCount** | **float** | Counts earning operations that credited points or added pending points. | [optional]
**points** | **float** | Sums points credited immediately by earning rules. Pending points activated later are not included. | [optional]
**pendingPoints** | **float** | Sums pending points added. Activated and canceled pending points are not deducted. | [optional]
**object** | **string** | Object type marker. Always &#x60;program_points_earnings_summary_report&#x60;. | [optional] [default to 'program_points_earnings_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
