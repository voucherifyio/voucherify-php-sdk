# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardType** | **string** | Card type. Currently only &#x60;INDIVIDUAL&#x60; is supported. | [optional] [default to 'INDIVIDUAL']
**lifetimeBucket** | [**\OpenAPI\Client\Model\CardLifetimeBucket**](CardLifetimeBucket.md) |  | [optional]
**balance** | [**\OpenAPI\Client\Model\CardBalance**](CardBalance.md) |  | [optional]
**id** | **string** | Identifies the card. | [optional]
**programId** | **string** | Identifies the loyalty program. | [optional]
**cardDefinitionId** | **string** | Identifies the card definition. | [optional]
**code** | **string** | Human-readable card code. &#x60;null&#x60; until asynchronous code generation finishes. | [optional]
**customerId** | **string** | Identifies the customer linked to the card. | [optional]
**memberId** | **string** | Identifies the member linked to the card. | [optional]
**createdAt** | **\DateTime** | Records when the card was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Records the last update (ISO 8601). &#x60;null&#x60; if the card has never been updated. | [optional]
**object** | **string** | Object type. Always &#x60;card&#x60;. | [optional] [default to 'card']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
