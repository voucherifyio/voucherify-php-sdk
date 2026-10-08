# # LoyaltiesProgramsMembersCreateResponseBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifies the member. | [optional]
**customerId** | **string** | Identifies the enrolled customer. | [optional]
**programId** | **string** | Identifies the loyalty program. | [optional]
**status** | **string** | Current member status. Allowed values: &#x60;ACTIVE&#x60;, &#x60;INACTIVE&#x60;, &#x60;DELETED&#x60;. &#x60;INACTIVE&#x60; members cannot earn points or redeem rewards. | [optional]
**metadata** | **object** | Stores custom member metadata. Empty object when none is set. | [optional]
**createdAt** | **\DateTime** | Records when the member was created (ISO 8601). | [optional]
**updatedAt** | **\DateTime** | Records the last update (ISO 8601). &#x60;null&#x60; if the member has never been updated. | [optional]
**object** | **string** | Object type. Always &#x60;member&#x60;. | [optional] [default to 'member']
**cards** | [**\OpenAPI\Client\Model\MemberCard[]**](MemberCard.md) | Member&#39;s loyalty cards - one per card definition assigned to the program. Card codes are generated asynchronously, so &#x60;card.code&#x60; may be &#x60;null&#x60; right after member creation. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
