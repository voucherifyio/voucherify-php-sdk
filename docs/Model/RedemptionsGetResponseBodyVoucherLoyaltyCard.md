# # RedemptionsGetResponseBodyVoucherLoyaltyCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **int** | Total number of points added to the loyalty card over its lifespan. | [optional]
**balance** | **int** | Points available for reward redemption. This is calculated as follows: &#x60;balance&#x60; &#x3D; &#x60;points&#x60; - &#x60;expired_points&#x60; - &#x60;subtracted_points&#x60; - &#x60;redemption.redeemed_points&#x60;. | [optional]
**nextExpirationDate** | **\DateTime** | The next closest date when the next set of points are due to expire. | [optional]
**nextExpirationPoints** | **int** | The amount of points that are set to expire next. | [optional]
**pendingPoints** | **int** | Shows the number of pending points that will be added to the loyalty card when they are activated automatically or manually. | [optional]
**expiredPoints** | **int** | Shows the total number of expired points over the lifetime of the loyalty card. | [optional]
**subtractedPoints** | **int** | Shows the total number of subtracted points over the lifetime of the loyalty card. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
