# # ValidationsRedeemableInapplicable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Indicates whether the redeemable can be applied or not applied based on the validation rules. | [optional] [default to 'INAPPLICABLE']
**id** | **string** | Redeemable ID, i.e. the voucher code. | [optional]
**object** | **string** | Redeemable&#39;s object type. | [optional]
**result** | [**\OpenAPI\Client\Model\ValidationsRedeemableInapplicableResult**](ValidationsRedeemableInapplicableResult.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes in the form of key/value pairs assigned to the redeemable. | [optional]
**categories** | [**\OpenAPI\Client\Model\CategoryWithStackingRulesType[]**](CategoryWithStackingRulesType.md) |  | [optional]
**campaignName** | **string** | Campaign name. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]
**campaignId** | **string** | Unique campaign ID assigned by Voucherify. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]
**name** | **string** | Name of the promotion tier. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
