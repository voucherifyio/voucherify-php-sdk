# # LoyaltiesMembersTransfersCreateResponseBodyPublish

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented is by default list. To get this list, you need to make a call to the endpoint returned in the url attribute. | [optional] [default to 'list']
**count** | **int** | Publication events counter. | [optional]
**entries** | **string[]** |  | [optional]
**url** | **string** | The endpoint where this list of publications can be accessed using a GET method. /v1/vouchers/{voucher_code}/publications | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
