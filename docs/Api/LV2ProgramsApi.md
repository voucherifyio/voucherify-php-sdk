# OpenAPI\Client\LV2ProgramsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateCardPendingPointsBucket()**](LV2ProgramsApi.md#activateCardPendingPointsBucket) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/pending-points/{bucketId}/activate | Activate pending point bucket |
| [**activateProgramMember()**](LV2ProgramsApi.md#activateProgramMember) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/activate | Activate program member |
| [**adjustCardPoints()**](LV2ProgramsApi.md#adjustCardPoints) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/points | Adjust card points |
| [**batchCreateProgramMembers()**](LV2ProgramsApi.md#batchCreateProgramMembers) | **POST** /v2/loyalties/programs/{programId}/members/batch | Batch create program members |
| [**cancelCardPendingPointsBucket()**](LV2ProgramsApi.md#cancelCardPendingPointsBucket) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/pending-points/{bucketId}/cancel | Cancel pending point bucket |
| [**createMemberOrderPayment()**](LV2ProgramsApi.md#createMemberOrderPayment) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/orders/payments | Pay for order with points |
| [**createProgramMember()**](LV2ProgramsApi.md#createProgramMember) | **POST** /v2/loyalties/programs/{programId}/members | Create program member |
| [**deactivateProgramMember()**](LV2ProgramsApi.md#deactivateProgramMember) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/deactivate | Deactivate program member |
| [**deleteProgramMember()**](LV2ProgramsApi.md#deleteProgramMember) | **DELETE** /v2/loyalties/programs/{programId}/members/{memberId} | Delete program member |
| [**expireCardPointsBucket()**](LV2ProgramsApi.md#expireCardPointsBucket) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/expiring-points/{bucketId}/expire | Expire point bucket |
| [**getMemberEarningRuleDailyReport()**](LV2ProgramsApi.md#getMemberEarningRuleDailyReport) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/earning-rules/{earningRuleId}/reports/daily | List member earning-rule daily reports |
| [**getProgramMember()**](LV2ProgramsApi.md#getProgramMember) | **GET** /v2/loyalties/programs/{programId}/members/{memberId} | Get program member |
| [**getProgramMembership()**](LV2ProgramsApi.md#getProgramMembership) | **GET** /v2/loyalties/programs/{programId}/memberships/{customerId} | Get program membership |
| [**getProgramPointsEarningsDailyReport()**](LV2ProgramsApi.md#getProgramPointsEarningsDailyReport) | **GET** /v2/loyalties/programs/{programId}/reports/points-earnings/daily | List program points-earnings daily reports |
| [**getProgramPointsEarningsSummaryReport()**](LV2ProgramsApi.md#getProgramPointsEarningsSummaryReport) | **GET** /v2/loyalties/programs/{programId}/reports/points-earnings/summary | List program points-earnings summary reports |
| [**listCardActivities()**](LV2ProgramsApi.md#listCardActivities) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/activities | List card activities |
| [**listCardExpiringPoints()**](LV2ProgramsApi.md#listCardExpiringPoints) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/expiring-points | List card expiring points buckets |
| [**listCardPendingPoints()**](LV2ProgramsApi.md#listCardPendingPoints) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/pending-points | List card pending point buckets |
| [**listCardTransactions()**](LV2ProgramsApi.md#listCardTransactions) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/transactions | List card transactions |
| [**listMemberBenefitTransactions()**](LV2ProgramsApi.md#listMemberBenefitTransactions) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/benefits/transactions | List member benefit transactions |
| [**listMemberCardDailyReports()**](LV2ProgramsApi.md#listMemberCardDailyReports) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/reports/daily | List card daily points reports |
| [**listMemberOrderPayments()**](LV2ProgramsApi.md#listMemberOrderPayments) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/orders/payments | List member order payments |
| [**listMemberRewardPurchases()**](LV2ProgramsApi.md#listMemberRewardPurchases) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/rewards/purchases | List member reward purchases |
| [**listMemberTierTransactions()**](LV2ProgramsApi.md#listMemberTierTransactions) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/tiers/transactions | List member tier transactions |
| [**listProgramEarningRuleAssignments()**](LV2ProgramsApi.md#listProgramEarningRuleAssignments) | **GET** /v2/loyalties/programs/{programId}/earning-rules | List program earning rule assignments |
| [**listProgramEarningRulesDailyReports()**](LV2ProgramsApi.md#listProgramEarningRulesDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/earning-rules/daily | List program earning-rules daily reports |
| [**listProgramEarningRulesSummaryReports()**](LV2ProgramsApi.md#listProgramEarningRulesSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/earning-rules/summary | List program earning-rules summary reports |
| [**listProgramMemberActivities()**](LV2ProgramsApi.md#listProgramMemberActivities) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/activities | List program member activities |
| [**listProgramMembers()**](LV2ProgramsApi.md#listProgramMembers) | **GET** /v2/loyalties/programs/{programId}/members | List program members |
| [**listProgramMembersDailyReports()**](LV2ProgramsApi.md#listProgramMembersDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/members/daily | List program members daily reports |
| [**listProgramMembersSummaryReports()**](LV2ProgramsApi.md#listProgramMembersSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/members/summary | List program members summary reports |
| [**listProgramRewardAssignments()**](LV2ProgramsApi.md#listProgramRewardAssignments) | **GET** /v2/loyalties/programs/{programId}/rewards | List program reward assignments |
| [**listProgramRewardsDailyReports()**](LV2ProgramsApi.md#listProgramRewardsDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/rewards/daily | List program rewards daily reports |
| [**listProgramRewardsSpendingsDailyReports()**](LV2ProgramsApi.md#listProgramRewardsSpendingsDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/rewards/spendings/daily | List program rewards spendings daily reports |
| [**listProgramRewardsSpendingsSummaryReports()**](LV2ProgramsApi.md#listProgramRewardsSpendingsSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/rewards/spendings/summary | List program rewards spendings summary reports |
| [**listProgramRewardsSummaryReports()**](LV2ProgramsApi.md#listProgramRewardsSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/rewards/summary | List program rewards summary reports |
| [**listProgramSpendingDailyReports()**](LV2ProgramsApi.md#listProgramSpendingDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/spending/daily | List program spending daily reports |
| [**listProgramSpendingSummaryReports()**](LV2ProgramsApi.md#listProgramSpendingSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/spending/summary | List program spending summary reports |
| [**listProgramTierStructureAssignments()**](LV2ProgramsApi.md#listProgramTierStructureAssignments) | **GET** /v2/loyalties/programs/{programId}/tier-structures | List program tier structure assignments |
| [**listProgramTiersDailyReports()**](LV2ProgramsApi.md#listProgramTiersDailyReports) | **GET** /v2/loyalties/programs/{programId}/reports/tiers/daily | List program tiers daily reports |
| [**listProgramTiersSummaryReports()**](LV2ProgramsApi.md#listProgramTiersSummaryReports) | **GET** /v2/loyalties/programs/{programId}/reports/tiers/summary | List program tiers summary reports |
| [**purchaseMemberReward()**](LV2ProgramsApi.md#purchaseMemberReward) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/rewards/purchases | Purchase reward with points |
| [**refundRewardPurchase()**](LV2ProgramsApi.md#refundRewardPurchase) | **POST** /v2/loyalties/programs/{programId}/rewards/purchases/{rewardTransactionId}/refund | Refund reward purchase |
| [**updateProgramMember()**](LV2ProgramsApi.md#updateProgramMember) | **PUT** /v2/loyalties/programs/{programId}/members/{memberId} | Update program member |


## `activateCardPendingPointsBucket()`

```php
activateCardPendingPointsBucket($programId, $memberId, $cardId, $bucketId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsActivateResponseBody
```

Activate pending point bucket

Activates a pending points bucket and creates a PENDING_POINTS_ACTIVATED card transaction. The transaction is created with status PENDING and processed asynchronously. No request body. The bucket must be PENDING, and its date must be after the current project day. The program and the member must be ACTIVE, and the program must be inside its validity window. Otherwise the response is 423. Returns 404 when the program or the member doesnt exist, when the card isnt assigned to that member, or when the bucket isnt on that card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$bucketId = 'bucketId_example'; // string | Identifies the pending points bucket. Format lcppb_[a-f0-9]+.

try {
    $result = $apiInstance->activateCardPendingPointsBucket($programId, $memberId, $cardId, $bucketId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->activateCardPendingPointsBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **bucketId** | **string**| Identifies the pending points bucket. Format lcppb_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsActivateResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsPendingPointsActivateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `activateProgramMember()`

```php
activateProgramMember($programId, $memberId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivateResponseBody
```

Activate program member

Moves an INACTIVE member to ACTIVE and sets updated_at. Records a vl.member.activated activity. No request body. Returns the member without a cards array. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first. A DELETED member returns 404. Returns 400 with key invalid_state_transition when the member is already ACTIVE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.

try {
    $result = $apiInstance->activateProgramMember($programId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->activateProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivateResponseBody**](../Model/V2LoyaltiesProgramsMembersActivateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adjustCardPoints()`

```php
adjustCardPoints($programId, $memberId, $cardId, $v2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPointsAdjustResponseBody
```

Adjust card points

Manually adjusts the points balance of the members card. A positive points value creates an ADMIN_CREDIT card transaction. The expiration date comes from the member tier when that tier defines its own points expiration. Otherwise the date comes from the card definition. expiration_date is null when points dont expire. A negative points value creates an ADMIN_DEBIT card transaction. When points is 0, no transaction is created and status is NO_CHANGE. The transaction is created with status PENDING and processed asynchronously. The program and the member must be ACTIVE. The program must also be inside its validity window. Otherwise the response is 423. The response is 404 when the program or the member doesnt exist, or when the card isnt assigned to that member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$v2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody = {"points":100}; // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody

try {
    $result = $apiInstance->adjustCardPoints($programId, $memberId, $cardId, $v2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->adjustCardPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **v2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody**](../Model/V2LoyaltiesProgramsMembersCardsPointsAdjustRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPointsAdjustResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsPointsAdjustResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchCreateProgramMembers()`

```php
batchCreateProgramMembers($programId, $memberCreate): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateInBulkResponseBody
```

Batch create program members

Schedules creation of program members from a JSON array and returns 202 with async_action_id. The program must exist, be ACTIVE, and be inside its validity window. The body isnt checked before that response. Entries are processed in batches of 100. The raw body must be at most 10 MB. Each entry uses the same fields as [Create program member](/api-reference/programs/create-program-member). A failed entry is skipped. Its report row sets created to false and explains the failure in error. Skipped cases include an invalid customer_identification, an unknown customer, an invalid status, a duplicate customer in the batch (Duplicate customer ID), a customer who is already a member (Member already exists), metadata that doesnt match the vl_member schema, and entries past the loyalty members plan limit. Successful entries enroll the customer and create a loyalty card for each card definition on the program. Report columns are identification_type, customer_id, customer_source_id, program_id, member_id, created, and error. An empty array or a null entry fails the async action with invalid_request_payload. A body that isnt a JSON array fails it with top_level_object_should_be_an_array. Use [Get async action](/api-reference/async-actions/get-async-action) to read the status and the report. You can also open the result from Audit log, [Background tasks](/analyze/audit-logs#background-tasks).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberCreate = [{"customer_identification":{"type":"customer_id","customer_id":"cust_X07elh40iNWLujRmDNmBufxd"}},{"customer_identification":{"type":"customer_source_id","customer_source_id":"crm-1001"},"status":"ACTIVE"}]; // \OpenAPI\Client\Model\MemberCreate[]

try {
    $result = $apiInstance->batchCreateProgramMembers($programId, $memberCreate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->batchCreateProgramMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberCreate** | [**\OpenAPI\Client\Model\MemberCreate[]**](../Model/MemberCreate.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateInBulkResponseBody**](../Model/V2LoyaltiesProgramsMembersCreateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelCardPendingPointsBucket()`

```php
cancelCardPendingPointsBucket($programId, $memberId, $cardId, $bucketId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsCancelResponseBody
```

Cancel pending point bucket

Cancels a pending points bucket so its points arent activated. Creates a PENDING_POINTS_CANCELED card transaction. The transaction is created with status PENDING and processed asynchronously. No request body. The bucket must be PENDING, and its date must be after the current project day. The program and the member must be ACTIVE, and the program must be inside its validity window. Otherwise the response is 423. Returns 404 when the program or the member doesnt exist, when the card isnt assigned to that member, or when the bucket isnt on that card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$bucketId = 'bucketId_example'; // string | Identifies the pending points bucket. Format lcppb_[a-f0-9]+.

try {
    $result = $apiInstance->cancelCardPendingPointsBucket($programId, $memberId, $cardId, $bucketId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->cancelCardPendingPointsBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **bucketId** | **string**| Identifies the pending points bucket. Format lcppb_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsCancelResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsPendingPointsCancelResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMemberOrderPayment()`

```php
createMemberOrderPayment($programId, $memberId, $v2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody): \OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBody
```

Pay for order with points

Pays for an order with points from the members card. The amount and points come from the card definitions pay-with-points exchange ratio, limited by the order total, the card balance, card spending caps, and the optional payment_limit. The binding cap is returned as details.spending_cap. The program and member must be ACTIVE, and the program must be inside its validity window. The card must belong to the member. The card definition must have pay-with-points enabled and an exchange-ratio formula. The order must already exist, identified by id or source_id. Modes: - TRANSACTION (default): creates a PENDING order transaction and a PENDING card transaction. Returns 202. The same order can be paid again; each call creates a new transaction. - DRY_RUN: simulates the payment and doesnt create a transaction. Returns 200 with status SIMULATED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$v2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody = {"payment_limit":{"type":"CARD_BALANCE"},"mode":"TRANSACTION","card_id":"lcrd_128f962dbd8c4ba5e1","order":{"id":"ord_12b4cdf5f30c158825"}}; // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody

try {
    $result = $apiInstance->createMemberOrderPayment($programId, $memberId, $v2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->createMemberOrderPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **v2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody**](../Model/V2LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBody**](../Model/LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProgramMember()`

```php
createProgramMember($programId, $v2LoyaltiesProgramsMembersCreateRequestBody): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateResponseBody
```

Create program member

Enrolls an existing customer as a member of the loyalty program and creates a loyalty card for each card definition assigned to the program. Card code generation is asynchronous, so code can be null right after creation. The program must be ACTIVE and inside its validity window, and the customer must already exist. A customer can be a member of a program only once. Identify the customer with customer_identification. status defaults to ACTIVE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$v2LoyaltiesProgramsMembersCreateRequestBody = {"customer_identification":{"type":"customer_id","customer_id":"cust_X07elh40iNWLujRmDNmBufxd"}}; // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateRequestBody

try {
    $result = $apiInstance->createProgramMember($programId, $v2LoyaltiesProgramsMembersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->createProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **v2LoyaltiesProgramsMembersCreateRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateRequestBody**](../Model/V2LoyaltiesProgramsMembersCreateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCreateResponseBody**](../Model/V2LoyaltiesProgramsMembersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateProgramMember()`

```php
deactivateProgramMember($programId, $memberId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersDeactivateResponseBody
```

Deactivate program member

Moves an ACTIVE member to INACTIVE and sets updated_at. Records a vl.member.deactivated activity. An INACTIVE member cant earn or spend points. No request body. Returns the member without a cards array. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first. A DELETED member returns 404. Returns 400 with key invalid_state_transition when the member is already INACTIVE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.

try {
    $result = $apiInstance->deactivateProgramMember($programId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->deactivateProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersDeactivateResponseBody**](../Model/V2LoyaltiesProgramsMembersDeactivateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteProgramMember()`

```php
deleteProgramMember($programId, $memberId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersDeleteResponseBody
```

Delete program member

Deletes the member and sets status to DELETED. Removes the members card assignments in this program. Returns the member without a cards array. Delete doesnt change updated_at. Records a vl.member.deleted activity. Each unassigned card also records vl.member.card.unassigned and vl.card.unassigned. When an assignment has a tier, the delete records a LEFT tier transaction with origin member_card_deleted. The same customer can join the program again. The new member gets a new ID. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first. Deleting a member that is already DELETED returns 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.

try {
    $result = $apiInstance->deleteProgramMember($programId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->deleteProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersDeleteResponseBody**](../Model/V2LoyaltiesProgramsMembersDeleteResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `expireCardPointsBucket()`

```php
expireCardPointsBucket($programId, $memberId, $cardId, $bucketId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsExpireResponseBody
```

Expire point bucket

Expires an ACTIVE points bucket. Creates an ADMIN_POINTS_EXPIRATION card transaction. The transaction is created with status PENDING and processed asynchronously. No request body. The bucket must be ACTIVE, and its expiration_date must be on or after the current project day. The program and the member must be ACTIVE, and the program must be inside its validity window. Otherwise the response is 423. Returns 404 when the program, the member, or the card definition doesnt exist, when the card isnt assigned to that member, or when the bucket isnt on that card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$bucketId = 'bucketId_example'; // string | Identifies the points expiration bucket. Format lcpeb_[a-f0-9]+.

try {
    $result = $apiInstance->expireCardPointsBucket($programId, $memberId, $cardId, $bucketId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->expireCardPointsBucket: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **bucketId** | **string**| Identifies the points expiration bucket. Format lcpeb_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsExpireResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsExpiringPointsExpireResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberEarningRuleDailyReport()`

```php
getMemberEarningRuleDailyReport($programId, $memberId, $earningRuleId, $startDate, $endDate, $resolution): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersEarningRulesReportsDailyListResponseBody
```

List member earning-rule daily reports

Returns aggregated daily usage statistics for a specific earning rule and member over the given date range and resolution. Each entry sums successful earning-rule triggers recorded in one period. Periods without recorded activity are omitted. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program or member does not exist, or when the earning rule does not exist or is not assigned to the program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$earningRuleId = 'earningRuleId_example'; // string | Identifies the earning rule. Format lern_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.

try {
    $result = $apiInstance->getMemberEarningRuleDailyReport($programId, $memberId, $earningRuleId, $startDate, $endDate, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->getMemberEarningRuleDailyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **earningRuleId** | **string**| Identifies the earning rule. Format lern_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersEarningRulesReportsDailyListResponseBody**](../Model/V2LoyaltiesProgramsMembersEarningRulesReportsDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramMember()`

```php
getProgramMember($programId, $memberId): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersGetResponseBody
```

Get program member

Returns one member of the program together with that members loyalty cards. Each card includes balance, lifetime_bucket, next_expiration, and next_activation. tier_progress is not included. Use [Get program membership](/api-reference/programs/get-program-membership) when you need tier progress. card.code can be null shortly after member creation, while code generation is still running. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.

try {
    $result = $apiInstance->getProgramMember($programId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->getProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersGetResponseBody**](../Model/V2LoyaltiesProgramsMembersGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramMembership()`

```php
getProgramMembership($programId, $customerId, $identificationType): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembershipsGetResponseBody
```

Get program membership

Returns the membership for one customer in the program: the member, the program, and the members loyalty cards. A card includes tier_progress when its card definition has a tier structure and the member has a tier on that card. Otherwise tier_progress is omitted. identification_type chooses how customerId is read. It defaults to customer_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$customerId = 'customerId_example'; // string | Identifies the customer or member. identification_type selects the value: a Voucherify customer ID (cust_...), a customer source_id, or a loyalty member ID (lmbr_...).
$identificationType = 'customer_id'; // string | Selects how customerId is read. customer_id is the Voucherify customer ID and the default. customer_source_id is the customers source_id. member_id is the loyalty member ID.

try {
    $result = $apiInstance->getProgramMembership($programId, $customerId, $identificationType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->getProgramMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **customerId** | **string**| Identifies the customer or member. identification_type selects the value: a Voucherify customer ID (cust_...), a customer source_id, or a loyalty member ID (lmbr_...). | |
| **identificationType** | **string**| Selects how customerId is read. customer_id is the Voucherify customer ID and the default. customer_source_id is the customers source_id. member_id is the loyalty member ID. | [optional] [default to &#39;customer_id&#39;] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembershipsGetResponseBody**](../Model/V2LoyaltiesProgramsMembershipsGetResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramPointsEarningsDailyReport()`

```php
getProgramPointsEarningsDailyReport($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsPointsEarningsDailyListResponseBody
```

List program points-earnings daily reports

Returns aggregated daily points-earnings statistics for the program over the given date range and resolution, optionally filtered by earning rule and card definition. Each entry sums earning operations recorded for one period, earning rule, earning item, and card definition. Periods without recorded activity are omitted. A filter that matches no rows returns an empty data array. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PointsEarningsReportListFilters(); // \OpenAPI\Client\Model\PointsEarningsReportListFilters | Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->getProgramPointsEarningsDailyReport($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->getProgramPointsEarningsDailyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**\OpenAPI\Client\Model\PointsEarningsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsPointsEarningsDailyListResponseBody**](../Model/V2LoyaltiesProgramsReportsPointsEarningsDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramPointsEarningsSummaryReport()`

```php
getProgramPointsEarningsSummaryReport($programId, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsPointsEarningsSummaryListResponseBody
```

List program points-earnings summary reports

Returns total points-earnings statistics for the program (all time), optionally filtered by earning rule or card definition. Each entry sums earning operations for one earning rule, earning item, and card definition. Returns at most 100 rows, ordered by id descending. limit and order are not query parameters. A filter that matches no rows returns an empty data array. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PointsEarningsReportListFilters(); // \OpenAPI\Client\Model\PointsEarningsReportListFilters | Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->getProgramPointsEarningsSummaryReport($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->getProgramPointsEarningsSummaryReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**\OpenAPI\Client\Model\PointsEarningsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsPointsEarningsSummaryListResponseBody**](../Model/V2LoyaltiesProgramsReportsPointsEarningsSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardActivities()`

```php
listCardActivities($programId, $memberId, $cardId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsActivitiesListResponseBody
```

List card activities

Returns a cursor-paginated list of activities recorded for the members card. The card must still be assigned to that member. Filters are id, type, and created_at. Default order is -created_at, then id ascending. Returns 404 when the program doesnt exist, when the member doesnt exist in that program, or when the card isnt currently assigned to that member. The program is checked first, then the member. A DELETED member returns 404 with resource_type member. A missing assignment and a missing or deleted card both return 404 with resource_type card. Returns 400 with key invalid_query_params when the query fails validation. That check runs before the program, member, and card lookup. A cursor that doesnt match ^lcrsacrd_[a-f0-9]+$, a limit outside 1 to 100, an order other than created_at or -created_at, or an array that orders by both directions fails here. After the program, member, and card are found, an unknown or expired cursor returns invalid_or_expired_cursor. A cursor recorded for different filters or order returns cursor_and_query_mismatch. The cursor stays valid when only limit changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsacrd_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsActivitiesListRequestQueryFilters(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsActivitiesListRequestQueryFilters | Filters the results. Pass a deep object, for example filters[type][conditions][$is] vl.card.created. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listCardActivities($programId, $memberId, $cardId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listCardActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsacrd_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsActivitiesListRequestQueryFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[type][conditions][$is] vl.card.created. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsActivitiesListResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsActivitiesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardExpiringPoints()`

```php
listCardExpiringPoints($programId, $memberId, $cardId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsListResponseBody
```

List card expiring points buckets

Returns a cursor-paginated list of ACTIVE point expiration buckets for the members card. Each bucket groups points that share an expiration date and expiration type, including points from separate transactions. The list starts on the current project day. Earlier buckets are omitted. Results can be filtered by card definition ID and expiration date, and ordered by expiration_date. Returns an empty list when the card has no matching buckets. Returns 400 when the query is invalid or the cursor is invalid, expired, or doesnt match the query. Returns 404 when the program or the member doesnt exist, or when the card isnt assigned to that member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to expiration_date. Soonest expiration first. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrspeb_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsListRequestQuery | Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_1297339938ae248cea. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listCardExpiringPoints($programId, $memberId, $cardId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listCardExpiringPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to expiration_date. Soonest expiration first. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrspeb_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_1297339938ae248cea. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsExpiringPointsListResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsExpiringPointsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardPendingPoints()`

```php
listCardPendingPoints($programId, $memberId, $cardId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsListResponseBody
```

List card pending point buckets

Returns a cursor-paginated list of pending point buckets for the members card. Every bucket has status PENDING. Pending points wait for activation (PERIOD_BASED, FIXED_DATES, or EVENT_BASED), following the card definition. The list starts on the next project day. The current days bucket is omitted because its still accumulating. Results can be filtered by card definition ID and ordered by date. Returns 404 when the program or the member doesnt exist, or when the card isnt assigned to that member. Bucket IDs from this list are the bucketId for [Activate pending point bucket](/api-reference/programs/activate-pending-point-bucket) and [Cancel pending point bucket](/api-reference/programs/cancel-pending-point-bucket).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to date. Soonest activation first. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrscppb_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsListRequestQuery | Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_128f495f720c4bec8c. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listCardPendingPoints($programId, $memberId, $cardId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listCardPendingPoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to date. Soonest activation first. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrscppb_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_128f495f720c4bec8c. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsPendingPointsListResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsPendingPointsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCardTransactions()`

```php
listCardTransactions($programId, $memberId, $cardId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsTransactionsListResponseBody
```

List card transactions

Returns a cursor-paginated list of transactions on the members card. Filter by id, card_definition_id, and created_at. Order by id (default -id, newest first). Returns 404 when the program, member, or card doesnt exist. The program is checked first, then the member, then the card. A member of another program, or a card that isnt assigned to this member, is not found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsctx_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsTransactionsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsTransactionsListRequestQuery | Filters the results. Pass a deep object, for example filters[id][conditions][$is] lctx_0f5d0a8878caa3ee5c. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listCardTransactions($programId, $memberId, $cardId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listCardTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsctx_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsTransactionsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[id][conditions][$is] lctx_0f5d0a8878caa3ee5c. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersCardsTransactionsListResponseBody**](../Model/V2LoyaltiesProgramsMembersCardsTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberBenefitTransactions()`

```php
listMemberBenefitTransactions($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersBenefitsTransactionsListResponseBody
```

List member benefit transactions

Lists benefit transactions (benefit fulfillments) for a given program member, with cursor-based pagination. Supports filtering by benefit ID and creation date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsbtx_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersBenefitsTransactionsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersBenefitsTransactionsListRequestQuery | Filters the results. Pass a deep object, for example filters[benefit_id][conditions][$is] lben_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listMemberBenefitTransactions($programId, $memberId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listMemberBenefitTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsbtx_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersBenefitsTransactionsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[benefit_id][conditions][$is] lben_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersBenefitsTransactionsListResponseBody**](../Model/V2LoyaltiesProgramsMembersBenefitsTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberCardDailyReports()`

```php
listMemberCardDailyReports($programId, $memberId, $cardId, $startDate, $endDate, $resolution): \OpenAPI\Client\Model\LoyaltiesProgramsMembersCardsReportsDailyListResponseBody
```

List card daily points reports

Returns aggregated points statistics for a members loyalty card over the given date range and resolution. Each entry sums the point operations recorded in one period. Periods without recorded activity are omitted. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program or member does not exist, or when the card does not exist or is not assigned to the member in the program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$cardId = 'cardId_example'; // string | Identifies the loyalty card. Format lcrd_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.

try {
    $result = $apiInstance->listMemberCardDailyReports($programId, $memberId, $cardId, $startDate, $endDate, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listMemberCardDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **cardId** | **string**| Identifies the loyalty card. Format lcrd_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersCardsReportsDailyListResponseBody**](../Model/LoyaltiesProgramsMembersCardsReportsDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberOrderPayments()`

```php
listMemberOrderPayments($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsListResponseBody
```

List member order payments

Lists stored PAY_WITH_POINTS order transactions for the program member, with cursor pagination. Filter by id, card_definition_id, and created_at. Order by id (default -id, newest first). Dry-run (SIMULATED) results arent stored and dont appear. Returns 404 when the program or the member doesnt exist. The program is checked first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsotx_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery | Filters the results. Pass a deep object, for example filters[id][conditions][$is] lotx_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listMemberOrderPayments($programId, $memberId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listMemberOrderPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsotx_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[id][conditions][$is] lotx_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersOrdersPaymentsListResponseBody**](../Model/V2LoyaltiesProgramsMembersOrdersPaymentsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberRewardPurchases()`

```php
listMemberRewardPurchases($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesListResponseBody
```

List member reward purchases

Lists stored PURCHASE reward transactions for the program member, with cursor pagination. Filter by id, reward_id, card_definition_id, and created_at. Order by id (default -id, newest first). Purchases rejected before a transaction is stored dont appear. A purchase accepted with 202 that later fails is stored as REJECTED with details.rejection. Returns 404 when the program or the member doesnt exist. The program is checked first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrstrx_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery | Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listMemberRewardPurchases($programId, $memberId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listMemberRewardPurchases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrstrx_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesListResponseBody**](../Model/V2LoyaltiesProgramsMembersRewardsPurchasesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMemberTierTransactions()`

```php
listMemberTierTransactions($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersTiersTransactionsListResponseBody
```

List member tier transactions

Lists tier transactions for the member: joins, leaves, upgrades, downgrades, expiration changes, and evaluation refreshes. Results use cursor pagination. Default order is -id, newest first. Filters are card_id, card_definition_id, and created_at. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first. A DELETED member returns 404. Returns 400 with key invalid_query_params when the query fails validation. That check runs before the program and member lookup. order must be id or -id. An array that orders by both directions is rejected. A cursor that doesnt match ^lcrsttx_[a-f0-9]+$ fails here. After the program and member are found, an unknown or expired cursor returns invalid_or_expired_cursor. A cursor recorded for different filters or order returns cursor_and_query_mismatch. The cursor stays valid when only limit changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsttx_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersTiersTransactionsListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersTiersTransactionsListRequestQuery | Filters the results. Pass a deep object, for example filters[card_id][conditions][$is] lcrd_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listMemberTierTransactions($programId, $memberId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listMemberTierTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -id. Newest first. The same field cannot be used in both directions. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsttx_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersTiersTransactionsListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[card_id][conditions][$is] lcrd_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersTiersTransactionsListResponseBody**](../Model/V2LoyaltiesProgramsMembersTiersTransactionsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramEarningRuleAssignments()`

```php
listProgramEarningRuleAssignments($programId, $limit, $order, $cursor): \OpenAPI\Client\Model\V2LoyaltiesProgramsEarningRulesListResponseBody
```

List program earning rule assignments

Returns a cursor-paginated list of earning rules assigned to the program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$limit = '10'; // string | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrserna_[a-f0-9]+. The cursor matches the filters and order of that response.

try {
    $result = $apiInstance->listProgramEarningRuleAssignments($programId, $limit, $order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramEarningRuleAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **limit** | **string**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to &#39;10&#39;] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrserna_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsEarningRulesListResponseBody**](../Model/V2LoyaltiesProgramsEarningRulesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramEarningRulesDailyReports()`

```php
listProgramEarningRulesDailyReports($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsEarningRulesDailyListResponseBody
```

List program earning-rules daily reports

Returns aggregated daily earning-rule evaluation statistics for the program over the given date range and resolution, optionally filtered by earning rule. Each entry counts eligibility checks for one period and earning rule. Periods without recorded activity are omitted. failures_breakdown is always an empty object. A filter that matches no rows returns an empty data array. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\EarningRulesReportListFilters(); // EarningRulesReportListFilters | Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramEarningRulesDailyReports($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramEarningRulesDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**EarningRulesReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsEarningRulesDailyListResponseBody**](../Model/V2LoyaltiesProgramsReportsEarningRulesDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramEarningRulesSummaryReports()`

```php
listProgramEarningRulesSummaryReports($programId, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsEarningRulesSummaryListResponseBody
```

List program earning-rules summary reports

Returns total earning-rule evaluation statistics for the program (all time), optionally filtered by earning rule. Includes success and failure counts with a failures breakdown. Each entry counts eligibility checks for one earning rule. Returns at most 100 rows, ordered by id descending. limit and order are not query parameters. A filter that matches no rows returns an empty data array. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\EarningRulesReportListFilters(); // EarningRulesReportListFilters | Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramEarningRulesSummaryReports($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramEarningRulesSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**EarningRulesReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[earning_rule_id][conditions][$is] lern_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsEarningRulesSummaryListResponseBody**](../Model/V2LoyaltiesProgramsReportsEarningRulesSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramMemberActivities()`

```php
listProgramMemberActivities($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivitiesListResponseBody
```

List program member activities

Returns a cursor-paginated list of lifecycle and card-assignment activities recorded for the member. Filters are id, type, and created_at. Default order is -created_at, then id ascending. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first. A DELETED member returns 404. Returns 400 with key invalid_query_params when the query fails validation. That check runs before the program and member lookup. A cursor that doesnt match ^lcrsambr_[a-f0-9]+$, a limit outside 1 to 100, an order other than created_at or -created_at, or an array that orders by both directions fails here. After the program and member are found, an unknown or expired cursor returns invalid_or_expired_cursor. A cursor recorded for different filters or order returns cursor_and_query_mismatch. The cursor stays valid when only limit changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsambr_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivitiesListRequestQueryFilters(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivitiesListRequestQueryFilters | Filters the results. Pass a deep object, for example filters[type][conditions][$is] vl.member.created. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramMemberActivities($programId, $memberId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramMemberActivities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsambr_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivitiesListRequestQueryFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[type][conditions][$is] vl.member.created. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersActivitiesListResponseBody**](../Model/V2LoyaltiesProgramsMembersActivitiesListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramMembers()`

```php
listProgramMembers($programId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersListResponseBody
```

List program members

Returns a cursor-paginated list of members of the program. Deleted members are omitted. Results can be filtered by ID, status, customer ID and creation date. Results can be ordered by creation date, status, or customer ID (ascending or descending). The same field cannot be ordered both ascending and descending at the same time. Returns 404 when the program does not exist. List items do not include the cards array. Use the following endpoints to retrieve cards for a given member: - [Get customer memberships](/api-reference/programs/get-customer-memberships), - [Get program member](/api-reference/programs/get-program-member), - [Get program membership](/api-reference/programs/get-program-membership).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$limit = 10; // int | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsmbr_[a-f0-9]+. The cursor matches the filters and order of that response.
$filters = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersListRequestQuery(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersListRequestQuery | Filters the results. Pass a deep object, for example filters[status][conditions][$is] ACTIVE. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramMembers($programId, $limit, $order, $cursor, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **limit** | **int**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to 10] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsmbr_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersListRequestQuery**](../Model/.md)| Filters the results. Pass a deep object, for example filters[status][conditions][$is] ACTIVE. Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersListResponseBody**](../Model/V2LoyaltiesProgramsMembersListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramMembersDailyReports()`

```php
listProgramMembersDailyReports($programId, $startDate, $endDate, $resolution): \OpenAPI\Client\Model\LoyaltiesProgramsReportsMembersDailyListResponseBody
```

List program members daily reports

Returns member and card changes for the program over the given date range and resolution. Each row covers one period with recorded activity. Periods without activity are omitted. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.

try {
    $result = $apiInstance->listProgramMembersDailyReports($programId, $startDate, $endDate, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramMembersDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsMembersDailyListResponseBody**](../Model/LoyaltiesProgramsReportsMembersDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramMembersSummaryReports()`

```php
listProgramMembersSummaryReports($programId): \OpenAPI\Client\Model\LoyaltiesProgramsReportsMembersSummaryListResponseBody
```

List program members summary reports

Returns all-time member and card totals for the program. The response contains one row when activity was recorded, and an empty data array otherwise. limit and order are not query parameters. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.

try {
    $result = $apiInstance->listProgramMembersSummaryReports($programId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramMembersSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsMembersSummaryListResponseBody**](../Model/LoyaltiesProgramsReportsMembersSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramRewardAssignments()`

```php
listProgramRewardAssignments($programId, $limit, $order, $cursor): \OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsListResponseBody
```

List program reward assignments

Returns a cursor-paginated list of rewards assigned to the program, including their stock configuration and redemption counters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$limit = '10'; // string | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrsrewa_[a-f0-9]+. The cursor matches the filters and order of that response.

try {
    $result = $apiInstance->listProgramRewardAssignments($programId, $limit, $order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramRewardAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **limit** | **string**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to &#39;10&#39;] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrsrewa_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsListResponseBody**](../Model/V2LoyaltiesProgramsRewardsListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramRewardsDailyReports()`

```php
listProgramRewardsDailyReports($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsDailyListResponseBody
```

List program rewards daily reports

Returns aggregated reward-purchase statistics for the program over the given date range and resolution, optionally filtered by reward. Each row covers one reward and one period with recorded purchases. Periods without recorded purchases are omitted. failures_breakdown is always an empty object. A filter that matches no rows returns an empty data array. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\RewardsReportListFilters(); // RewardsReportListFilters | Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramRewardsDailyReports($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramRewardsDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**RewardsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsDailyListResponseBody**](../Model/LoyaltiesProgramsReportsRewardsDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramRewardsSpendingsDailyReports()`

```php
listProgramRewardsSpendingsDailyReports($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSpendingsDailyListResponseBody
```

List program rewards spendings daily reports

Returns aggregated points spent on reward purchases for the program over the given date range and resolution. Each row covers one reward, reward cost, reward spending, card definition, and period with an approved point spend. Periods without an approved point spend are omitted. Optionally filters by reward, cost, spending, and card definition. A filter that matches no rows returns an empty data array. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\RewardsSpendingsReportListFilters(); // RewardsSpendingsReportListFilters | Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramRewardsSpendingsDailyReports($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramRewardsSpendingsDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**RewardsSpendingsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSpendingsDailyListResponseBody**](../Model/LoyaltiesProgramsReportsRewardsSpendingsDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramRewardsSpendingsSummaryReports()`

```php
listProgramRewardsSpendingsSummaryReports($programId, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSpendingsSummaryListResponseBody
```

List program rewards spendings summary reports

Returns all-time points spent on reward purchases for the program. Each row covers one reward, reward cost, reward spending, and card definition with an approved point spend. Filters rows by reward, cost, spending, and card definition. Returns at most 100 rows, ordered by id descending. limit and order are not query parameters. A filter that matches no rows returns an empty data array. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\RewardsSpendingsReportListFilters(); // RewardsSpendingsReportListFilters | Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramRewardsSpendingsSummaryReports($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramRewardsSpendingsSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**RewardsSpendingsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSpendingsSummaryListResponseBody**](../Model/LoyaltiesProgramsReportsRewardsSpendingsSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramRewardsSummaryReports()`

```php
listProgramRewardsSummaryReports($programId, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSummaryListResponseBody
```

List program rewards summary reports

Returns all-time reward-purchase totals for the program, one row per reward with a recorded purchase attempt. Filters rows with filters[reward_id]. Returns at most 100 rows, ordered by id descending. limit and order are not query parameters. A filter that matches no rows returns an empty data array. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\RewardsReportListFilters(); // RewardsReportListFilters | Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramRewardsSummaryReports($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramRewardsSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**RewardsReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[reward_id][conditions][$is] lrew_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsRewardsSummaryListResponseBody**](../Model/LoyaltiesProgramsReportsRewardsSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramSpendingDailyReports()`

```php
listProgramSpendingDailyReports($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsSpendingDailyListResponseBody
```

List program spending daily reports

Returns aggregated points-spending statistics for the program over the given date range and resolution. Each row covers one card definition and one period with recorded spending. Periods without recorded spending are omitted. Optionally filters by card definition. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\SpendingReportListFilters(); // SpendingReportListFilters | Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramSpendingDailyReports($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramSpendingDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**SpendingReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsSpendingDailyListResponseBody**](../Model/LoyaltiesProgramsReportsSpendingDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramSpendingSummaryReports()`

```php
listProgramSpendingSummaryReports($programId, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsReportsSpendingSummaryListResponseBody
```

List program spending summary reports

Returns all-time point-spending totals for the program, one row per card definition that has recorded spending. Filters rows with filters[card_definition_id]. Returns at most 10 rows (max number of card definitions per program), ordered by id descending. limit and order are not query parameters. Returns 200 with an empty data array when no spending is recorded. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\SpendingReportListFilters(); // SpendingReportListFilters | Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramSpendingSummaryReports($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramSpendingSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**SpendingReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[card_definition_id][conditions][$is] lcdef_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsReportsSpendingSummaryListResponseBody**](../Model/LoyaltiesProgramsReportsSpendingSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramTierStructureAssignments()`

```php
listProgramTierStructureAssignments($programId, $limit, $order, $cursor): \OpenAPI\Client\Model\V2LoyaltiesProgramsTierStructuresListResponseBody
```

List program tier structure assignments

Returns a cursor-paginated list of tier structures assigned to the program. Currently, a program can have only one tier structure assigned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$limit = '10'; // string | Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer.
$order = 'order_example'; // string | Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending.
$cursor = 'cursor_example'; // string | Continues pagination. Pass the cursor.next value from a previous response. Format lcrstsa_[a-f0-9]+. The cursor matches the filters and order of that response.

try {
    $result = $apiInstance->listProgramTierStructureAssignments($programId, $limit, $order, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramTierStructureAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **limit** | **string**| Limits the page size to an integer from 1 to 100. Defaults to 10. A numeric string is accepted and rounded to the nearest integer. | [optional] [default to &#39;10&#39;] |
| **order** | **string**| Orders the results. Accepts one value or an array. Prefix a field with - for descending order. Defaults to -created_at. The same field cannot be used in both directions. Rows with the same sort value are then ordered by id ascending. | [optional] |
| **cursor** | **string**| Continues pagination. Pass the cursor.next value from a previous response. Format lcrstsa_[a-f0-9]+. The cursor matches the filters and order of that response. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsTierStructuresListResponseBody**](../Model/V2LoyaltiesProgramsTierStructuresListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramTiersDailyReports()`

```php
listProgramTiersDailyReports($programId, $startDate, $endDate, $resolution, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsTiersDailyListResponseBody
```

List program tiers daily reports

Returns aggregated tier-movement statistics for the program over the given date range and resolution, optionally filtered by tier structure and tier. Each row covers one tier structure, one tier, and one period with recorded movement. Periods without recorded movement are omitted. A filter that matches no rows returns an empty data array. The date range is limited per resolution: - 90 days for day, - 12 weeks for week, - 12 months for month, - 4 quarters for quarter, - start_date must be before end_date, - start_date and end_date are inclusive. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive start of the report date range. Format YYYY-MM-DD.
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date.
$resolution = 'resolution_example'; // string | Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters.
$filters = new \OpenAPI\Client\Model\TiersReportListFilters(); // TiersReportListFilters | Filters the results. Pass a deep object, for example filters[tier_structure_id][conditions][$is] lts_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramTiersDailyReports($programId, $startDate, $endDate, $resolution, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramTiersDailyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **startDate** | **\DateTime**| Sets the inclusive start of the report date range. Format YYYY-MM-DD. | |
| **endDate** | **\DateTime**| Sets the inclusive end of the report date range. Format YYYY-MM-DD. Must be after start_date. | |
| **resolution** | **string**| Sets the aggregation resolution. day allows at most 90 days, week at most 12 weeks, month at most 12 months, and quarter at most 4 quarters. | |
| **filters** | [**TiersReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[tier_structure_id][conditions][$is] lts_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsTiersDailyListResponseBody**](../Model/V2LoyaltiesProgramsReportsTiersDailyListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProgramTiersSummaryReports()`

```php
listProgramTiersSummaryReports($programId, $filters): \OpenAPI\Client\Model\V2LoyaltiesProgramsReportsTiersSummaryListResponseBody
```

List program tiers summary reports

Returns all-time tier-movement totals for the program, one row per tier structure and tier that has recorded movement. Filters rows with filters[tier_structure_id] and filters[tier_id]. Returns at most 100 rows, ordered by id descending. limit and order are not query parameters. A filter that matches no rows returns an empty data array. Returns 400 when query validation fails. Returns 404 when the program does not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$filters = new \OpenAPI\Client\Model\TiersReportListFilters(); // TiersReportListFilters | Filters the results. Pass a deep object, for example filters[tier_id][conditions][$is] lt_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter.

try {
    $result = $apiInstance->listProgramTiersSummaryReports($programId, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->listProgramTiersSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **filters** | [**TiersReportListFilters**](../Model/.md)| Filters the results. Pass a deep object, for example filters[tier_id][conditions][$is] lt_.... Fields combine through junction, which defaults to AND. Omit filters to apply no field filter. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsReportsTiersSummaryListResponseBody**](../Model/V2LoyaltiesProgramsReportsTiersSummaryListResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseMemberReward()`

```php
purchaseMemberReward($programId, $memberId, $v2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody): \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBody
```

Purchase reward with points

Purchases a reward for the program member by spending points from the members card. The card comes from the matching reward costs card definition. The program, reward, and member must be ACTIVE. The program and reward must be inside their validity windows. The reward must be assigned to the program with stock available, a cost must match the customer, and the purchase must stay inside frequency, cooldown, balance, and spending limits. Modes: - TRANSACTION (default): creates a PENDING reward transaction and a PENDING card transaction. Returns 202. - DRY_RUN: simulates the purchase and doesnt create a transaction. Returns 200 with status SIMULATED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$v2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody = new \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody

try {
    $result = $apiInstance->purchaseMemberReward($programId, $memberId, $v2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->purchaseMemberReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **v2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody**](../Model/V2LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBody**](../Model/LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundRewardPurchase()`

```php
refundRewardPurchase($programId, $rewardTransactionId, $v2LoyaltiesProgramsRewardsPurchasesRefundRequestBody): \OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundResponseBody
```

Refund reward purchase

Refunds an APPROVED reward purchase made by a program member. The purchase transaction is marked REFUNDED, a new REFUND reward transaction is created with status APPROVED, and the points spent on the purchase are returned to the members card. The request body is optional and an empty payload is allowed. Policies default to refund: DEFAULT and stock: DEFAULT. The endpoint responds with 202 before the card balance changes. A POINTS_RETURNED card transaction is created for the members card and processed shortly after the response. When the members tier or the card definition expires points, returned points receive a new expiration date from that setting. They dont inherit the expiration of the originally spent points. A NO_EXPIRATION setting leaves the returned points without an expiration date. Card earning limits dont block the refund. For a LOYALTY_CARD_POINTS reward, the points credited to the target card are also reversed, with a POINTS_PURCHASE_REVERSED card transaction on that card. That transaction is processed shortly after the response. Its expiration is copied from the original points-purchased transaction. A DISCOUNT_COUPONS refund deletes the issued vouchers. details.result.digital.discount_coupons[].result is DELETED, or SKIPPED when the voucher isnt deleted. A GIFT_VOUCHERS refund subtracts the credited amount. details.result.digital.gift_vouchers[].result is CREDITS_SUBTRACTED, or SKIPPED when the balance update is rejected. The refund reverses that purchase in the rewards purchase limits for the project-local day of the original purchase. A day whose purchases are all refunded no longer counts as the members last purchase. Only rewards whose refunds.type is REFUNDABLE can be refunded. Any other reward is rejected with 423 and key reward_refund_policy_does_not_allow_refunds. policies.refund set to ALLOW refunds it anyway. The program must exist, and the reward transaction must belong to that program. Otherwise the request fails with 404. The program is checked first. The request is rejected with 423 when: - The program isnt ACTIVE (non_active_program) or is outside its validity window (program_outside_validity_window), - The transaction isnt a purchase (non_purchase_reward_transaction) or isnt APPROVED (non_approved_reward_transaction); refunding the same purchase twice fails here, - The reward no longer exists (reward_not_found), isnt assigned to the program (refund_reward_not_assigned_to_program), the members card is gone (refund_card_not_found), or the card definition is gone (refund_card_definition_not_found), - The reward type isnt supported (reward_type_not_supported_for_refunds), - For a LOYALTY_CARD_POINTS reward, the purchase result is missing (loyalty_card_points_purchase_result_not_found), the target card is gone (loyalty_card_points_target_card_not_found), the points-purchased card transaction is missing (loyalty_card_points_purchase_not_found), the target cards available balance is lower than the purchased points (loyalty_card_points_insufficient_balance), or the target card definition is gone (loyalty_card_points_target_card_definition_not_found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$rewardTransactionId = 'rewardTransactionId_example'; // string | Identifies the reward transaction of the purchase to refund. Format lrtx_[a-f0-9]+.
$v2LoyaltiesProgramsRewardsPurchasesRefundRequestBody = new \OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody | Optional refund policies. An empty payload is allowed.

try {
    $result = $apiInstance->refundRewardPurchase($programId, $rewardTransactionId, $v2LoyaltiesProgramsRewardsPurchasesRefundRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->refundRewardPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **rewardTransactionId** | **string**| Identifies the reward transaction of the purchase to refund. Format lrtx_[a-f0-9]+. | |
| **v2LoyaltiesProgramsRewardsPurchasesRefundRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody**](../Model/V2LoyaltiesProgramsRewardsPurchasesRefundRequestBody.md)| Optional refund policies. An empty payload is allowed. | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsRewardsPurchasesRefundResponseBody**](../Model/V2LoyaltiesProgramsRewardsPurchasesRefundResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProgramMember()`

```php
updateProgramMember($programId, $memberId, $v2LoyaltiesProgramsMembersUpdateRequestBody): \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersUpdateResponseBody
```

Update program member

Updates a program members metadata. Provided object keys are merged into the existing metadata; omitted keys are preserved. Pass metadata: null to clear all metadata (sets it to an empty object). This endpoint cannot change status. Use [Activate program member](/api-reference/programs/activate-program-member) or [Deactivate program member](/api-reference/programs/deactivate-program-member) for status transitions. Records a vl.member.updated activity. Returns the updated member without the cards array. Returns 404 when the program or member does not exist. Returns 400 when the request body fails validation or the project vl_member metadata schema rejects the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-App-Id
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Id', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Id', 'Bearer');

// Configure API key authorization: X-App-Token
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-App-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-App-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LV2ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$programId = 'programId_example'; // string | Identifies the loyalty program. Format lprg_[a-f0-9]+.
$memberId = 'memberId_example'; // string | Identifies the member. Format lmbr_[a-f0-9]+.
$v2LoyaltiesProgramsMembersUpdateRequestBody = new \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersUpdateRequestBody(); // \OpenAPI\Client\Model\V2LoyaltiesProgramsMembersUpdateRequestBody

try {
    $result = $apiInstance->updateProgramMember($programId, $memberId, $v2LoyaltiesProgramsMembersUpdateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->updateProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program. Format lprg_[a-f0-9]+. | |
| **memberId** | **string**| Identifies the member. Format lmbr_[a-f0-9]+. | |
| **v2LoyaltiesProgramsMembersUpdateRequestBody** | [**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersUpdateRequestBody**](../Model/V2LoyaltiesProgramsMembersUpdateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V2LoyaltiesProgramsMembersUpdateResponseBody**](../Model/V2LoyaltiesProgramsMembersUpdateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
