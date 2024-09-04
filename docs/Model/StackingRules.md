# # StackingRules

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**redeemables_limit** | **int** | Defines how many redeemables can be sent in one stacking request (note: more redeemables means more processing time!). | [optional] [default to 30]
**applicable_redeemables_limit** | **int** | Defines how many of the sent redeemables will be applied to the order. For example, a user can select 30 discounts but only 5 will be applied to the order and the remaining will be labelled as SKIPPED. | [optional] [default to 5]
**applicable_redeemables_per_category_limit** | **int** | Defines how many redeemables per category can be applied in one request. | [optional] [default to 1]
**applicable_exclusive_redeemables_limit** | **int** | Defines how many redeemables with an exclusive category can be applied in one request. | [optional] [default to 1]
**applicable_exclusive_redeemables_per_category_limit** | **int** | Defines how many redeemables with an exclusive category per category in stacking rules can be applied in one request. | [optional] [default to 1]
**exclusive_categories** | **string[]** | Lists all exclusive categories. A redeemable from a campaign with an exclusive category is the only redeemable to be redeemed when applied with redeemables from other campaigns unless these campaigns are exclusive or joint. | [optional]
**joint_categories** | **string[]** | Lists all joint categories. A campaign with a joint category is always applied regardless of the exclusivity of other campaigns. | [optional]
**redeemables_application_mode** | **string** | Defines redeemables application mode. | [optional]
**redeemables_sorting_rule** | **string** | Defines redeemables sorting rule. | [optional] [default to 'REQUESTED_ORDER']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
