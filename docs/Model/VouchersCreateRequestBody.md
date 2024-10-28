# # VouchersCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Code that identifies a voucher. The pattern can use all the letters of the English alphabet, Arabic numerals, and special characters. Pass this attribute in the request body to create a distinct code. Otherwise, either use the &#x60;code_config&#x60; object to set the rules that the Voucherify API will use to create a random code, or don&#39;t pass any code and Voucherify will generate a random code. | [optional]
**campaign** | **string** | Identifies the voucher&#39;s parent campaign using a unique campaign name. | [optional]
**campaignId** | **string** | Identifies the voucher&#39;s parent campaign using a unique campaign ID assigned by the Voucherify API. | [optional]
**category** | **string** | The name of the category that this voucher belongs to. Useful when listing vouchers with the [List Vouchers](ref:list-vouchers) endpoint. | [optional]
**categoryId** | **string** | Unique identifier assigned by Voucherify to the name of the category that this voucher belongs to. Useful when listing vouchers with the [List Vouchers](ref:list-vouchers) endpoint. | [optional]
**startDate** | **\DateTime** | Start date defines when the code starts to be active. Activation timestamp is presented in the ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Expiration date defines when the code expires. Expiration timestamp is presented in the ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**additionalInfo** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the code. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**validationRules** | **string[]** | Array containing the ID of the validation rule associated with the voucher. | [optional]
**redemption** | [**\OpenAPI\Client\Model\VouchersCreateRequestBodyRedemption**](VouchersCreateRequestBodyRedemption.md) |  | [optional]
**type** | **string** |  | [optional]
**loyaltyCard** | [**\OpenAPI\Client\Model\SimpleLoyaltyCard**](SimpleLoyaltyCard.md) |  | [optional]
**codeConfig** | [**\OpenAPI\Client\Model\CodeConfig**](CodeConfig.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
