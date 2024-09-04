# # SimpleVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier that represents the voucher assigned by Voucherify. | [optional]
**code** | **string** | Voucher code. | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\SimpleVoucherLoyaltyCard**](SimpleVoucherLoyaltyCard.md) |  | [optional]
**type** | **string** | Type of the voucher. | [optional]
**campaign** | **string** | Campaign name. | [optional]
**campaign_id** | **string** | Campaign unique ID. | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**holder_id** | **string** | Unique customer identifier of the redeemable holder. It equals to the customer ID assigned by Voucherify. | [optional]
**referrer_id** | **string** | Unique identifier of the referrer assigned by Voucherify. | [optional]
**category_id** | **string** | Unique identifier of the category that this voucher belongs to. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | Contains details about the category. | [optional]
**active** | **bool** | Shows whether the voucher is on or off. &#x60;true&#x60; indicates an *active* voucher and &#x60;false&#x60; indicates an *inactive* voucher. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the order was created in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the order was created. The value is shown in the ISO 8601 format. | [optional]
**redemption** | [**\OpenAPI\Client\Model\SimpleVoucherRedemption**](SimpleVoucherRedemption.md) |  | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the code expires in ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a voucher. The metadata object stores all custom attributes assigned to the voucher. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'voucher']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
