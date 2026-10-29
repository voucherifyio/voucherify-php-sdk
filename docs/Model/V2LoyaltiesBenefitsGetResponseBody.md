# # V2LoyaltiesBenefitsGetResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique benefit ID, prefixed with &#x60;lben_&#x60;. | [optional]
**name** | **string** | Benefit name, unique within the project. | [optional]
**type** | **string** | Benefit type. | [optional]
**status** | **string** | Current benefit status. &#x60;DELETED&#x60; appears only in the response of the delete endpoint and in activity snapshots. | [optional]
**stock** | [**\OpenAPI\Client\Model\V2LoyaltiesBenefitsGetResponseBodyStock**](V2LoyaltiesBenefitsGetResponseBodyStock.md) |  | [optional]
**points** | [**\OpenAPI\Client\Model\V2LoyaltiesBenefitsGetResponseBodyPoints**](V2LoyaltiesBenefitsGetResponseBodyPoints.md) |  | [optional]
**pointsProportional** | [**\OpenAPI\Client\Model\V2LoyaltiesBenefitsGetResponseBodyPointsProportional**](V2LoyaltiesBenefitsGetResponseBodyPointsProportional.md) |  | [optional]
**material** | **mixed** |  | [optional]
**digital** | **mixed** |  | [optional]
**createdAt** | **\DateTime** | Timestamp of when the benefit was created, in ISO 8601 format. | [optional]
**updatedAt** | **\DateTime** | Timestamp of the last update, in ISO 8601 format. &#x60;null&#x60; when the benefit was never updated. | [optional]
**object** | **string** | Type of the object. Always &#x60;benefit&#x60;. | [optional] [default to 'benefit']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
