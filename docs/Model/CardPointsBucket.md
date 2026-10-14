# # CardPointsBucket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardId** | **string** | ID of the card the bucket belongs to. | [optional]
**cardDefinitionId** | **string** | ID of the card definition of the card. | [optional]
**programId** | **string** | ID of the loyalty program. | [optional]
**memberId** | **string** | ID of the member owning the card. | [optional]
**createdAt** | **\DateTime** | Timestamp when the bucket was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the bucket was last updated (ISO 8601), or &#x60;null&#x60;. | [optional]
**id** | **string** | Unique points expiration bucket ID. | [optional]
**customerId** | **string** | Voucherify ID of the customer owning the card. | [optional]
**cardType** | **string** | Card type. Currently, only &#x60;INDIVIDUAL&#x60; is supported. | [optional] [default to 'INDIVIDUAL']
**points** | [**\OpenAPI\Client\Model\CardPointsBucketPoints**](CardPointsBucketPoints.md) |  | [optional]
**expirationDate** | **\DateTime** | Date when the points in the bucket expire (&#x60;YYYY-MM-DD&#x60;). | [optional]
**expirationType** | **string** | Points expiration type for the bucket. It can be inherited from the card definition or overridden by the earning rule. | [optional]
**status** | **string** | Bucket status. For the List card expiring points buckets, returns only &#x60;ACTIVE&#x60; buckets. | [optional]
**object** | **string** | Object type marker, always &#x60;card_points_bucket&#x60;. | [optional] [default to 'card_points_bucket']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
