# # CustomersUpdateInBulkRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | Unique customer source ID. | [optional]
**name** | **string** | Customer&#39;s first and last name. | [optional]
**description** | **string** | An arbitrary string that you can attach to a customer object. | [optional]
**email** | **string** | Customer&#39;s email address. | [optional]
**phone** | **string** | Customer&#39;s phone number. This parameter is mandatory when you try to send out codes to customers via an SMS channel. | [optional]
**birthday** | **\DateTime** | &#x60;Deprecated&#x60;. ~~Customer&#39;s birthdate; format YYYY-MM-DD~~. | [optional]
**birthdate** | **\DateTime** | Customer&#39;s birthdate; format YYYY-MM-DD. | [optional]
**address** | [**\OpenAPI\Client\Model\CustomersUpdateInBulkRequestBodyAddress**](CustomersUpdateInBulkRequestBodyAddress.md) |  | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a customer. The metadata object stores all custom attributes assigned to the customer. It can be useful for storing additional information about the customer in a structured format. This metadata can be used for validating whether the customer qualifies for a discount or it can be used in building customer segments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
