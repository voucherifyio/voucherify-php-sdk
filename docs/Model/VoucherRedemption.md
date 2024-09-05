# # VoucherRedemption

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quantity** | **int** | How many times a voucher can be redeemed. A &#x60;null&#x60; value means unlimited. | [optional]
**redeemedQuantity** | **int** | How many times a voucher has already been redeemed. | [optional]
**redeemedPoints** | **int** | Total loyalty points redeemed. | [optional]
**object** | **string** | The type of the object represented is by default &#x60;list&#x60;. To get this list, you need to make a call to the endpoint returned in the url attribute. | [optional] [default to 'list']
**url** | **string** | The endpoint where this list of redemptions can be accessed using a GET method. &#x60;/v1/vouchers/{voucher_code}/redemptions&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
