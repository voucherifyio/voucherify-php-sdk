# # Program

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique program identifier. | [optional]
**name** | **string** | Program name. | [optional]
**status** | **string** | Program status. | [optional]
**startDate** | **\DateTime** | Program validity start date (ISO 8601), or &#x60;null&#x60; when not set. | [optional]
**endDate** | **\DateTime** | Program validity end date (ISO 8601), or &#x60;null&#x60; when not set. | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ProgramValidityHours**](ProgramValidityHours.md) |  | [optional]
**metadata** | **object** | Arbitrary key-value metadata. Defaults to &#x60;{}&#x60;. | [optional]
**createdAt** | **\DateTime** | Creation timestamp (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Last update timestamp (ISO 8601), or &#x60;null&#x60; when never updated. | [optional]
**object** | **string** | Object type marker. | [optional] [default to 'program']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
