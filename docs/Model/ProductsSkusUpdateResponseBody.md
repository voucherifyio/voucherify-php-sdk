# # ProductsSkusUpdateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier that represents the SKU and is assigned by Voucherify. | [optional]
**source_id** | **string** | A unique SKU identifier from your inventory system. | [optional]
**product_id** | **string** | The parent product&#39;s unique ID. | [optional]
**sku** | **string** | Unique user-defined SKU name. | [optional]
**price** | **int** | Unit price. It is represented by a value multiplied by 100 to accurately reflect 2 decimal places, such as &#x60;$100.00&#x60; being expressed as &#x60;10000&#x60;. | [optional]
**currency** | **string** | SKU price currency. | [optional]
**attributes** | **object** | The attributes object stores values for all custom attributes inherited by the SKU from the parent product. A set of key/value pairs that are attached to a SKU object and are unique to each SKU within a product family. | [optional]
**image_url** | **string** | The HTTPS URL pointing to the .png or .jpg file that will be used to render the SKU image. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the SKU. A set of key/value pairs that you can attach to a SKU object. It can be useful for storing additional information about the SKU in a structured format. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the SKU was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the SKU was updated. The value is shown in the ISO 8601 format. | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the &#x60;SKU&#x60;. | [optional] [default to 'sku']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
