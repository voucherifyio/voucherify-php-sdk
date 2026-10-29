# # OrderPaymentTransactionDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Human-readable reason: \&quot;Points spent on order payment\&quot;. | [optional]
**rejection** | [**\OpenAPI\Client\Model\OrderPaymentRejection**](OrderPaymentRejection.md) |  | [optional]
**metadata** | **object** | Transaction metadata. For pay-with-points transactions this contains the flattened payment limits used for the calculation: &#x60;amount_limit&#x60; for the &#x60;AMOUNT_LIMIT&#x60; type and/or &#x60;points_limit&#x60; for the &#x60;POINTS_LIMIT&#x60; type. Empty object when the default &#x60;CARD_BALANCE&#x60; limit was used or when not set. | [optional]
**payment** | [**\OpenAPI\Client\Model\OrderPaymentPaymentDetails**](OrderPaymentPaymentDetails.md) |  | [optional]
**spendingCap** | [**\OpenAPI\Client\Model\OrderPaymentTransactionDetailsSpendingCap**](OrderPaymentTransactionDetailsSpendingCap.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
