# # LoyaltyPendingPointsDetailsEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique event identifier, assigned by Voucherify. | [optional]
**type** | **string** | Type of the event that triggered the creation of pending points. | [optional] [default to 'customer.order.paid']
**groupId** | **string** | Unique identifier of the request that triggered the event, assigned by Voucherify. | [optional]
**entityId** | **string** | Unique identifier of the entity that triggered the event, assigned by Voucherify. For pending points, it is the &#x60;customer_id&#x60; of the customer who paid for the order. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the event occurred. The value is shown in the ISO 8601 format. | [optional]
**category** | **string** | Type of the event. | [optional]
**eventSource** | [**\OpenAPI\Client\Model\EventSource**](EventSource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
