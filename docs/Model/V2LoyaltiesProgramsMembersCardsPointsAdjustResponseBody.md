# # V2LoyaltiesProgramsMembersCardsPointsAdjustResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction** | [**\OpenAPI\Client\Model\CardTransaction**](CardTransaction.md) |  | [optional]
**status** | **string** | &#x60;TRANSACTION_CREATED&#x60; when a transaction was created, &#x60;NO_CHANGE&#x60; when the requested points amount was zero. | [optional]
**message** | **string** | Human-readable result message: - \&quot;Points addition transaction created\&quot;, - \&quot;Points subtraction transaction created\&quot;, - \&quot;Provided amount is zero, transaction was not created\&quot;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
