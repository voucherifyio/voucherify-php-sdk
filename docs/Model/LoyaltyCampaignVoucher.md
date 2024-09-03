# # LoyaltyCampaignVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of voucher. | [optional] [default to 'LOYALTY_CARD']
**loyaltyCard** | [**\OpenAPI\Client\Model\CampaignLoyaltyCard**](CampaignLoyaltyCard.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\LoyaltyCampaignVoucherRedemption**](LoyaltyCampaignVoucherRedemption.md) |  | [optional]
**codeConfig** | [**\OpenAPI\Client\Model\CodeConfig**](CodeConfig.md) |  |
**isReferralCode** | **bool** | Always &#x60;false&#x60; for a loyalty card voucher | [optional]
**startDate** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is *inactive after* this date. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
