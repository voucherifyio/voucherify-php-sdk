# # PromotionStack

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Promotion stack name. | [optional]
**tiers** | [**\OpenAPI\Client\Model\PromotionStackTiers**](PromotionStackTiers.md) |  | [optional]
**id** | **string** | Unique promotion stack ID. | [optional]
**created_at** | **\DateTime** | Timestamp representing the date and time when the promotion stack was created. The value is shown in the ISO 8601 format. | [optional]
**updated_at** | **\DateTime** | Timestamp representing the date and time when the promotion stack was updated. The value is shown in the ISO 8601 format. | [optional]
**campaign_id** | **string** | Promotion stack&#39;s parent campaign&#39;s unique ID. | [optional]
**object** | **string** | The type of the object represented by JSON. | [optional] [default to 'promotion_stack']
**category_id** | **string** | Promotion stack category ID. | [optional]
**categories** | [**\OpenAPI\Client\Model\Category[]**](Category.md) | Details about the category assigned to the promotion stack. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
