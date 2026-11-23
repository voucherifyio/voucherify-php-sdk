# # RewardsUpdateRequestBodyParametersLoyaltyPoints

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **int** | Number of points to credit. Must be greater than &#x60;0&#x60;. | [optional]
**programId** | **string** | Unique &#x60;v2/loyalties&#x60; (loyalty hub) program ID, assigned by Voucherify. | [optional]
**cardDefinitionId** | **string** | Unique card definition ID of the &#x60;v2/loyalties&#x60; (loyalty hub) card that receives the points. | [optional]
**onMissingMember** | **string** | Action when the customer is not a member of the program. &#x60;ENROLL&#x60; enrolls the customer and credits the points. &#x60;REJECT&#x60; rejects the award and the customer is not enrolled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
