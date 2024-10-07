# # ManagementProjectsCreateRequestBodyUsersItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the user who will be assigned to the project. It can be found in Team Settings &gt; Team &gt; Edit member. **Required** with the &#x60;role&#x60; string.  Do **not** use with the &#x60;login&#x60; string. | [optional]
**login** | **string** | The login data of the user who will be assigned to the project. **Required** with the &#x60;role&#x60; string.  Do **not** use with the &#x60;id&#x60; string. | [optional]
**role** | **string** | The role of the user to be added. It can be one of the following predefined roles: &#x60;ADMIN&#x60;, &#x60;USER&#x60;, &#x60;VIEWER&#x60;, &#x60;MERCHANT&#x60; or an ID of a custom role. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
