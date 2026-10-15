# # MembersReportSummaryEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the summary row (format: &#x60;lpmrs_&#x60; followed by hexadecimal characters). | [optional]
**membersJoined** | **float** | Counts members who joined the program. | [optional]
**membersDeactivated** | **float** | Counts members deactivated. Decreases by 1 when a member is activated again. | [optional]
**membersDeleted** | **float** | Counts members deleted. | [optional]
**cards** | **float** | Counts cards created. Decreases by 1 when a card is unassigned (e.g. when a member is deleted). | [optional]
**object** | **string** | Object type marker. Always &#x60;program_members_summary_report&#x60;. | [optional] [default to 'program_members_summary_report']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
