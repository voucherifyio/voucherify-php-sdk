# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the user who has been assigned to the project. | [optional]
**login** | **string** | The login data of the user who has been assigned to the project. | [optional]
**email** | **string** | The email address of the user who has been assigned to the project. | [optional]
**firstName** | **string** | The first name of the user who has been assigned to the project. | [optional]
**lastName** | **string** | The last name of the user who has been assigned to the project. | [optional]
**projects** | **array<string,string>** | Lists key-value pairs, where the key is the project to which the user is assigned. The value is the role assigned in a given project. The predefined Voucherify roles are: &#x60;ADMIN&#x60;, &#x60;USER&#x60;, &#x60;VIEWER&#x60;, &#x60;MERCHANT&#x60;, &#x60;USER_RESTRICTED&#x60; (for the Areas and Stores, an Enterprise feature). | [optional]
**isOwner** | **bool** | Determines if the user is the owner for the organization in Voucherify. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
