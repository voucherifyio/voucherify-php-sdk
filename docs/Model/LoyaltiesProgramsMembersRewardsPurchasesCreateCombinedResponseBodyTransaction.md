# # LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBodyTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardId** | **string** |  | [optional]
**cardDefinitionId** | **string** | Unique identifier of the card definition for that card (format &#x60;lcdef_...&#x60;). | [optional]
**cardTransactionId** | **object** | &#x60;null&#x60; for &#x60;DRY_RUN&#x60; (SIMULATED) transactions. | [optional]
**programId** | **string** | Unique identifier of the loyalty program (format &#x60;lprg_...&#x60;). | [optional]
**memberId** | **string** | Unique identifier of the program member (format &#x60;lmbr_...&#x60;). | [optional]
**rewardId** | **string** | Unique identifier of the purchased reward (format &#x60;lrew_...&#x60;). | [optional]
**status** | **string** |  | [optional]
**type** | **string** |  | [optional] [default to 'PURCHASE']
**details** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBodyTransactionDetails**](LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBodyTransactionDetails.md) |  | [optional]
**updatedAt** | **object** | For &#x60;DRY_RUN&#x60; transactions, this is always &#x60;null&#x60;. | [optional]
**object** | **string** | Object type marker. Always &#x60;reward_transaction&#x60;. | [optional] [default to 'reward_transaction']
**id** | **string** | Unique reward transaction identifier (format &#x60;lrtx_...&#x60;). | [optional]
**createdAt** | **\DateTime** | Timestamp when the transaction was created (ISO 8601). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
