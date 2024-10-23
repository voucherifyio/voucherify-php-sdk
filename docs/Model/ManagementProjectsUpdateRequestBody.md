# # ManagementProjectsUpdateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the project. | [optional]
**description** | **string** | A user-defined description of the project, e.g. its purpose, scope, region. | [optional]
**timezone** | **string** | The time zone in which the project is established. It can be in the GMT format or in accordance with IANA time zone database. | [optional]
**currency** | **string** | The currency used in the project. It is equal to a 3-letter ISO 4217 code. | [optional]
**dialCode** | **string** | The country dial code for the project. It is equal to an ITU country code. | [optional]
**webhookVersion** | **string** | The webhook version used in the project. | [optional] [default to 'v2024-01-01']
**clientTrustedDomains** | **string[]** | An array of URL addresses that allow client requests. | [optional]
**clientRedeemEnabled** | **bool** | Enables client-side redemption. | [optional]
**clientPublishEnabled** | **bool** | Enables client-side publication. | [optional]
**clientListVouchersEnabled** | **bool** | Enables client-side listing of vouchers. | [optional]
**clientCreateCustomerEnabled** | **bool** | Enables client-side creation of customers. | [optional]
**clientLoyaltyEventsEnabled** | **bool** | Enables client-side events for loyalty and referral programs. | [optional]
**clientSetVoucherExpirationDateEnabled** | **bool** | Enables client-side setting of voucher expiration date. | [optional]
**webhooksCalloutNotifications** | [**\OpenAPI\Client\Model\ManagementProjectsUpdateRequestBodyWebhooksCalloutNotifications**](ManagementProjectsUpdateRequestBodyWebhooksCalloutNotifications.md) |  | [optional]
**apiUsageNotifications** | [**\OpenAPI\Client\Model\ManagementProjectsUpdateRequestBodyApiUsageNotifications**](ManagementProjectsUpdateRequestBodyApiUsageNotifications.md) |  | [optional]
**defaultCodeConfig** | [**\OpenAPI\Client\Model\ManagementProjectsUpdateRequestBodyDefaultCodeConfig**](ManagementProjectsUpdateRequestBodyDefaultCodeConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
