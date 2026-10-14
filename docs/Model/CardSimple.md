# # CardSimple

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardType** | **string** | Card type. Currently only &#x60;INDIVIDUAL&#x60; is supported. | [optional] [default to 'INDIVIDUAL']
**lifetimeBucket** | [**\OpenAPI\Client\Model\CardLifetimeBucket**](CardLifetimeBucket.md) |  | [optional]
**balance** | [**\OpenAPI\Client\Model\CardBalance**](CardBalance.md) |  | [optional]
**id** | **string** | Unique Voucherify ID of the card. | [optional]
**cardDefinitionId** | **string** | Unique Voucherify ID of the card definition the card was created from. | [optional]
**code** | **string** | Human-readable card code. Card code generation is asynchronous - this field is &#x60;null&#x60; right after member creation and is populated shortly after, once the background code generation completes. | [optional]
**nextExpiration** | [**\OpenAPI\Client\Model\CardNextExpiration**](CardNextExpiration.md) |  | [optional]
**nextActivation** | [**\OpenAPI\Client\Model\CardNextActivation**](CardNextActivation.md) |  | [optional]
**object** | **string** | Object type marker, always &#x60;card&#x60;. | [optional] [default to 'card']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
