# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the card. | [optional]
**cardDefinitionId** | **string** | Identifies the card definition. | [optional]
**cardType** | **string** | Card type. Currently only &#x60;INDIVIDUAL&#x60; is supported. | [optional] [default to 'INDIVIDUAL']
**code** | **string** | Human-readable card code. Card code generation is asynchronous - this field is &#x60;null&#x60; right after member creation and is populated shortly after, once the background code generation completes. | [optional]
**lifetimeBucket** | [**\OpenAPI\Client\Model\CardLifetimeBucket**](CardLifetimeBucket.md) |  | [optional]
**balance** | [**\OpenAPI\Client\Model\CardBalance**](CardBalance.md) |  | [optional]
**object** | **string** | Object type. Always &#x60;card&#x60;. | [optional] [default to 'card']
**programId** | **string** | Identifies the loyalty program. | [optional]
**customerId** | **string** | Identifies the customer linked to the card. | [optional]
**memberId** | **string** | Identifies the member linked to the card. | [optional]
**createdAt** | **\DateTime** | Records when the card was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Records the last update (ISO 8601). &#x60;null&#x60; if the card has never been updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
