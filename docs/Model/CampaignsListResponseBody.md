# # CampaignsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about campaigns in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of campaign objects. | [optional] [default to 'campaigns']
**campaigns** | [**\OpenAPI\Client\Model\CampaignBase[]**](CampaignBase.md) | Contains array of campaign objects. | [optional]
**total** | **int** | Total number of campaigns. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
