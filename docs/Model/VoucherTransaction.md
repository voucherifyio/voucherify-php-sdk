# # VoucherTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique transaction ID. | [optional]
**source_id** | **string** | The merchant&#39;s transaction ID if it is different from the Voucherify transaction ID. It is really useful in case of an integration between multiple systems. It can be a transaction ID from a CRM system, database or 3rd-party service. In case of a redemption, this value is null. | [optional]
**voucher_id** | **string** | Unique voucher ID. | [optional]
**campaign_id** | **string** | Unqiue campaign ID of the voucher&#39;s parent campaign if it is part of campaign that generates bulk codes. | [optional]
**source** | **string** | The channel through which the transaction took place, whether through the API or the the Dashboard. In case of a redemption, this value is null. | [optional]
**reason** | **string** | Reason why the transaction occurred. In case of a redemption, this value is null. | [optional]
**type** | **string** |  | [optional]
**details** | [**\OpenAPI\Client\Model\VoucherTransactionDetails**](VoucherTransactionDetails.md) |  | [optional]
**related_transaction_id** | **string** | The related transaction ID on the receiving card. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the transaction was created. The value is shown in the ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
