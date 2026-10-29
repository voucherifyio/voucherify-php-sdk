# # ExamineCardReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique card ID (&#x60;lcrd_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Unique card definition ID (&#x60;lcdef_...&#x60;). | [optional]
**cardType** | **string** | Card type. Currently only &#x60;INDIVIDUAL&#x60; exists. | [optional] [default to 'INDIVIDUAL']
**code** | **string** | Card code. May be &#x60;null&#x60; right after member creation because card codes are generated asynchronously. | [optional]
**object** | **string** | Object type marker. Always &#x60;card&#x60;. | [optional] [default to 'card']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
