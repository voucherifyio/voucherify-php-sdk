# # TierTransactionDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **float** | Qualifying points at the time of evaluation. Returns the point balance or the points earned in the tracking period, depending on the tier structure. &#x60;null&#x60; when points were not calculated. | [optional]
**tierFrom** | **string** | Unique identifier of the tier the member moved from (format &#x60;lt_...&#x60;). &#x60;null&#x60; when there is no source tier, including &#x60;JOINED&#x60;, &#x60;EXPIRATION_CHANGED&#x60;, and &#x60;EVALUATION_REFRESHED&#x60; transactions. | [optional]
**tierTo** | **string** | Unique identifier of the tier the member moved to (format &#x60;lt_...&#x60;). &#x60;null&#x60; when there is no destination tier, including &#x60;LEFT&#x60;, &#x60;EXPIRATION_CHANGED&#x60;, and &#x60;EVALUATION_REFRESHED&#x60; transactions. | [optional]
**origin** | [**\OpenAPI\Client\Model\TierTransactionOrigin**](TierTransactionOrigin.md) |  | [optional]
**rejection** | [**\OpenAPI\Client\Model\TierTransactionRejection**](TierTransactionRejection.md) |  | [optional]
**startAt** | **\DateTime** | Start of the tier membership period, or &#x60;null&#x60;. | [optional]
**expiresAt** | **\DateTime** | Expiration of the tier membership period, or &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
