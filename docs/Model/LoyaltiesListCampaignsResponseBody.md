# # LoyaltiesListCampaignsResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about loyalty campaigns in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of loyalty campaign objects. | [optional] [default to 'campaigns']
**campaigns** | [**\OpenAPI\Client\Model\LoyaltyCampaign[]**](LoyaltyCampaign.md) | Contains an array of loyalty campaign objects. | [optional]
**total** | **int** | Total number of loyalty campaign objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
