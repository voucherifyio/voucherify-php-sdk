# # CustomersCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of an existing customer that will be linked to redemption in this request. | [optional]
**source_id** | **string** | A unique identifier of the customer who validates a voucher. It can be a customer ID or email from a CRM system, database, or a third-party service. If you also pass a customer ID (unique ID assigned by Voucherify), the source ID will be ignored. | [optional]
**summary** | [**\OpenAPI\Client\Model\CustomerSummary**](CustomerSummary.md) |  | [optional]
**loyalty** | [**\OpenAPI\Client\Model\CustomerLoyalty**](CustomerLoyalty.md) |  | [optional]
**referrals** | [**\OpenAPI\Client\Model\CustomerReferrals**](CustomerReferrals.md) |  | [optional]
**system_metadata** | **object** | Object used to store system metadata information. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the customer was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the customer was updated. The value is shown in the ISO 8601 format. | [optional]
**assets** | [**\OpenAPI\Client\Model\CustomersCreateResponseBodyAssets**](CustomersCreateResponseBodyAssets.md) |  | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'customer']
**name** | **string** | Customer&#39;s first and last name. | [optional]
**description** | **string** | An arbitrary string that you can attach to a customer object. | [optional]
**email** | **string** | Customer&#39;s email address. | [optional]
**phone** | **string** | Customer&#39;s phone number. This parameter is mandatory when you try to send out codes to customers via an SMS channel. | [optional]
**birthday** | **\DateTime** | &#x60;Deprecated&#x60;. ~~Customer&#39;s birthdate; format YYYY-MM-DD~~. | [optional]
**birthdate** | **\DateTime** | Customer&#39;s birthdate; format YYYY-MM-DD. | [optional]
**address** | [**\OpenAPI\Client\Model\CustomersCreateResponseBodyAddress**](CustomersCreateResponseBodyAddress.md) |  | [optional]
**metadata** | **object** | A set of custom key/value pairs that you can attach to a customer. The metadata object stores all custom attributes assigned to the customer. It can be useful for storing additional information about the customer in a structured format. This metadata can be used for validating whether the customer qualifies for a discount or it can be used in building customer segments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
