# # LoyaltyPendingPoints

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the pending point entry, assigned by Voucherify. | [optional]
**voucherId** | **string** | Unique identifier of the loyalty card, assigned by Voucherify. | [optional]
**campaignId** | **string** | Unique campaign identifier, assigned by Voucherify. | [optional]
**customerId** | **string** | Unique customer identifier, assigned by Voucherify. | [optional]
**orderId** | **string** | Unique order identifier, assigned by Voucherify. | [optional]
**points** | **int** | Number of points in the pending state. | [optional]
**activatesAt** | **\DateTime** | Date when the pending points are activated and added to the customer&#39;s loyalty card. | [optional]
**details** | [**\OpenAPI\Client\Model\LoyaltyPendingPointsDetails**](LoyaltyPendingPointsDetails.md) |  |
**createdAt** | **\DateTime** | Timestamp representing the date and time when the pending point entry was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the pending point entry was modified. The value is shown in the ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
