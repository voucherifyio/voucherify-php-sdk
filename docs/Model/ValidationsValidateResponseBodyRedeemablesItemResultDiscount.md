# # ValidationsValidateResponseBodyRedeemablesItemResultDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**amountOff** | **float** | Amount taken off the subtotal of a price. Value is multiplied by 100 to precisely represent 2 decimal places. For example, a $10 discount is written as 1000. | [optional]
**amountOffFormula** | **string** |  | [optional]
**aggregatedAmountLimit** | **int** | Maximum discount amount per order. | [optional]
**effect** | **string** |  | [optional]
**isDynamic** | **bool** | Flag indicating whether the discount was calculated using a formula. | [optional]
**unitOff** | **int** | Number of units to be granted a full value discount. | [optional]
**unitOffFormula** | **string** |  | [optional]
**unitType** | **string** | The product deemed as free, chosen from product inventory (e.g. time, items). | [optional]
**product** | [**\OpenAPI\Client\Model\ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct**](ValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\SimpleSkuDiscountUnit**](SimpleSkuDiscountUnit.md) |  | [optional]
**units** | [**\OpenAPI\Client\Model\DiscountUnitMultipleOneUnit[]**](DiscountUnitMultipleOneUnit.md) |  | [optional]
**percentOff** | **float** | The percent discount that the customer will receive. | [optional]
**percentOffFormula** | **string** |  | [optional]
**amountLimit** | **float** | Upper limit allowed to be applied as a discount. Value is multiplied by 100 to precisely represent 2 decimal places. For example, a $6 maximum discount is written as 600. | [optional]
**fixedAmount** | **float** | Sets a fixed value for an order total or the item price. The value is multiplied by 100 to precisely represent 2 decimal places. For example, a $10 discount is written as 1000. If the fixed amount is calculated by the formula, i.e. the &#x60;fixed_amount_formula&#x60; parameter is present in the fixed amount definition, this value becomes the **fallback value**. As a result, if the formula cannot be calculated due to missing metadata, for example, this value will be used as the fixed value. | [optional]
**fixedAmountFormula** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
