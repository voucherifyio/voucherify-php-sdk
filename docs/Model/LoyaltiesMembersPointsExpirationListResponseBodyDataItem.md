# # LoyaltiesMembersPointsExpirationListResponseBodyDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the loyalty points bucket. | [optional]
**voucherId** | **string** | Unique identifier of the parent loyalty card. | [optional]
**campaignId** | **string** | Unique identifier of the parent campaign. | [optional]
**bucket** | [**\OpenAPI\Client\Model\LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket**](LoyaltiesMembersPointsExpirationListResponseBodyDataItemBucket.md) |  | [optional]
**status** | **string** | Loyalty point point bucket status. | [optional]
**expiresAt** | **\DateTime** | Date when the number of points defined in the bucket object are due to expire. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the loyalty point bucket object was created in ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the loyalty point bucket object was updated in ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the loyalty point bucket. | [optional] [default to 'loyalty_points_bucket']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
