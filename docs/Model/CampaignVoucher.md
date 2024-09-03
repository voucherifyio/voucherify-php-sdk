# # CampaignVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of voucher. | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\CampaignLoyaltyCard**](CampaignLoyaltyCard.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignVoucherRedemption**](CampaignVoucherRedemption.md) |  | [optional]
**code_config** | [**\OpenAPI\Client\Model\CodeConfig**](CodeConfig.md) |  |
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
