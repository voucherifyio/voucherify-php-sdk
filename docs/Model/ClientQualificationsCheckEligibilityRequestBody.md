# # ClientQualificationsCheckEligibilityRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**trackingId** | **string** | Is correspondent to Customer&#39;s source_id | [optional]
**scenario** | **string** | Defines the scenario Voucherify should consider during the qualification process.  - &#x60;ALL&#x60; - Scenario that returns all redeemables available for the customer in one API request. This scenario is used by default when no value is selected. - &#x60;CUSTOMER_WALLET&#x60; - returns vouchers applicable to the customer&#39;s cart based on the vouchers assigned to the customer&#39;s profile. - &#x60;AUDIENCE_ONLY&#x60; - returns all vouchers, promotion tiers, and campaigns available to the customer. Voucherify validates the rules based on the customer profile only. - &#x60;PRODUCTS&#x60; - returns all promotions available for the products (when a discount is defined to be applied to the item or when the item is required in the validation rule). - &#x60;PRODUCTS_DISCOUNT&#x60; - returns all promotions available for products when a discount is defined as applicable to specific item(s). - &#x60;PROMOTION_STACKS&#x60; - returns the applicable promotion stacks. - &#x60;PRODUCTS_BY_CUSTOMER&#x60; - returns all promotions available for a customer for the products (when a discount is defined to be applied to the item or when the item is required in the validation rule). - &#x60;PRODUCTS_DISCOUNT_BY_CUSTOMER&#x60; - returns all promotions available for a customer for products when a discount is defined as applicable to specific item(s). | [optional]
**options** | [**\OpenAPI\Client\Model\QualificationsOption**](QualificationsOption.md) |  | [optional]
**session** | [**\OpenAPI\Client\Model\ClientQualificationsCheckEligibilityRequestBodySession**](ClientQualificationsCheckEligibilityRequestBodySession.md) |  | [optional]
**metadata** | **object** | A set of key/value pairs that you can send in the request body to check against redeemables requiring **redemption** metadata validation rules to be satisfied. The validation runs against rules that are defined through the [Create Validation Rules](/api-reference/validation-rules/create-validation-rules) endpoint or with the [Validation Rule Builder](/personalize/create-validation-rules) in the the Dashboard. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
