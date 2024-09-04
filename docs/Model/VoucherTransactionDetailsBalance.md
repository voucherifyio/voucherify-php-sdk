# # VoucherTransactionDetailsBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of voucher whose balance is being adjusted due to the transaction. | [optional] [default to 'loyalty_card']
**total** | **int** | The number of all points accumulated on the card as affected by add or subtract operations. | [optional]
**object** | **string** | The type of the object represented by the JSON. | [optional] [default to 'balance']
**points** | **int** | Points added or subtracted in the transaction. | [optional]
**balance** | **int** | The available points on the card after the transaction as affected by redemption or rollback. | [optional]
**related_object** | [**\OpenAPI\Client\Model\VoucherTransactionDetailsBalanceRelatedObject**](VoucherTransactionDetailsBalanceRelatedObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
