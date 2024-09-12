# # RedeemableVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Assigned by the Voucherify API, identifies the voucher. | [optional]
**code** | **string** | A code that identifies a voucher. Pattern can use all letters of the English alphabet, Arabic numerals, and special characters. | [optional]
**campaign** | **string** | A unique campaign name, identifies the voucher&#39;s parent campaign. | [optional]
**campaignId** | **string** | Assigned by the Voucherify API, identifies the voucher&#39;s parent campaign. | [optional]
**category** | **string** | The value is null. | [optional]
**categoryId** | **string** | Unique category ID assigned by Voucherify. | [optional]
**categories** | **object[]** | Contains an empty array. | [optional]
**type** | **string** | Defines the type of the voucher. | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\RedeemableVoucherGift**](RedeemableVoucherGift.md) |  | [optional]
**loyaltyCard** | [**\OpenAPI\Client\Model\RedeemableVoucherLoyaltyCard**](RedeemableVoucherLoyaltyCard.md) |  | [optional]
**startDate** | **\DateTime** | Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**additionalInfo** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the code. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**assets** | [**\OpenAPI\Client\Model\VoucherAssets**](VoucherAssets.md) |  | [optional]
**isReferralCode** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the voucher was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the voucher was last updated in ISO 8601 format. | [optional]
**referrerId** | **string** | Unique identifier of the referring person. | [optional]
**holderId** | **string** | Unique customer identifier of the redeemable holder. It equals to the customer ID assigned by Voucherify. | [optional]
**object** | **string** | The type of the object represented by JSON. Default is &#x60;voucher&#x60;. | [optional] [default to 'voucher']
**publish** | [**\OpenAPI\Client\Model\RedeemableVoucherPublish**](RedeemableVoucherPublish.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\RedeemableVoucherRedemption**](RedeemableVoucherRedemption.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
