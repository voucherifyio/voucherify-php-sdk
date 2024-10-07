# # MetadataSchemaDefinitionDeprecated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**array** | **bool** | Indicates whether the definition is an array. | [optional]
**optional** | **bool** | Indicates whether this definition is optional or not optional for the resource. | [optional]
**objectType** | **string** | Returns the name of the custom resource if the resource was previously defined in the Dashboard as a custom (non-standard) Nested object. | [optional]
**eq** | **mixed[]** | Array of possible values when the setting for &#x60;is equal to any of&#x60; in the Dashboard is defined explicitly. | [optional]
**ne** | **mixed[]** | Array of values that are not allowed when the setting for &#x60;is not equal to any of&#x60; in the Dashboard is defined explicitly. | [optional]
**lt** | **int** | A property of &#x60;number&#x60; type must have &#x60;less than&#x60; this value. | [optional]
**lte** | **int** | A property of &#x60;number&#x60; type must be &#x60;less than or equal&#x60; to this value. | [optional]
**gt** | **int** | A property of &#x60;number&#x60; type must be &#x60;greater than&#x60; this value. | [optional]
**gte** | **int** | A property of &#x60;number&#x60; type must be &#x60;greater than or equal&#x60; to this value. | [optional]
**deleted** | **bool** | Indicates whether the definition was deleted from the schema. | [optional]
**maxLength** | **int** | Value for maximum length when the setting for &#x60;has maximum length of&#x60; in the Dashboard is defined explicitly. | [optional]
**minLength** | **int** | Value indicating minimum length when the setting for &#x60;has minimum length of&#x60; in the Dashboard is defined explicitly. | [optional]
**exactLength** | **int** | Value indicating exact length when the setting for &#x60;has exact length of&#x60; in the Dashboard is defined explicitly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
