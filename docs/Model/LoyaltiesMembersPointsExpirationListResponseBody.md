# # LoyaltiesMembersPointsExpirationListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about loyalty points expiration buckets in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of loyalty points expiration bucket objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\LoyaltiesMembersPointsExpirationListResponseBodyDataItem[]**](LoyaltiesMembersPointsExpirationListResponseBodyDataItem.md) | Contains array of loyalty points expiration buckets. | [optional]
**total** | **int** | Total number of point expiration buckets. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
