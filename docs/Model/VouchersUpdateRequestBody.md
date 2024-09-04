# # VouchersUpdateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The name of the category that this voucher belongs to. Useful when listing vouchers with the [List Vouchers](ref:list-vouchers) endpoint. | [optional]
**category_id** | **string** | Unique identifier assigned by Voucherify to the name of the category that this voucher belongs to. Useful when listing vouchers with the [List Vouchers](ref:list-vouchers) endpoint. | [optional]
**start_date** | **\DateTime** | Start date defines when the code starts to be active. Activation timestamp is presented in the ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration date defines when the code expires. Expiration timestamp is presented in the ISO 8601 format.  Voucher is *inactive after* this date. | [optional]
**validity_timeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validity_day_of_week** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validity_hours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**active** | **bool** | A flag to toggle the voucher on or off. You can disable a voucher even though it&#39;s within the active period defined by the &#x60;start_date&#x60; and &#x60;expiration_date&#x60;.    - &#x60;true&#x60; indicates an *active* voucher - &#x60;false&#x60; indicates an *inactive* voucher | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**metadata** | **object** |  | [optional]
**type** | **string** |  | [optional]
**loyalty_card** | [**\OpenAPI\Client\Model\SimpleLoyaltyCard**](SimpleLoyaltyCard.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\Gift**](Gift.md) |  | [optional]
**discount** | [**\OpenAPI\Client\Model\Discount**](Discount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
