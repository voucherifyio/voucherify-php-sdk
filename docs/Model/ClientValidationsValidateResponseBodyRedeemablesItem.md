# # ClientValidationsValidateResponseBodyRedeemablesItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**id** | **string** | Redeemable ID, i.e. the voucher code. | [optional]
**object** | **string** | Redeemable&#39;s object type. | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**applicableTo** | [**\OpenAPI\Client\Model\ApplicableToResultList**](ApplicableToResultList.md) |  | [optional]
**inapplicableTo** | [**\OpenAPI\Client\Model\InapplicableToResultList**](InapplicableToResultList.md) |  | [optional]
**result** | [**\OpenAPI\Client\Model\ClientValidationsValidateResponseBodyRedeemablesItemResult**](ClientValidationsValidateResponseBodyRedeemablesItemResult.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes in the form of key/value pairs assigned to the redeemable. | [optional]
**categories** | [**\OpenAPI\Client\Model\CategoryWithStackingRulesType[]**](CategoryWithStackingRulesType.md) |  | [optional]
**campaignName** | **string** | Campaign name. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]
**campaignId** | **string** | Unique campaign ID assigned by Voucherify. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]
**name** | **string** | Name of the promotion tier. Displayed only if the &#x60;options.expand&#x60; is passed with a &#x60;redeemable&#x60; value in the validation request body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
