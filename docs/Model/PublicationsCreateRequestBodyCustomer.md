# # PublicationsCreateRequestBodyCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of an existing customer. | [optional]
**sourceId** | **string** | A unique identifier of the customer who validates a voucher. It can be a customer ID or email from a CRM system, database, or a third-party service. If you also pass a customer ID (unique ID assigned by Voucherify), the source ID will be ignored. | [optional]
**name** | **string** | Customer&#39;s first and last name. | [optional]
**description** | **string** | An arbitrary string that you can attach to a customer object. | [optional]
**email** | **string** | Customer&#39;s email address. | [optional]
**phone** | **string** | Customer&#39;s phone number. This parameter is mandatory when you try to send out codes to customers via an SMS channel. | [optional]
**birthday** | **\DateTime** | &#x60;Deprecated&#x60;. ~~Customer&#39;s birthdate; format YYYY-MM-DD~~. | [optional]
**birthdate** | **\DateTime** | Customer&#39;s birthdate; format YYYY-MM-DD. | [optional]
**address** | [**\OpenAPI\Client\Model\PublicationsCreateRequestBodyCustomerAddress**](PublicationsCreateRequestBodyCustomerAddress.md) |  | [optional]
**metadata** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
