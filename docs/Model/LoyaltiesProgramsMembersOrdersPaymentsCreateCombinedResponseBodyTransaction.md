# # LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **string** | Unique identifier of the loyalty program (format &#x60;lprg_...&#x60;). | [optional]
**memberId** | **string** | Unique identifier of the program member (format &#x60;lmbr_...&#x60;). | [optional]
**cardId** | **string** | Unique identifier of the loyalty card the points were spent from (format &#x60;lcrd_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Unique identifier of the card definition (format &#x60;lcdef_...&#x60;). | [optional]
**cardTransactionId** | **object** | &#x60;null&#x60; for &#x60;DRY_RUN&#x60; (&#x60;SIMULATED&#x60;) transactions. | [optional]
**orderId** | **string** | Unique identifier of the paid order (format &#x60;ord_...&#x60;). | [optional]
**status** | **string** | Transaction status. &#x60;SIMULATED&#x60; - dry-run create result, not persisted. | [optional] [default to 'SIMULATED']
**type** | **string** | Defines the transaction type. Always &#x60;PAY_WITH_POINTS&#x60;. | [optional] [default to 'PAY_WITH_POINTS']
**details** | **mixed** |  | [optional]
**updatedAt** | **object** | Timestamp when the transaction was last updated (ISO 8601), or &#x60;null&#x60; for &#x60;DRY_RUN&#x60; (&#x60;SIMULATED&#x60;) transactions. | [optional]
**object** | **string** | Object type marker. Always &#x60;order_transaction&#x60;. | [optional] [default to 'order_transaction']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
