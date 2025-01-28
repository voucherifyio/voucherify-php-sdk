# # LoyaltiesEarningRulesDisableResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Assigned by the Voucherify API, identifies the earning rule object. | [optional]
**createdAt** | **\DateTime** | Timestamp representing the date and time when the earning rule was created. The value is shown in the ISO 8601 format. | [optional]
**loyalty** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodyLoyalty**](LoyaltiesEarningRulesDisableResponseBodyLoyalty.md) |  | [optional]
**event** | **string** |  | [optional]
**customEvent** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodyCustomEvent**](LoyaltiesEarningRulesDisableResponseBodyCustomEvent.md) |  | [optional]
**segment** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodySegment**](LoyaltiesEarningRulesDisableResponseBodySegment.md) |  | [optional]
**loyaltyTier** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodyLoyaltyTier**](LoyaltiesEarningRulesDisableResponseBodyLoyaltyTier.md) |  | [optional]
**pendingPoints** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodyPendingPoints**](LoyaltiesEarningRulesDisableResponseBodyPendingPoints.md) |  | [optional]
**source** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesDisableResponseBodySource**](LoyaltiesEarningRulesDisableResponseBodySource.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. Default is earning_rule. | [optional] [default to 'earning_rule']
**automationId** | **string** | For internal use by Voucherify. | [optional]
**startDate** | **string** | Start date defines when the earning rule starts to be active. Activation timestamp is presented in the ISO 8601 format. The earning rule is inactive before this date. If you do not define the start date for an earning rule, it will inherit the campaign start date by default. | [optional]
**expirationDate** | **string** | Expiration date defines when the earning rule expires. Expiration timestamp is presented in the ISO 8601 format. The earning rule is inactive after this date. If you do not define the expiration date for an earning rule, it will inherit the campaign expiration date by default. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the earning rule. A set of key/value pairs that you can attach to an earning rule object. It can be useful for storing additional information about the earning rule in a structured format. | [optional]
**updatedAt** | **\DateTime** | Timestamp representing the date and time when the earning rule was last updated in ISO 8601 format. | [optional]
**active** | **bool** | A flag to toggle the earning rule on or off. You can disable an earning rule even though it&#39;s within the active period defined by the start_date and expiration_date of the campaign or the earning rule&#39;s own start_date and expiration_date. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
