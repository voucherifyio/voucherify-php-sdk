# # RedeemableHolder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the redeemable holder. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the redeemable was assigned. The value is shown in the ISO 8601 format. | [optional]
**redeemableId** | **string** | Identifier of the redeemable item. | [optional]
**redeemableObject** | **string** | Type of the redeemable. | [optional]
**customerId** | **string** | Unique identifier of the customer. | [optional]
**holderRole** | **string** | Role of the holder. | [optional]
**campaignId** | **string** | Unique identifier of the campaign as assigned by Voucherify. | [optional]
**campaignType** | **string** | Defines the type of the campaign. | [optional] [default to 'REFERRAL_PROGRAM']
**voucherType** | **string** | Defines the type of the voucher. | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a redeemable holder. The metadata object stores all custom attributes assigned to the &#x60;redeemable_holder&#x60; object. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'redeemable_holder']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
