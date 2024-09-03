# # CampaignsVouchersCreateInBulkRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique voucher code. | [optional]
**code_config** | [**\OpenAPI\Client\Model\CodeConfig**](CodeConfig.md) |  | [optional]
**category** | **string** | The category assigned to the campaign. Either pass this parameter OR the &#x60;category_id&#x60;. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the voucher. A set of key/value pairs that you can attach to a voucher object. It can be useful for storing additional information about the voucher in a structured format. | [optional]
**redemption** | [**\OpenAPI\Client\Model\CampaignsVouchersCreateInBulkRequestBodyRedemption**](CampaignsVouchersCreateInBulkRequestBodyRedemption.md) |  | [optional]
**additional_info** | **string** | An optional field to keep any extra textual information about the code such as a code description and details. | [optional]
**start_date** | **\DateTime** | Activation timestamp defines when the voucher starts to be active in ISO 8601 format. Voucher is *inactive before* this date. | [optional]
**expiration_date** | **\DateTime** | Expiration timestamp defines when the voucher expires in ISO 8601 format.  Voucher is *inactive after* this date. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
