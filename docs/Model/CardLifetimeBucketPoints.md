# # CardLifetimeBucketPoints

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **float** | Total accumulated points, including points added manually, earned by fulfilling earning rules and activated from pending points (excluding returned points). | [optional] [default to 0]
**earned** | **float** | Total points earned by fulfilling earning rules (does not include activated pending points or points added manually). | [optional] [default to 0]
**added** | **float** | Total manually added points. | [optional] [default to 0]
**purchased** | **float** | Total points purchased via a &#x60;LOYALTY_CARD_POINTS&#x60; reward (credited to the target card). | [optional] [default to 0]
**purchasedReversed** | **float** | Total purchased points reversed via reward refund. | [optional] [default to 0]
**subtracted** | **float** | Total manually subtracted points. | [optional] [default to 0]
**expired** | **float** | Total expired points. | [optional] [default to 0]
**spent** | **float** | Total points spent on rewards. | [optional] [default to 0]
**refunded** | **float** | Total refunded points (points that were earned by products which were later returned). | [optional] [default to 0]
**returned** | **float** | Total returned points (by returning a purchased reward). | [optional] [default to 0]
**locked** | **float** | Total locked points (by locking a purchased reward). | [optional] [default to 0]
**unlocked** | **float** | Total unlocked points (by unlocking a purchased reward). | [optional] [default to 0]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
