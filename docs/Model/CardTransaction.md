# # CardTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique card transaction ID assigned by Voucherify. | [optional]
**cardId** | **string** | ID of the card the transaction belongs to. Assigned by Voucherify. | [optional]
**programId** | **string** | ID of the loyalty program. Assigned by Voucherify. | [optional]
**memberId** | **string** | ID of the member owning the card. Assigned by Voucherify. | [optional]
**cardDefinitionId** | **string** | ID of the card definition of the card. Assigned by Voucherify. | [optional]
**cardType** | **string** | Card type. | [optional] [default to 'INDIVIDUAL']
**type** | **string** | Transaction type. Options depend on the endpoint and the transaction variant. | [optional]
**details** | **mixed** |  |
**status** | **string** | Transaction processing status. Transactions are created as &#x60;PENDING&#x60; and processed asynchronously. | [optional]
**createdAt** | **\DateTime** | Timestamp when the transaction was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the transaction was last updated (ISO 8601), or &#x60;null&#x60;. | [optional]
**object** | **string** | Object type marker, always &#x60;card_transaction&#x60;. | [optional] [default to 'card_transaction']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
