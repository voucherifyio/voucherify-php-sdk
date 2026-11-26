# # CustomerLoyalty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**points** | **int** | Customer&#39;s loyalty points minus expired points for all loyalty cards (**legacy loyalty**) which the customer has. | [optional]
**referredCustomers** | **int** | Total number of customers referred by the customer. | [optional]
**campaigns** | [**array<string,\OpenAPI\Client\Model\CustomerLoyaltyCampaignsEntry>**](CustomerLoyaltyCampaignsEntry.md) | Contains **legacy loyalty** and referral campaigns with details about point balances and how many customers were referred by the customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
