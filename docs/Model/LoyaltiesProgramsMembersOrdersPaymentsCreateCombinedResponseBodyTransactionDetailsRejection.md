# # LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransactionDetailsRejection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Machine-readable rejection reason. Order-side: &#x60;ORDER_NOT_FOUND&#x60;, &#x60;PAYMENT_EXCEEDS_ORDER_TOTAL_AMOUNT&#x60;. Card-side (when the linked card transaction fails first): &#x60;NOT_ENOUGH_BALANCE&#x60;, &#x60;GLOBAL_SPENDING_LIMIT_EXCEEDED&#x60;, &#x60;TRANSACTION_SPENDING_LIMIT_EXCEEDED&#x60;. | [optional]
**details** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransactionDetailsRejectionDetails**](LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransactionDetailsRejectionDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
