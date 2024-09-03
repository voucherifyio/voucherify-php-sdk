# # SimpleVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier that represents the voucher assigned by Voucherify. | [optional]
**code** | **string** | Voucher code. | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**loyaltyCard** | [**\OpenAPI\Client\Model\SimpleLoyaltyCard**](SimpleLoyaltyCard.md) |  | [optional]
**type** | **string** | Type of the voucher. | [optional]
**campaign** | **string** | Campaign name. | [optional]
**campaignId** | **string** | Campaign unique ID. | [optional]
**isReferralCode** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**holderId** | **string** | Unique customer identifier of the redeemable holder. It equals to the customer ID assigned by Voucherify. | [optional]
**referrerId** | **string** | Unique identifier of the referrer assigned by Voucherify. | [optional]
**categoryId** | **string** | Unique identifier of the category that this voucher belongs to. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | Contains details about the category. | [optional]
**active** | **bool** | Shows whether the voucher is on or off. &#x60;true&#x60; indicates an *active* voucher and &#x60;false&#x60; indicates an *inactive* voucher. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the order was created in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format. | [optional]
**redemption** | [**\OpenAPI\Client\Model\SimpleVoucherRedemption**](SimpleVoucherRedemption.md) |  | [optional]
**startDate** | **\DateTime** | Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a voucher. The metadata object stores all custom attributes assigned to the voucher. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'voucher']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
