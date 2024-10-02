# # ManagementProject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the project. | [optional]
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
**apiUsageNotifications** | [**\OpenAPI\Client\Model\ManagementProjectApiUsageNotifications**](ManagementProjectApiUsageNotifications.md) |  | [optional]
**webhooksCalloutNotifications** | [**\OpenAPI\Client\Model\ManagementProjectWebhooksCalloutNotifications**](ManagementProjectWebhooksCalloutNotifications.md) |  | [optional]
**clusterId** | **string** | The identifier of the cluster where the project will be created. | [optional]
**caseSensitiveCodes** | **bool** | Determines if the vouchers in the project will be: - case sensitive - if &#x60;true&#x60;, &#x60;C0dE-cfV&#x60; is **not** equal to &#x60;c0de-cfv&#x60;), - case insensitive - if &#x60;false&#x60;, &#x60;C0dE-cfV&#x60; is equal to &#x60;c0de-cfv&#x60;. | [optional]
**apiVersion** | **string** | The API version used in the project. Currently, the default and only value is &#x60;v2018-08-01&#x60;. | [optional] [default to 'v2018-08-01']
**isSandbox** | **bool** | Determines if the project is a sandbox project. | [optional]
**webhookToken** | **string** | Webhook token used for authentication. | [optional]
**defaultCodeConfig** | [**\OpenAPI\Client\Model\ManagementProjectDefaultCodeConfig**](ManagementProjectDefaultCodeConfig.md) |  | [optional]
**limits** | [**\OpenAPI\Client\Model\ManagementProjectLimits**](ManagementProjectLimits.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
