# # LoyaltiesMembersTransfersCreateResponseBodyRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity** | **int** | How many times a voucher can be redeemed. A null value means unlimited. | [optional]
**redeemedPoints** | **int** | Total loyalty points redeemed. | [optional]
**redeemedQuantity** | **int** | How many times a voucher has already been redeemed. | [optional]
**object** | **string** | The type of the object represented is by default list. To get this list, you need to make a call to the endpoint returned in the url attribute. | [optional] [default to 'list']
**url** | **string** | The endpoint where this list of redemptions can be accessed using a GET method. /v1/vouchers/{voucher_code}/redemptions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
