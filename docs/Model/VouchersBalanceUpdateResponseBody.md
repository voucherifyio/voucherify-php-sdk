# # VouchersBalanceUpdateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | The incremental amount added (positive integer) or subtracted (negative integer) to the current balance on the gift card or loyalty card. The value is multiplied by 100 to represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**total** | **int** | Total income incurred over the lifespan of the gift card or loyalty card. | [optional]
**balance** | **int** | The balance after adding or subtracting a specified amount. The value is multiplied by 100 to represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**type** | **string** | The type of voucher being modified. | [optional]
**operationType** | **string** | The type of the operation being performed. | [optional] [default to 'MANUAL']
**object** | **string** | The type of the object represented by JSON. Default is &#x60;balance&#x60;. | [optional] [default to 'balance']
**relatedObject** | [**\OpenAPI\Client\Model\VouchersBalanceUpdateResponseBodyRelatedObject**](VouchersBalanceUpdateResponseBodyRelatedObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
