# # ManagementProjectsUsersListResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | **string** | The type of the object represented by JSON. This object stores information about the users in a dictionary. | [optional] [default to 'list']
**dataRef** | **string** | Identifies the name of the attribute that contains the array of user objects. | [optional] [default to 'data']
**data** | [**\OpenAPI\Client\Model\User[]**](User.md) | Array of user objects. | [optional]
**total** | **int** | The total number of users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
