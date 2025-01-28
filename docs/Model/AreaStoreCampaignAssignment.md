# # AreaStoreCampaignAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the campaign assignment. | [optional]
**areaId** | **string** | Unique identifier of the area to which the campaign is assigned. | [optional]
**allStores** | **bool** | Determines if the campaign is assigned to all of the stores in the area, i.e. if an area ID is passed in the &#x60;access_settings.assign.area_all_stores_ids&#x60; in the request. | [optional]
**areaStoreId** | **string** | Unique identifier of the store to which the campaign is assigned. | [optional]
**createdAt** | **\DateTime** | Date and time when the assignment was made. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the campaign assignment to areas or stores. | [optional] [default to 'area_store_campaign_assignment']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
