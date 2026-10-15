# # CardPendingPointsBucket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardId** | **string** | ID of the card the bucket belongs to. | [optional]
**cardDefinitionId** | **string** | ID of the card definition of the card. | [optional]
**programId** | **string** | ID of the loyalty program. | [optional]
**memberId** | **string** | ID of the member owning the card. | [optional]
**cardType** | **string** | Card type. Currently, only &#x60;INDIVIDUAL&#x60; is supported. | [optional] [default to 'INDIVIDUAL']
**createdAt** | **\DateTime** | Timestamp when the bucket was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Timestamp when the bucket was last updated (ISO 8601), or &#x60;null&#x60;. | [optional]
**id** | **string** | Unique pending point bucket ID. | [optional]
**points** | [**\OpenAPI\Client\Model\CardPendingPointsBucketPoints**](CardPendingPointsBucketPoints.md) |  | [optional]
**date** | **\DateTime** | Scheduled activation date of the pending points (&#x60;YYYY-MM-DD&#x60;). For the &#x60;EVENT_BASED&#x60; type this is the cancellation deadline. | [optional]
**type** | **string** | Pending points activation type from the card definition. | [optional]
**status** | **string** | Bucket status. | [optional]
**object** | **string** | Object type marker, always &#x60;card_pending_points_bucket&#x60;. | [optional] [default to 'card_pending_points_bucket']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
