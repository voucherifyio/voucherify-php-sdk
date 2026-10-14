# # CardTransactionDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reason** | **string** | Reason for the transaction (e.g. the reason provided in a manual adjustment request). | [optional]
**rejection** | [**\OpenAPI\Client\Model\CardTransactionDetailsRejection**](CardTransactionDetailsRejection.md) |  | [optional]
**metadata** | **object** | Transaction metadata (empty object when none). | [optional]
**points** | [**\OpenAPI\Client\Model\CardTransactionDetailsPoints**](CardTransactionDetailsPoints.md) |  | [optional]
**bucket** | [**\OpenAPI\Client\Model\LoyaltyV2CardPointsBucketSimple**](LoyaltyV2CardPointsBucketSimple.md) |  | [optional]
**buckets** | [**\OpenAPI\Client\Model\LoyaltyV2CardPointsBucketSimple[]**](LoyaltyV2CardPointsBucketSimple.md) | The points buckets that expired (&#x60;POINTS_EXPIRED&#x60; only). | [optional]
**date** | **\DateTime** | Expiration date (&#x60;POINTS_EXPIRED&#x60; only, &#x60;YYYY-MM-DD&#x60;). | [optional]
**reward** | [**\OpenAPI\Client\Model\CardTransactionDetailsReward**](CardTransactionDetailsReward.md) |  | [optional]
**rewardTransaction** | [**\OpenAPI\Client\Model\CardTransactionDetailsRewardTransaction**](CardTransactionDetailsRewardTransaction.md) |  | [optional]
**cardTransaction** | [**\OpenAPI\Client\Model\CardTransactionDetailsCardTransaction**](CardTransactionDetailsCardTransaction.md) |  | [optional]
**purchase** | [**\OpenAPI\Client\Model\CardTransactionDetailsPurchase**](CardTransactionDetailsPurchase.md) |  | [optional]
**order** | [**\OpenAPI\Client\Model\CardTransactionDetailsOrder**](CardTransactionDetailsOrder.md) |  | [optional]
**orderTransaction** | [**\OpenAPI\Client\Model\CardTransactionDetailsOrderTransaction**](CardTransactionDetailsOrderTransaction.md) |  | [optional]
**targetCard** | [**\OpenAPI\Client\Model\CardTransactionDetailsTargetCard**](CardTransactionDetailsTargetCard.md) |  | [optional]
**purchaseTransaction** | [**\OpenAPI\Client\Model\CardTransactionDetailsPurchaseTransaction**](CardTransactionDetailsPurchaseTransaction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
