# # V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardId** | **string** | Unique identifier of the member&#39;s loyalty card to spend points from (format &#x60;lcrd_...&#x60;). | [optional]
**order** | [**\OpenAPI\Client\Model\OrderPaymentOrder**](OrderPaymentOrder.md) |  |
**paymentLimit** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBodyLimit**](LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBodyLimit.md) |  | [optional]
**mode** | **string** | Payment mode. &#x60;TRANSACTION&#x60; creates a &#x60;PENDING&#x60; order transaction processed asynchronously (HTTP &#x60;202&#x60;). &#x60;DRY_RUN&#x60; only simulates the payment and returns the calculation result (HTTP &#x60;200&#x60;); no transaction is created. Defaults to &#x60;TRANSACTION&#x60; when omitted or &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
