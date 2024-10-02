# # ManagementProjectsUsersInviteCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email address to which the invitation will be sent. Must be a valid email address. | [optional]
**firstName** | **string** | First name of the person who will receive the invitation. The name will be used in the user profile. | [optional]
**lastName** | **string** | Last name of the person who will receive the invitation. The name will be used in the user profile. | [optional]
**projects** | **array<string,string>** | In the key, provide the project ID to which the new user will be assigned. In the value, provide the role which the user will have in the project. The predefined Voucherify roles are: &#x60;ADMIN&#x60;, &#x60;USER&#x60;, &#x60;VIEWER&#x60;, &#x60;MERCHANT&#x60;, &#x60;USER_RESTRICTED&#x60; (for the Areas and Stores, an Enterprise feature). Send a custom role ID (Enterprise feature) to assign a custom role. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
