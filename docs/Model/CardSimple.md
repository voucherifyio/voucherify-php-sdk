# # CardSimple

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
**nextExpiration** | [**\OpenAPI\Client\Model\CardNextExpiration**](CardNextExpiration.md) |  | [optional]
**nextActivation** | [**\OpenAPI\Client\Model\CardNextActivation**](CardNextActivation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
