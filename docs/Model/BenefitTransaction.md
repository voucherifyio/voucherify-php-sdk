# # BenefitTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **string** | Unique identifier of the loyalty program (format &#x60;lprg_...&#x60;). | [optional]
**memberId** | **string** | Unique identifier of the program member (format &#x60;lmbr_...&#x60;). | [optional]
**createdAt** | **\DateTime** | Timestamp when the transaction was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the transaction was last updated (ISO 8601), or &#x60;null&#x60;. | [optional]
**id** | **string** | Unique benefit transaction identifier (format &#x60;lbtx_...&#x60;). | [optional]
**benefitId** | **string** | Unique identifier of the fulfilled benefit (format &#x60;lben_...&#x60;). | [optional]
**earningRuleId** | **string** | Unique identifier of the earning rule that triggered the fulfillment (format &#x60;lern_...&#x60;). | [optional]
**type** | **string** | Transaction type. Always &#x60;FULFILLMENT&#x60;. | [optional] [default to 'FULFILLMENT']
**details** | [**\OpenAPI\Client\Model\BenefitTransactionDetails**](BenefitTransactionDetails.md) |  | [optional]
**status** | **string** | Transaction status. &#x60;PENDING&#x60; - created, awaiting processing; &#x60;APPROVED&#x60; - completed successfully; &#x60;REJECTED&#x60; - rejected (see &#x60;details.rejection&#x60;). | [optional]
**object** | **string** | Object type marker. Always &#x60;benefit_transaction&#x60;. | [optional] [default to 'benefit_transaction']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
