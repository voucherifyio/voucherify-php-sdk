# # QualificationsRedeemableBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Id of the redeemable. | [optional]
**object** | **string** | Object type of the redeemable. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the object was created. The value is shown in the ISO 8601 format. | [optional]
**result** | [**\OpenAPI\Client\Model\RedeemableResult**](RedeemableResult.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**validationRuleId** | **string** | A unique validation rule identifier assigned by the Voucherify API. The validation rule is verified before points are added to the balance. | [optional]
**applicableTo** | [**\OpenAPI\Client\Model\ApplicableToResultList**](ApplicableToResultList.md) |  | [optional]
**inapplicableTo** | [**\OpenAPI\Client\Model\InapplicableToResultList**](InapplicableToResultList.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the product. A set of key/value pairs that you can attach to a product object. It can be useful for storing additional information about the product in a structured format. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | List of category information. | [optional]
**banner** | **string** | Name of the earning rule. This is displayed as a header for the earning rule in the Dashboard. | [optional]
**name** | **string** | Name of the redeemable. | [optional]
**campaignName** | **string** | Name of the campaign associated to the redeemable. This field is available only if object is not &#x60;campaign&#x60; | [optional]
**campaignId** | **string** | Id of the campaign associated to the redeemable. This field is available only if object is not &#x60;campaign&#x60; | [optional]
**validationRulesAssignments** | [**\OpenAPI\Client\Model\ValidationRulesAssignmentsList**](ValidationRulesAssignmentsList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
