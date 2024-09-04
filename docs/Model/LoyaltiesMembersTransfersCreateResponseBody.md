# # LoyaltiesMembersTransfersCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Assigned by the Voucherify API, identifies the voucher. | [optional]
**code** | **string** | A code that identifies a voucher. Pattern can use all letters of the English alphabet, Arabic numerals, and special characters. | [optional]
**campaign** | **string** | A unique campaign name, identifies the voucher&#39;s parent campaign. | [optional]
**campaign_id** | **string** | Assigned by the Voucherify API, identifies the voucher&#39;s parent campaign. | [optional]
**category** | **string** | Tag defining the category that this voucher belongs to. Useful when listing vouchers using the List Vouchers endpoint. | [optional]
**category_id** | **string** | Unique category ID assigned by Voucherify. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) |  | [optional]
**type** | **string** | Defines the type of the voucher. | [optional] [default to 'LOYALTY_CARD']
**loyalty_card** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard**](LoyaltiesMembersTransfersCreateResponseBodyLoyaltyCard.md) |  | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the code starts to be active in ISO 8601 format. Voucher is inactive before this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the code expires in ISO 8601 format. Voucher is inactive after this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  |
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**publish** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBodyPublish**](LoyaltiesMembersTransfersCreateResponseBodyPublish.md) |  | [optional]
**redemption** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBodyRedemption**](LoyaltiesMembersTransfersCreateResponseBodyRedemption.md) |  | [optional]
**active** | **string** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the start_date and expiration_date.  - &#x60;true&#x60; indicates an active voucher - &#x60;false&#x60; indicates an inactive voucher | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the code. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**assets** | [**\OpenAPI\Client\Model\LoyaltiesMembersTransfersCreateResponseBodyAssets**](LoyaltiesMembersTransfersCreateResponseBodyAssets.md) |  | [optional]
**is_referral_code** | **bool** | Flag indicating whether this voucher is a referral code; &#x60;true&#x60; for campaign type &#x60;REFERRAL_PROGRAM&#x60;. | [optional]
**holder_id** | **string** | Unique customer identifier of the redeemable holder. It equals to the customer ID assigned by Voucherify. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the voucher was last updated in ISO 8601 format. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
