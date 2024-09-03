# # CustomerRedeemable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redeemable holder identifier. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the redeemable was assigned. The value is shown in the ISO 8601 format. | [optional]
**redeemable_id** | **string** | Identifier of the redeemable item. | [optional]
**redeemable_object** | **string** | Type of the redeemable. | [optional]
**customer_id** | **string** | Identifier of the customer. | [optional]
**holder_role** | **string** | Role of the holder. | [optional] [default to 'OWNER']
**campaign_id** | **string** | Unique campaign identifier, assigned by Voucherify. | [optional]
**campaign_type** | **string** | Defines the type of the campaign. | [optional] [default to 'DISCOUNT_COUPONS']
**voucher_type** | **string** | Defines the type of the voucher. | [optional] [default to 'DISCOUNT_VOUCHER']
**redeemable** | [**\OpenAPI\Client\Model\CustomerRedeemableRedeemable**](CustomerRedeemableRedeemable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
