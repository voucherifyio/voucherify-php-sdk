# # RedemptionRedeem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique redemption ID. | [optional]
**object** | **string** | The type of the object represented by the JSON | [optional] [default to 'redemption']
**date** | **\DateTime** | Timestamp representing the date and time when the object was created. The value is shown in the ISO 8601 format. | [optional]
**customerId** | **string** | Unique customer ID of the redeeming customer. | [optional]
**trackingId** | **string** | Hashed customer source ID. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the redemption. | [optional]
**amount** | **int** | For gift cards, this is a positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the number of redeemed credits. For loyalty cards, this is the number of loyalty points used in the transaction. | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. | [optional]
**result** | **string** | Redemption result. | [optional]
**status** | **string** | Redemption status. | [optional]
**relatedRedemptions** | [**\OpenAPI\Client\Model\RedemptionRedeemRelatedRedemptions**](RedemptionRedeemRelatedRedemptions.md) |  | [optional]
**failureCode** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failureMessage** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\OrderCalculated**](OrderCalculated.md) |  | [optional]
**channel** | [**\OpenAPI\Client\Model\RedemptionRedeemChannel**](RedemptionRedeemChannel.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\SimpleCustomer**](SimpleCustomer.md) |  | [optional]
**relatedObjectType** | **string** | Defines the related object. | [optional]
**relatedObjectId** | **string** | Unique related object ID assigned by Voucherify, i.e. v_lfZi4rcEGe0sN9gmnj40bzwK2FH6QUno for a voucher. | [optional]
**promotionTier** | [**\OpenAPI\Client\Model\PromotionTier**](PromotionTier.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\RedemptionRewardResult**](RedemptionRewardResult.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\RedemptionRedeemGift**](RedemptionRedeemGift.md) |  | [optional]
**loyaltyCard** | [**\OpenAPI\Client\Model\RedemptionRedeemLoyaltyCard**](RedemptionRedeemLoyaltyCard.md) |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\RedemptionRedeemVoucher**](RedemptionRedeemVoucher.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
