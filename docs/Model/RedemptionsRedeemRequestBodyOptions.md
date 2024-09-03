# # RedemptionsRedeemRequestBodyOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expand** | **string[]** | Expand array lets you configure params included in the response. Depending on the strings included in the array, the response will contain different details.   | **Expand Option** | **Response Body** | |:---|:---| | [\&quot;order\&quot;] | - Same response as fallback response (without an options object).&lt;br&gt;- Order data with calculated discounts are listed in each child redeemable object.&lt;br&gt;- Metadata not included for each discount type. | | [\&quot;redeemable\&quot;] | Expands redeemable objects by including &#x60;metadata&#x60; for each discount type. | | [\&quot;order\&quot;, \&quot;redeemable\&quot;] | - Order data with calculated discounts are listed in each child redeemable object.&lt;br&gt;- Includes &#x60;metadata&#x60; for each discount type. | | [\&quot;redeemable\&quot;, \&quot;redemption\&quot;, \&quot;category\&quot;] | - Returns each discount type&#39;s &#x60;metadata&#x60; in each child redemption object.&lt;br&gt;- Returns redemption object &#x60;metadata&#x60;.&lt;br&gt;- Returns an expanded &#x60;categories&#x60; object, showing details about the category. | | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
