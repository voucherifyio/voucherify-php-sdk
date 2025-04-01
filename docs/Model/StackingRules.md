# # StackingRules

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeemablesLimit** | **int** | Defines how many redeemables can be sent in one stacking request (note: more redeemables means more processing time!). | [optional] [default to 30]
**applicableRedeemablesLimit** | **int** | Defines how many of the sent redeemables will be applied to the order. For example, a user can select 30 discounts but only 5 will be applied to the order and the remaining will be labelled as SKIPPED. | [optional] [default to 5]
**applicableRedeemablesPerCategoryLimit** | **int** | Defines how many redeemables per category can be applied in one request. | [optional] [default to 1]
**applicableExclusiveRedeemablesLimit** | **int** | Defines how many redeemables with an exclusive category can be applied in one request. | [optional] [default to 1]
**applicableExclusiveRedeemablesPerCategoryLimit** | **int** | Defines how many redeemables with an exclusive category per category in stacking rules can be applied in one request. | [optional] [default to 1]
**exclusiveCategories** | **string[]** | Lists all exclusive categories. A redeemable from a campaign with an exclusive category is the only redeemable to be redeemed when applied with redeemables from other campaigns unless these campaigns are exclusive or joint. | [optional]
**jointCategories** | **string[]** | Lists all joint categories. A campaign with a joint category is always applied regardless of the exclusivity of other campaigns. | [optional]
**redeemablesApplicationMode** | **string** | Defines redeemables application mode. | [optional]
**redeemablesSortingRule** | **string** | Defines redeemables sorting rule. | [optional] [default to 'REQUESTED_ORDER']
**redeemablesProductsApplicationMode** | **string** | Defines redeemables products application mode. | [optional]
**redeemablesNoEffectRule** | **string** | Defines redeemables no effect rule. | [optional]
**redeemablesRollbackOrderMode** | **string** | Defines the rollback mode for the order. &#x60;WITH_ORDER&#x60; is a default setting. The redemption is rolled back together with the data about the order, including related discount values. &#x60;WITHOUT_ORDER&#x60; allows rolling the redemption back without affecting order data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
