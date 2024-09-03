# # PublicationsListResponseBodyPublicationsItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique publication ID, assigned by Voucherify. | [optional]
**object** | **string** | The type of the object represented by the JSON. This object stores information about the &#x60;publication&#x60;. | [optional] [default to 'publication']
**created_at** | **\DateTime** | Timestamp representing the date and time when the publication was created. The value is shown in the ISO 8601 format. | [optional]
**customer_id** | **string** | Unique customer ID of the customer receiving the publication. | [optional]
**tracking_id** | **string** | Customer&#39;s &#x60;source_id&#x60;. | [optional]
**metadata** | [**\OpenAPI\Client\Model\PublicationsListResponseBodyPublicationsItemMetadata**](PublicationsListResponseBodyPublicationsItemMetadata.md) |  | [optional]
**channel** | **string** | How the publication was originated. It can be your own custom channel or an example value provided here. | [optional]
**source_id** | **string** | The merchant&#39;s publication ID if it is different from the Voucherify publication ID. It&#39;s an optional tracking identifier of a publication. It is really useful in case of an integration between multiple systems. It can be a publication ID from a CRM system, database or 3rd-party service. | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerWithSummaryLoyaltyReferrals**](CustomerWithSummaryLoyaltyReferrals.md) |  | [optional]
**vouchers** | **string[]** | Contains the voucher IDs that was assigned by Voucherify. and Contains the unique voucher codes that was assigned by Voucherify. | [optional]
**vouchers_id** | **string[]** | Contains the unique internal voucher IDs that was assigned by Voucherify. | [optional]
**result** | **string** |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\ListPublicationsItemVoucher**](ListPublicationsItemVoucher.md) |  | [optional]
**failure_code** | **string** | Generic reason as to why the create publication operation failed. | [optional]
**failure_message** | **string** | This parameter will provide more expanded reason as to why the create publication operation failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
