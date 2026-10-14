# # RewardCostResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique cost identifier, prefixed with &#x60;lrcst_&#x60;. | [optional]
**name** | **string** | Display name of the cost. Omitted when not set. &#x60;null&#x60; when cleared. | [optional]
**rules** | **object** | Rules group. Contains a &#x60;logic&#x60; formula string plus numbered rule definition properties (positive-integer keys). | [optional]
**spending** | [**\OpenAPI\Client\Model\LoyaltyV2ActivityRewardCostSpendingResponse[]**](LoyaltyV2ActivityRewardCostSpendingResponse.md) | Points spending definitions, or &#x60;null&#x60; when none are defined. | [optional]
**tierRules** | [**\OpenAPI\Client\Model\RewardCostTierRulesResponse**](RewardCostTierRulesResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
