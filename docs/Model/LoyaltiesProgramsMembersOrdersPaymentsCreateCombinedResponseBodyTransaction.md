# # LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **string** | Unique identifier of the loyalty program (format &#x60;lprg_...&#x60;). | [optional]
**memberId** | **string** | Unique identifier of the program member (format &#x60;lmbr_...&#x60;). | [optional]
**cardId** | **string** | Unique identifier of the loyalty card the points were spent from (format &#x60;lcrd_...&#x60;). | [optional]
**cardDefinitionId** | **string** | Identifies the card definition (format &#x60;lcdef_...&#x60;). | [optional]
**cardTransactionId** | **object** | &#x60;null&#x60; for &#x60;DRY_RUN&#x60; (&#x60;SIMULATED&#x60;) transactions. | [optional]
**orderId** | **string** | Identifies the paid order (format &#x60;ord_...&#x60;). | [optional]
**status** | **string** |  | [optional]
**type** | **string** | Defines the transaction type. Always &#x60;PAY_WITH_POINTS&#x60;. | [optional] [default to 'PAY_WITH_POINTS']
**details** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransactionDetails**](LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBodyTransactionDetails.md) |  | [optional]
**updatedAt** | **object** | Timestamp when the transaction was last updated (ISO 8601), or &#x60;null&#x60; for &#x60;DRY_RUN&#x60; (&#x60;SIMULATED&#x60;) transactions. | [optional]
**object** | **string** | Object type marker. Always &#x60;order_transaction&#x60;. | [optional] [default to 'order_transaction']
**createdAt** | **\DateTime** | Timestamp when the transaction was created (ISO 8601). | [optional]
**id** | **string** | Identifies the order transaction (&#x60;lotx_...&#x60;). Absent on dry-run (&#x60;SIMULATED&#x60;) create responses, which are never persisted. Always present in list responses. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
