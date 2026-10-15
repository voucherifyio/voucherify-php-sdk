# # ProgramRewardAssignment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rewardId** | **string** | Unique reward identifier. | [optional]
**stock** | [**\OpenAPI\Client\Model\ProgramRewardAssignmentStock**](ProgramRewardAssignmentStock.md) |  |
**redeemed** | **float** | Number of times the reward has been redeemed within the program. Defaults to 0. | [optional]
**createdAt** | **\DateTime** | Assignment creation timestamp (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Last update timestamp (ISO 8601), or &#x60;null&#x60; when never updated. | [optional]
**object** | **string** | Object type marker. Always &#x60;program_reward&#x60;. | [optional] [default to 'program_reward']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
