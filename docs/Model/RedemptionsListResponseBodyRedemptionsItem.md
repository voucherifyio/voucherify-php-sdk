# # RedemptionsListResponseBodyRedemptionsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**object** | **string** |  | [optional]
**date** | **\DateTime** | Timestamp representing the date and time when the object was created. The value is shown in the ISO 8601 format. | [optional]
**customerId** | **string** | Unique customer ID of the redeeming customer. | [optional]
**trackingId** | **string** | Hashed customer source ID. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the redemption. | [optional]
**amount** | **int** | For gift cards, this is a positive integer in the smallest currency unit (e.g. 100 cents for $1.00) representing the number of redeemed credits. For loyalty cards, this is the number of loyalty points used in the transaction. and For gift cards, this represents the number of the credits restored to the card in the rolledback redemption. The number is a negative integer in the smallest currency unit, e.g. -100 cents for $1.00 added back to the card. For loyalty cards, this represents the number of loyalty points restored to the card in the rolledback redemption. The number is a negative integer. | [optional]
**redemption** | **string** | Unique redemption ID of the parent redemption. | [optional]
**result** | **string** | Redemption result. | [optional]
**status** | **string** |  | [optional]
**relatedRedemptions** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions**](RedemptionsListResponseBodyRedemptionsItemRelatedRedemptions.md) |  | [optional]
**failureCode** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a generic reason as to why the redemption failed. | [optional]
**failureMessage** | **string** | If the result is &#x60;FAILURE&#x60;, this parameter will provide a more expanded reason as to why the redemption failed. | [optional]
**order** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemOrder**](RedemptionsListResponseBodyRedemptionsItemOrder.md) |  | [optional]
**channel** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemChannel**](RedemptionsListResponseBodyRedemptionsItemChannel.md) |  | [optional]
**customer** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemCustomer**](RedemptionsListResponseBodyRedemptionsItemCustomer.md) |  | [optional]
**relatedObjectType** | **string** | Defines the related object. | [optional]
**relatedObjectId** | **string** |  | [optional]
**promotionTier** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemPromotionTier**](RedemptionsListResponseBodyRedemptionsItemPromotionTier.md) |  | [optional]
**reward** | [**\OpenAPI\Client\Model\RedemptionRewardResult**](RedemptionRewardResult.md) |  | [optional]
**gift** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemGift**](RedemptionsListResponseBodyRedemptionsItemGift.md) |  | [optional]
**loyaltyCard** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemLoyaltyCard**](RedemptionsListResponseBodyRedemptionsItemLoyaltyCard.md) |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\RedemptionsListResponseBodyRedemptionsItemVoucher**](RedemptionsListResponseBodyRedemptionsItemVoucher.md) |  | [optional]
**reason** | **string** | System generated cause for the redemption being invalid in the context of the provided parameters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
