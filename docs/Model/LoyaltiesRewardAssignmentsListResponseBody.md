# # LoyaltiesRewardAssignmentsListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about loyalty reward assignments in a dictionary. | [optional] [default to 'list']
**data_ref** | **string** | Identifies the name of the attribute that contains the array of reward assignment objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\RewardAssignment[]**](RewardAssignment.md) | Contains array of reward assignment objects. | [optional]
**total** | **int** | Total number of reward assignment objects. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
