# # LoyaltiesTiersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about loyalty tiers in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of loyalty tier objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\LoyaltyTier[]**](LoyaltyTier.md) | This is an object representing a loyalty tier. Loyalty tiers are used to create a loyalty program with different levels of membership and varied earning rules and rewards based on customer&#39;s tiers. | [optional]
**total** | **int** | Total number of loyalty tier objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
