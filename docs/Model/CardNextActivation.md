# # CardNextActivation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **float** | Number of pending points to be activated. | [optional] [default to 0]
**type** | **string** | Pending points activation type from the card definition. | [optional]
**date** | **\DateTime** | Activation date (&#x60;YYYY-MM-DD&#x60;). Present for all types except &#x60;EVENT_BASED&#x60;. | [optional]
**cancelDate** | **\DateTime** | Date when the pending points are canceled if the activating event does not occur (&#x60;YYYY-MM-DD&#x60;). Present only for the &#x60;EVENT_BASED&#x60; type. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
