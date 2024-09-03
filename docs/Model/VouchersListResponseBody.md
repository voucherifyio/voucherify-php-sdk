# # VouchersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of voucher objects. | [optional] [default to 'vouchers']
**vouchers** | [**\OpenAPI\Client\Model\VoucherWithCategories[]**](VoucherWithCategories.md) | A dictionary that contains an array of  vouchers. Each entry in the array is a separate voucher object. | [optional]
**total** | **int** | Returns how many vouchers in the project meet the limits defined by the query parameter definitions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
