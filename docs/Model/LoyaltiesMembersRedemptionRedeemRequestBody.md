# # LoyaltiesMembersRedemptionRedeemRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reward** | [**\OpenAPI\Client\Model\LoyaltiesMembersRedemptionRedeemRequestBodyReward**](LoyaltiesMembersRedemptionRedeemRequestBodyReward.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculatedEssential**](OrderCalculatedEssential.md) |  | [optional]
**metadata** | **object** | A set of key/value pairs that you can send in the request body to check against vouchers requiring **redemption** metadata validation rules to be satisfied. The validation runs against rules that are defined through the &lt;!-- [Create Validation Rules](https://docs.voucherify.io/reference/create-validation-rules) --&gt;[Create Validation Rules](ref:create-validation-rules) endpoint or via the Dashboard; in the _Advanced Rule Builder_ &amp;rarr; _Advanced_ &amp;rarr; _Redemption metadata satisfy_ or _Basic Builder_ &amp;rarr; _Attributes match_ &amp;rarr; _REDEMPTION METADATA_. [Read more](https://support.voucherify.io/article/148-how-to-build-a-rule). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
