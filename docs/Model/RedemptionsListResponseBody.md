# # RedemptionsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about redemptions in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of redemption objects. | [optional] [default to 'redemptions']
**redemptions** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItem[]**](RedemptionsListResponseBodyRedemptionsItem.md) |  | [optional]
**total** | **int** | Total number of redemptions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
