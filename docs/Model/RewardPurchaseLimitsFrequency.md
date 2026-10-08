# # RewardPurchaseLimitsFrequency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Frequency limit type. &#x60;NO_LIMIT&#x60; - unlimited purchases. &#x60;LIMITED&#x60; - limited by the &#x60;limits&#x60; array. | [optional]
**limits** | [**\OpenAPI\Client\Model\RewardPurchaseLimitsFrequencyLimit[]**](RewardPurchaseLimitsFrequencyLimit.md) | Frequency limit definitions. Empty array when &#x60;type&#x60; is &#x60;NO_LIMIT&#x60;; one entry when &#x60;type&#x60; is &#x60;LIMITED&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
