# # RewardPurchaseDigitalGiftVoucher

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Voucher identifier of the gift voucher. | [optional]
**code** | **string** | Gift voucher code. | [optional]
**amount** | **float** | Amount added to (or, for refunds, subtracted from) the gift voucher balance. | [optional]
**balance** | **float** | Gift voucher balance after the operation. | [optional]
**result** | **string** | Refund handling result for this gift voucher (present in refund results):  - &#x60;CREDITS_SUBTRACTED&#x60;: The credited balance was subtracted.  - &#x60;SKIPPED&#x60;: The voucher was left intact. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
