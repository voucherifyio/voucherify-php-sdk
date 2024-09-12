# # LoyaltyTierExpiration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerId** | **string** | Unique customer ID of the customer making the purchase. | [optional]
**campaignId** | **string** | Unique campaign ID, assigned by Voucherify. | [optional]
**tierId** | **string** | Unique tier ID, assigned by Voucherify. | [optional]
**startDate** | **string** | Activation timestamp defines when the loyalty tier starts to be active in ISO 8601 format. Loyalty tier is inactive before this date. | [optional]
**expirationDate** | **string** | Expiration timestamp defines when the loyalty tier expires in ISO 8601 format. Loyalty tier is inactive after this date. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was updated. The value is shown in the ISO 8601 format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
