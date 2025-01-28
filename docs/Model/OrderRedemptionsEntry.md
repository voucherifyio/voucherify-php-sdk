# # OrderRedemptionsEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | **\DateTime** | Timestamp representing the date and time when the redemption was created. The value is shown in the ISO 8601 format. | [optional]
**rollbackId** | **string** | Unique ID of the redemption rollback. | [optional]
**rollbackDate** | **\DateTime** | Timestamp representing the date and time when the redemption rollback was created. The value is shown in the ISO 8601 format. | [optional]
**relatedObjectType** | **string** | The source of the incentive. | [optional] [default to 'redemption']
**relatedObjectId** | **string** | Unique ID of the parent redemption. | [optional]
**relatedObjectParentId** | **string** | Represent&#39;s the campaign ID of the voucher if the redemption was based on a voucher that was part of bulk codes generated within a campaign. In case of a promotion tier, this represents the campaign ID of the promotion tier&#39;s parent campaign. | [optional]
**stacked** | **string[]** | Contains a list of unique IDs of child redemptions, which belong to the stacked incentives. | [optional]
**rollbackStacked** | **string[]** | Lists the rollback redemption IDs of the particular child redemptions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
