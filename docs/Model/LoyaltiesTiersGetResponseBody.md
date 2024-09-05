# # LoyaltiesTiersGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Loyalty Tier name. | [optional]
**earningRules** | [**array<string,\OpenAPI\Client\Model\MappingPoints>**](MappingPoints.md) | Contains a list of earning rule IDs and their points mapping for the given earning rule. | [optional]
**rewards** | [**array<string,\OpenAPI\Client\Model\MappingPoints>**](MappingPoints.md) | Contains a list of reward IDs and their points mapping for the given reward. | [optional]
**points** | [**\OpenAPI\Client\Model\LoyaltiesTiersGetResponseBodyPoints**](LoyaltiesTiersGetResponseBodyPoints.md) |  | [optional]
**id** | **string** | Unique loyalty tier ID. | [optional]
**campaignId** | **string** | Unique parent campaign ID. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the loyalty tier. A set of key/value pairs that you can attach to a loyalty tier object. It can be useful for storing additional information about the loyalty tier in a structured format. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was created. The value is shown in the ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the loyalty tier was updated. The value is shown in the ISO 8601 format. | [optional]
**config** | [**\OpenAPI\Client\Model\LoyaltiesTiersGetResponseBodyConfig**](LoyaltiesTiersGetResponseBodyConfig.md) |  | [optional]
**expiration** | [**\OpenAPI\Client\Model\LoyaltyTierExpiration**](LoyaltyTierExpiration.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the loyalty. | [optional] [default to 'loyalty_tier']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
