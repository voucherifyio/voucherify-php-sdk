# # CampaignsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Campaign name. | [optional]
**description** | **string** | An optional field to keep any extra textual information about the campaign such as a campaign description and details. | [optional]
**type** | **string** | Defines whether the campaign can be updated with new vouchers after campaign creation or if the campaign consists of standalone vouchers.  - &#x60;AUTO_UPDATE&#x60;: the campaign is dynamic, i.e. vouchers will generate based on set criteria -  &#x60;STATIC&#x60;: vouchers need to be manually published | [optional]
**joinOnce** | **bool** | If this value is set to &#x60;true&#x60;, customers will be able to join the campaign only once. | [optional]
**autoJoin** | **bool** | Indicates whether customers will be able to auto-join a loyalty campaign if any earning rule is fulfilled. | [optional]
**useVoucherMetadataSchema** | **bool** | Flag indicating whether the campaign is to use the voucher&#39;s metadata schema instead of the campaign metadata schema. | [optional]
**vouchersCount** | **int** | Total number of unique vouchers in campaign (size of campaign). | [optional]
**startDate** | **\DateTime** | Activation timestamp defines when the campaign starts to be active in ISO 8601 format. Campaign is *inactive before* this date. | [optional]
**expirationDate** | **\DateTime** | Expiration timestamp defines when the campaign expires in ISO 8601 format.  Campaign is *inactive after* this date. | [optional]
**validityTimeframe** | [**\OpenAPI\Client\Model\ValidityTimeframe**](ValidityTimeframe.md) |  | [optional]
**validityDayOfWeek** | **int[]** | Integer array corresponding to the particular days of the week in which the voucher is valid.  - &#x60;0&#x60; Sunday - &#x60;1&#x60; Monday - &#x60;2&#x60; Tuesday - &#x60;3&#x60; Wednesday - &#x60;4&#x60; Thursday - &#x60;5&#x60; Friday - &#x60;6&#x60; Saturday | [optional]
**validityHours** | [**\OpenAPI\Client\Model\ValidityHours**](ValidityHours.md) |  | [optional]
**activityDurationAfterPublishing** | **string** | Defines the amount of time the vouchers will be active after publishing. The value is shown in the ISO 8601 format. For example, a voucher with the value of P24D will be valid for a duration of 24 days. | [optional]
**categoryId** | **string** | Unique category ID that this campaign belongs to. Either pass this parameter OR the &#x60;category&#x60;. | [optional]
**category** | **string** | The category assigned to the campaign. Either pass this parameter OR the &#x60;category_id&#x60;. | [optional]
**metadata** | **object** | The metadata object stores all custom attributes assigned to the campaign. A set of key/value pairs that you can attach to a campaign object. It can be useful for storing additional information about the campaign in a structured format. | [optional]
**accessSettings** | [**\OpenAPI\Client\Model\AccessSettings**](AccessSettings.md) |  | [optional]
**validationRules** | **string[]** | Array containing the ID of the validation rule associated with the promotion tier. | [optional]
**campaignType** | **string** |  | [optional]
**voucher** | [**\OpenAPI\Client\Model\CampaignsCreateRequestBodyVoucher**](CampaignsCreateRequestBodyVoucher.md) |  | [optional]
**referralProgram** | [**\OpenAPI\Client\Model\ReferralProgram**](ReferralProgram.md) |  | [optional]
**promotion** | [**\OpenAPI\Client\Model\CampaignsCreateRequestBodyPromotion**](CampaignsCreateRequestBodyPromotion.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
