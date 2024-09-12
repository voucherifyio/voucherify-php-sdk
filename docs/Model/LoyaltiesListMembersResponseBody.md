# # LoyaltiesListMembersResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about members in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of voucher objects. | [optional] [default to 'vouchers']
**vouchers** | [**\OpenAPI\Client\Model\LoyaltyMember[]**](LoyaltyMember.md) | Contains array of voucher objects representing loyalty cards, in other words, loyalty program members. | [optional]
**total** | **int** | Total number of voucher objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
