# # PromotionsTiersEnableResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique promotion tier ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the promotion tier was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the promotion tier was updated. The value is shown in the ISO 8601 format. | [optional]
**name** | **string** | Name of the promotion tier. | [optional]
**banner** | **string** | Text to be displayed to your customers on your website. | [optional]
**action** | [**\OpenAPI\Client\Model\PromotionsTiersEnableResponseBodyAction**](PromotionsTiersEnableResponseBodyAction.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the promotion tier. A set of key/value pairs that you can attach to a promotion tier object. It can be useful for storing additional information about the promotion tier in a structured format. | [optional]
**hierarchy** | **int** | The promotions hierarchy defines the order in which the discounts from different tiers will be applied to a customer&#39;s order. If a customer qualifies for discounts from more than one tier, discounts will be applied in the order defined in the hierarchy. | [optional]
**promotion_id** | **string** | Promotion unique ID. | [optional]
**campaign** | [**\OpenAPI\Client\Model\PromotionsTiersEnableResponseBodyCampaign**](PromotionsTiersEnableResponseBodyCampaign.md) |  | [optional]
**campaign_id** | **string** | Promotion tier&#39;s parent campaign&#39;s unique ID. | [optional]
**active** | **bool** | A flag to toggle the promotion tier on or off. You can disable a promotion tier even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* promotion tier - &#x60;false&#x60; indicates an *inactive* promotion tier | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**summary** | [**\OpenAPI\Client\Model\PromotionsTiersEnableResponseBodySummary**](PromotionsTiersEnableResponseBodySummary.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. This object stores information about the promotion tier. | [optional] [default to 'promotion_tier']
**validation_rule_assignments** | [**\OpenAPI\Client\Model\ValidationRuleAssignmentsList**](ValidationRuleAssignmentsList.md) |  | [optional]
**category_id** | **string** | Promotion tier category ID. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
