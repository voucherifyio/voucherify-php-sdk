# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | The session unique ID assigned by Voucherify or your own unique session ID. Sending an existing ID will result in overwriting an existing session. If no session key is provided, then a new ID will be generated. | [optional]
**type** | **string** | This parameter is required to establish a new session. | [optional] [default to 'LOCK']
**ttl** | **float** | Value for the period of time that the session is active. Units for this parameter are defined by the session.ttl_unit parameter. | [optional]
**ttl_unit** | **string** | Defines the type of unit in which the session time is counted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
