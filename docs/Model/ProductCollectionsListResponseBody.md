# # ProductCollectionsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about product collections. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the JSON property that contains the array of product collections. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\ProductCollectionsItem[]**](ProductCollectionsItem.md) | A dictionary that contains an array of product collections and their details.  &lt;Note&gt;If the Areas and Stores enterprise feature is enabled for product collections, this list does not return &#x60;access_settings_assignments&#x60;. To get the areas and stores to which a product collection is assigned, use [GET Product Collection](/api-reference/product-collections/get-product-collection). Contact [Voucherify Sales](https://www.voucherify.io/contact-sales) to learn more.&lt;/Note&gt; | [optional]
**total** | **int** | Total number of product collections. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
