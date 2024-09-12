# # CustomerRedeemable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redeemable holder identifier. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the redeemable was assigned. The value is shown in the ISO 8601 format. | [optional]
**redeemableId** | **string** | Identifier of the redeemable item. | [optional]
**redeemableObject** | **string** | Type of the redeemable. | [optional]
**customerId** | **string** | Identifier of the customer. | [optional]
**holderRole** | **string** | Role of the holder. | [optional] [default to 'OWNER']
**campaignId** | **string** | Unique campaign identifier, assigned by Voucherify. | [optional]
**campaignType** | **string** | Defines the type of the campaign. | [optional] [default to 'DISCOUNT_COUPONS']
**voucherType** | **string** | Defines the type of the voucher. | [optional] [default to 'DISCOUNT_VOUCHER']
**redeemable** | [**\OpenAPI\Client\Model\CustomerRedeemableRedeemable**](CustomerRedeemableRedeemable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
