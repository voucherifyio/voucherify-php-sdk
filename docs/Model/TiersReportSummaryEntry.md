# # TiersReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the summary row (format: &#x60;lptrs_&#x60; followed by hexadecimal characters). | [optional]
**tierStructureId** | **string** | Unique identifier of the tier structure (format &#x60;lts_...&#x60;). | [optional]
**tierId** | **string** | Unique identifier of the tier (format &#x60;lt_...&#x60;). | [optional]
**joins** | **float** | Total number of members who joined this tier. | [optional]
**upgrades** | **float** | Total number of upgrades into this tier. | [optional]
**downgrades** | **float** | Total number of downgrades into this tier. | [optional]
**lefts** | **float** | Total number of members who left this tier. | [optional]
**prolongs** | **float** | Counts expiration-date changes for members who stayed on this tier. | [optional]
**object** | **string** | Object type marker. Always &#x60;program_tiers_summary_report&#x60;. | [optional] [default to 'program_tiers_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
