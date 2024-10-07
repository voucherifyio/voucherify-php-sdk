# # PublicationsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**voucher** | **string** | Code of the voucher being published. | [optional]
**sourceId** | **string** | The merchant&#39;s publication ID if it is different from the Voucherify publication ID. It&#39;s an optional tracking identifier of a publication. It is really useful in case of an integration between multiple systems. It can be a publication ID from a CRM system, database or 3rd-party service. If &#x60;source_id&#x60; is provided only 1 voucher can be published per request. | [optional]
**customer** | [**\OpenAPI\Client\Model\Customer**](Customer.md) |  | [optional]
**metadata** | **object** |  | [optional]
**channel** | **string** | Specify the distribution channel. | [optional]
**campaign** | [**\OpenAPI\Client\Model\CreatePublicationCampaign**](CreatePublicationCampaign.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
