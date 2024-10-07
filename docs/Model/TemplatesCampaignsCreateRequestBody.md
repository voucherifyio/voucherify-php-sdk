# # TemplatesCampaignsCreateRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignId** | **string** | Unique identifier of the campaign that will create a template. It must be an ID of an existing discount or gift card campaign. It cannot be passed when &#x60;promotion_tier_id&#x60; has value. Required when the &#x60;promotion_tier_id&#x60; is not passed or it is &#x60;null&#x60;. | [optional]
**promotionTierId** | **string** | Unique identifier of the promotion tier that will create a template. It cannot be passed when &#x60;campaign_id&#x60; has value. Required when the &#x60;campaign_id&#x60; is not passed or it is &#x60;null&#x60;. | [optional]
**name** | **string** | User-defined name of the campaign template. It must be unique. | [optional]
**description** | **string** | User-defined description of the campaign template. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
