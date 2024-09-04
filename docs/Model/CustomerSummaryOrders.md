# # CustomerSummaryOrders

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_amount** | **int** | The total amount spent by the customer. Value is multiplied by 100 to precisely represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**total_count** | **int** | Total number of orders made by the customer. | [optional]
**average_amount** | **int** | Average amount spent on orders. &#x60;total_amount&#x60; &amp;divide; &#x60;total_count&#x60;. Value is multiplied by 100 to precisely represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**last_order_amount** | **int** | Amount spent on last order. Value is multiplied by 100 to precisely represent 2 decimal places. For example &#x60;10000 cents&#x60; for &#x60;$100.00&#x60;. | [optional]
**last_order_date** | **\DateTime** | Timestamp representing the date and time of the customer&#39;s last order in ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
