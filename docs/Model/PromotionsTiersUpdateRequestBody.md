# # PromotionsTiersUpdateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the promotion tier. | [optional]
**banner** | **string** | Text to be displayed to your customers on your website. | [optional]
**action** | [**\OpenAPI\Client\Model\PromotionsTiersUpdateRequestBodyAction**](PromotionsTiersUpdateRequestBodyAction.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the promotion tier. A set of key/value pairs that you can attach to a promotion tier object. It can be useful for storing additional information about the promotion tier in a structured format. | [optional]
**hierarchy** | **int** | The promotions hierarchy defines the order in which the discounts from different tiers will be applied to a customer&#39;s order. If a customer qualifies for discounts from more than one tier, discounts will be applied in the order defined in the hierarchy. | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**validation_rule_assignments** | [**\OpenAPI\Client\Model\ValidationRuleAssignmentsList**](ValidationRuleAssignmentsList.md) |  | [optional]
**category** | **string** | Assign a new or update the promotion tier&#39;s category using name. | [optional]
**category_id** | **string** | Assign a new or update the promotion tier&#39;s category using id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
