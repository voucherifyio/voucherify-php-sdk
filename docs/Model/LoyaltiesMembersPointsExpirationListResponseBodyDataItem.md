# # LoyaltiesMembersPointsExpirationListResponseBodyDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique loyalty points bucket ID. |
**voucher_id** | **string** | Unique parent loyalty card ID. |
**campaign_id** | **string** | Unique parent campaign ID. |
**bucket** | [**\OpenAPI\Client\Model\LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket**](LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket.md) |  |
**created_at** | **\DateTime** | Timestamp representing the date and time when the loyalty points bucket object was created. The value is shown in the ISO 8601 format. |
**status** | **string** | Loyalty points bucket point status. |
**expires_at** | **\DateTime** | Date when the number of points defined in the bucket object are due to expire. |
**updated_at** | **\DateTime** | Timestamp representing the date and time when the loyalty points bucket object was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the loyalty points bucket. | [default to 'loyalty_points_bucket']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
