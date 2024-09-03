# # ClientRedemptionsRedeemResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redemptions** | [**\OpenAPI\Client\Model\Redemption[]**](Redemption.md) |  | [optional]
**parent_redemption** | [**\OpenAPI\Client\Model\Redemption**](Redemption.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**inapplicable_redeemables** | [**\OpenAPI\Client\Model\ValidationsRedeemableInapplicable[]**](ValidationsRedeemableInapplicable.md) | Lists validation results of each inapplicable redeemable. | [optional]
**skipped_redeemables** | [**\OpenAPI\Client\Model\ValidationsRedeemableSkipped[]**](ValidationsRedeemableSkipped.md) | Lists validation results of each redeemable. If a redeemable can be applied, the API returns &#x60;\&quot;status\&quot;: \&quot;APPLICABLE\&quot;&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
