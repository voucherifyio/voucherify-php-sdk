# # LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsAmount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**every** | **int** | Value is multiplied by 100 to precisely represent 2 decimal places. For example, a $10 order amount is written as 1000. | [optional]
**points** | **int** | Number of points to be awarded, i.e. how many points to be added to the loyalty card. | [optional]
**pointsFormula** | **string** | Formula used to dynamically calculate the rewarded points. | [optional]
**object** | **string** | Type of object which will be covered by the earning rule. This is required together with &#x60;id&#x60;. Can be replaced by the &#x60;applicable_to&#x60; array. In response, the value of the first object is returned even if &#x60;applicable_to&#x60; array was used. | [optional]
**id** | **string** | Unique ID of the resource assigned by Voucherify. This is required together with &#x60;object&#x60;. Can be replaced by the &#x60;applicable_to&#x60; array. In response, the value of the first object is returned even if &#x60;applicable_to&#x60; array was used. Values are, for example, &#x60;pc_75U0dHlr7u75BJodrW1AE3t6&#x60; for product collection, &#x60;prod_0bae32322150fd0546&#x60; for a product, or &#x60;sku_0b7d7dfb090be5c619&#x60; for a SKU. | [optional]
**applicableTo** | [**\OpenAPI\Client\Model\LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsAmountApplicableToItem[]**](LoyaltiesEarningRulesEnableResponseBodyLoyaltyOrderItemsAmountApplicableToItem.md) | Defines products, SKUs, or product collections covered by the earning rule. Can be replaced by &#x60;object&#x60; and &#x60;id&#x60; to define only one object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
