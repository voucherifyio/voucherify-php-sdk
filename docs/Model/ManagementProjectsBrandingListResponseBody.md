# # ManagementProjectsBrandingListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the brand in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of brand objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ManagementProjectsBranding[]**](ManagementProjectsBranding.md) | Array of brand objects. It contains only one object. | [optional]
**total** | **int** | The total number of brand objects. It is always &#x60;1&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
