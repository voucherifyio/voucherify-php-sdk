# # ManagementProjectsMetadataSchemaDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Indicates the type of metadata. Note that &#x60;\&quot;geopoint\&quot;&#x60; type is a paid feature. | [optional]
**optional** | **bool** | Indicates if this definition is optional or not for the resource. | [optional]
**array** | **bool** | Indicates if the definition is an array. | [optional]
**deleted** | **bool** | Indicates if the definition has been deleted from the schema. | [optional]
**objectType** | **string** | The name of the custom resource (i.e. a nested object) if the resource has been previously defined. Otherwise, it is &#x60;null&#x60; for other types. | [optional]
**minLength** | **int** | Value indicating the minimum length. Available only for the &#x60;string&#x60; type. | [optional]
**maxLength** | **int** | Value indicating the maximum length. Available only for the &#x60;string&#x60; type. | [optional]
**exactLength** | **int** | Value indicating the exact length. Available only for the &#x60;string&#x60; type. | [optional]
**eq** | **mixed[]** |  | [optional]
**ne** | **float[]** | Array of values that are not allowed. Available only for the &#x60;number&#x60; type. | [optional]
**lt** | **float** | A property of the &#x60;number&#x60; type must have &#x60;less than&#x60; this value. The value should be up to two decimal places. | [optional]
**lte** | **float** | A property of the &#x60;number&#x60; type must be &#x60;less than or equal&#x60; to this value. The value should be up to two decimal places. | [optional]
**gt** | **float** | A property of &#x60;number&#x60; type must be &#x60;greater than&#x60; this value. The value should be up to two decimal places. | [optional]
**gte** | **float** | A property of &#x60;number&#x60; type must be &#x60;greater than or equal&#x60; to this value. The value should be up to two decimal places. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
