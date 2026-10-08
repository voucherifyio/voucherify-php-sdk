# # OrderPaymentTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the order transaction (&#x60;lotx_...&#x60;). Absent on dry-run (&#x60;SIMULATED&#x60;) create responses, which are never persisted. Always present in list responses. | [optional]
**programId** | **string** | Unique identifier of the loyalty program (format &#x60;lprg_...&#x60;). | [optional]
**memberId** | **string** | Unique identifier of the program member (format &#x60;lmbr_...&#x60;). | [optional]
**cardId** | **string** | Unique identifier of the loyalty card the points were spent from (format &#x60;lcrd_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Unique identifier of the card definition (format &#x60;lcdef_...&#x60;). | [optional]
**cardTransactionId** | **string** | Unique identifier of the underlying card transaction (format &#x60;lctx_...&#x60;). &#x60;null&#x60; for DRY_RUN (SIMULATED) transactions. | [optional]
**orderId** | **string** | Unique identifier of the paid order (format &#x60;ord_...&#x60;). | [optional]
**status** | **string** | Transaction status. &#x60;PENDING&#x60; - created, awaiting processing; &#x60;PROCESSING&#x60; - being processed; &#x60;APPROVED&#x60; - completed successfully; &#x60;REJECTED&#x60; - rejected (see &#x60;details.rejection&#x60;); &#x60;SIMULATED&#x60; - dry-run create result, not persisted (not returned by list). | [optional]
**type** | **string** | Defines the transaction type. Always &#x60;PAY_WITH_POINTS&#x60;. | [optional] [default to 'PAY_WITH_POINTS']
**details** | **mixed** |  | [optional]
**createdAt** | **\DateTime** | Timestamp when the transaction was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the transaction was last updated (ISO 8601), or &#x60;null&#x60;. | [optional]
**object** | **string** | Object type marker. Always &#x60;order_transaction&#x60;. | [optional] [default to 'order_transaction']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
