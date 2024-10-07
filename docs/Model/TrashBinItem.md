# # TrashBinItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the trash bin entry. It should not be confused with the ID of the resource moved to the bin. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the resource was moved to the bin. The value for this parameter is shown in the ISO 8601 format. | [optional]
**deletedByUserId** | **string** | Unique identifier of the user who moved the resource to the bin. It returns a user ID if the resource was moved to the bin through an action in the website. It returns a &#x60;null&#x60; if the resource was deleted through the API. | [optional]
**resourceId** | **string** | Unique identifier of the resource moved to the bin, i.e. an ID of a campaign, product, SKU, or voucher. | [optional]
**resourceType** | **string** | Type of the resource moved to the bin. | [optional]
**resourceName** | **string** | Name of the resouce moved to the bin. It is the name of the campaign, product or SKU, or the voucher code. | [optional]
**resourceParentId** | **string** | Unique identifier of the parent resource. For a voucher, it is a campaign ID, except for standalone vouchers. For an SKU, it is the product ID. It returns &#x60;null&#x60; for campaigns and base products. | [optional]
**object** | **string** | The type of the object represented by JSON. It is equal to the &#x60;resource_type&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
