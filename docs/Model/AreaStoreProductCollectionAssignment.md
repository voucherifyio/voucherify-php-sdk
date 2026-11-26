# # AreaStoreProductCollectionAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the product collection assignment. | [optional]
**areaId** | **string** | Unique identifier of the area to which the product collection is assigned. | [optional]
**allStores** | **bool** | Determines if the product collection is assigned to all of the stores in the area, i.e. if an area ID is passed in the &#x60;access_settings.assign.area_all_stores_ids&#x60; in the request. | [optional]
**areaStoreId** | **string** | Unique identifier of the store to which the product collection is assigned. Not returned when the product collection is assigned to the whole area or to all stores in the area. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the assignment was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the assignment was last updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'area_store_product_collection_assignment']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
