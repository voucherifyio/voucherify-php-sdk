# # TemplatesCampaignsTierSetupCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignId** | **string** | Unique campaign identifier, assigned by Voucherify. Defines the promotion campaign to which the promotion tier will be added. | [optional]
**name** | **string** | Name of the promotion tier. | [optional]
**banner** | **string** | Text to be displayed to your customers on your website. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the promotion tier. A set of key/value pairs that you can attach to a promotion tier object. It can be useful for storing additional information about the promotion tier in a structured format. | [optional]
**hierarchy** | **int** | The promotions hierarchy defines the order in which the discounts from different tiers will be applied to a customer&#39;s order. If a customer qualifies for discounts from more than one tier, discounts will be applied in the order defined in the hierarchy. | [optional]
**active** | **bool** | A flag to toggle the promotion tier on or off. You can disable a promotion tier even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* promotion tier - &#x60;false&#x60; indicates an *inactive* promotion tier | [optional]
**startDate** | **\DateTime** | Activation timestamp defines when the promotion tier starts to be active in ISO 8601 format. Promotion tier is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Activation timestamp defines when the promotion tier expires in ISO 8601 format. Promotion tier is *inactive after* this date. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**category** | **string** | Assign a new or update the promotion tier&#39;s category using name. | [optional]
**categoryId** | **string** | Assign a new or update the promotion tier&#39;s category using id | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
