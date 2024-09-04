# # LoyaltiesEarningRulesCreateTierChangeRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validation_rule_id** | **string** | A unique validation rule identifier assigned by the Voucherify API. The validation rule is verified before points are added to the balance. | [optional]
**loyalty** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateTierChangeRequestBodyLoyalty**](LoyaltiesEarningRulesCreateTierChangeRequestBodyLoyalty.md) |  | [optional]
**event** | **string** | Defines the event which triggers the earning rule to add points to a loyalty card.    - &#x60;customer.loyalty.tier.joined&#x60; an event defined by the Voucherify API corresponding to a customer joining a tier     - &#x60;customer.loyalty.tier.left&#x60; an event defined by the Voucherify API corresponding to a customer leaving a tier     - &#x60;customer.loyalty.tier.upgraded&#x60; an event defined by the Voucherify API corresponding to a customer&#39;s tier being upgraded     - &#x60;customer.loyalty.tier.downgraded&#x60; an event defined by the Voucherify API corresponding to a customer&#39;s tier being upgraded     - &#x60;customer.loyalty.tier.prolonged&#x60; an event defined by the Voucherify API corresponding to a customer&#39;s tier being prolonged | [optional]
**loyalty_tier** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateTierChangeRequestBodyLoyaltyTier**](LoyaltiesEarningRulesCreateTierChangeRequestBodyLoyaltyTier.md) |  | [optional]
**source** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesCreateTierChangeRequestBodySource**](LoyaltiesEarningRulesCreateTierChangeRequestBodySource.md) |  | [optional]
**active** | **bool** | A flag to toggle the earning rule on or off. You can disable an earning rule even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60; of the campaign or the earning rule&#39;s own &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* earning rule - &#x60;false&#x60; indicates an *inactive* earning rule | [optional]
**start_date** | **\DateTime** | Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. Earning rule is *inactive before* this date. If you don&#39;t define the start date for an earning rule, it&#39;ll inherit the campaign start date by default. | [optional]
**expiration_date** | **\DateTime** | Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format.  Earning rule is *inactive after* this date.If you don&#39;t define the expiration date for an earning rule, it&#39;ll inherit the campaign expiration date by default. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the earning rule. A set of key/value pairs that you can attach to an earning rule object. It can be useful for storing additional information about the earning rule in a structured format. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
