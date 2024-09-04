# # ClientValidationsValidateResponseBodyRedeemablesItemResultDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**amount_off** | **float** | Amount taken off the subtotal of a price. Value is multiplied by 100 to precisely represent 2 decimal places. For example, a $10 discount is written as 1000. | [optional]
**amount_off_formula** | **string** |  | [optional]
**aggregated_amount_limit** | **int** | Maximum discount amount per order. | [optional]
**effect** | **string** |  | [optional]
**is_dynamic** | **bool** | Flag indicating whether the discount was calculated using a formula. | [optional]
**unit_off** | **int** | Number of units to be granted a full value discount. | [optional]
**unit_off_formula** | **string** |  | [optional]
**unit_type** | **string** | The product deemed as free, chosen from product inventory (e.g. time, items). | [optional]
**product** | [**\OpenAPI\Client\Model\ClientValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct**](ClientValidationsValidateResponseBodyRedeemablesItemResultDiscountProduct.md) |  | [optional]
**sku** | [**\OpenAPI\Client\Model\SimpleSkuDiscountUnit**](SimpleSkuDiscountUnit.md) |  | [optional]
**units** | [**\OpenAPI\Client\Model\DiscountUnitMultipleOneUnit[]**](DiscountUnitMultipleOneUnit.md) |  | [optional]
**percent_off** | **float** | The percent discount that the customer will receive. | [optional]
**percent_off_formula** | **string** |  | [optional]
**amount_limit** | **float** | Upper limit allowed to be applied as a discount. Value is multiplied by 100 to precisely represent 2 decimal places. For example, a $6 maximum discount is written as 600. | [optional]
**fixed_amount** | **float** | Sets a fixed value for an order total or the item price. The value is multiplied by 100 to precisely represent 2 decimal places. For example, a $10 discount is written as 1000. If the fixed amount is calculated by the formula, i.e. the &#x60;fixed_amount_formula&#x60; parameter is present in the fixed amount definition, this value becomes the **fallback value**. As a result, if the formula cannot be calculated due to missing metadata, for example, this value will be used as the fixed value. | [optional]
**fixed_amount_formula** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
