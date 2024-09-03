# # LoyaltiesEarningRulesCreateRequestBodyItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validation_rule_id** | **string** | A unique validation rule identifier assigned by the Voucherify API. The validation rule is verified before points are added to the balance. | [optional]
**loyalty** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyalty**](LoyaltiesEarningRulesCreateRequestBodyItemLoyalty.md) |  | [optional]
**event** | **string** |  | [optional]
**source** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSource**](LoyaltiesEarningRulesCreateRequestBodyItemSource.md) |  | [optional]
**active** | **bool** | A flag to toggle the earning rule on or off. You can disable an earning rule even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60; of the campaign or the earning rule&#39;s own &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* earning rule - &#x60;false&#x60; indicates an *inactive* earning rule | [optional]
**start_date** | **\DateTime** | Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. Earning rule is *inactive before* this date. If you don&#39;t define the start date for an earning rule, it&#39;ll inherit the campaign start date by default. | [optional]
**expiration_date** | **\DateTime** | Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format.  Earning rule is *inactive after* this date.If you don&#39;t define the expiration date for an earning rule, it&#39;ll inherit the campaign expiration date by default. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**metadata** | **object** |  | [optional]
**segment** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemSegment**](LoyaltiesEarningRulesCreateRequestBodyItemSegment.md) |  | [optional]
**custom_event** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent**](LoyaltiesEarningRulesCreateRequestBodyItemCustomEvent.md) |  | [optional]
**loyalty_tier** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier**](LoyaltiesEarningRulesCreateRequestBodyItemLoyaltyTier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
