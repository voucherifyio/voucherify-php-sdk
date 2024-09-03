# # LoyaltiesTiersCreateInBulkRequestBodyItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Loyalty Tier name. | [optional]
**earning_rules** | [**array<string,\OpenAPI\Client\Model\MappingPoints>**](MappingPoints.md) | Contains a list of earning rule IDs and their points mapping for the given earning rule. | [optional]
**rewards** | [**array<string,\OpenAPI\Client\Model\MappingPoints>**](MappingPoints.md) | Contains a list of reward IDs and their points mapping for the given reward. | [optional]
**points** | [**\OpenAPI\Client\Model\LoyaltyTierBasePoints**](LoyaltyTierBasePoints.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the loyalty tier. A set of key/value pairs that you can attach to a loyalty tier object. It can be useful for storing additional information about the loyalty tier in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
