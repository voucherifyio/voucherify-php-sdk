# OpenAPI\Client\LV2ProgramsApi

All URIs are relative to https://api.voucherify.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchCreateProgramMembers()**](LV2ProgramsApi.md#batchCreateProgramMembers) | **POST** /v2/loyalties/programs/{programId}/members/batch | Batch create program members |
| [**createMemberOrderPayment()**](LV2ProgramsApi.md#createMemberOrderPayment) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/orders/payments | Pay for order with points |
| [**createProgramMember()**](LV2ProgramsApi.md#createProgramMember) | **POST** /v2/loyalties/programs/{programId}/members | Create program member |
| [**getProgramMember()**](LV2ProgramsApi.md#getProgramMember) | **GET** /v2/loyalties/programs/{programId}/members/{memberId} | Get program member |
| [**getProgramMembership()**](LV2ProgramsApi.md#getProgramMembership) | **GET** /v2/loyalties/programs/{programId}/memberships/{customerId} | Get program membership |
| [**listCardTransactions()**](LV2ProgramsApi.md#listCardTransactions) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/cards/{cardId}/transactions | List card transactions |
| [**listMemberOrderPayments()**](LV2ProgramsApi.md#listMemberOrderPayments) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/orders/payments | List member order payments |
| [**listMemberRewardPurchases()**](LV2ProgramsApi.md#listMemberRewardPurchases) | **GET** /v2/loyalties/programs/{programId}/members/{memberId}/rewards/purchases | List member reward purchases |
| [**purchaseMemberReward()**](LV2ProgramsApi.md#purchaseMemberReward) | **POST** /v2/loyalties/programs/{programId}/members/{memberId}/rewards/purchases | Purchase reward with points |


## `batchCreateProgramMembers()`

```php
batchCreateProgramMembers($programId, $memberCreate): \OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateInBulkResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program ID (format lprg_[a-f0-9]+).
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
| **programId** | **string**| Unique loyalty program ID (format lprg_[a-f0-9]+). | |
| **memberCreate** | [**\OpenAPI\Client\Model\MemberCreate[]**](../Model/MemberCreate.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateInBulkResponseBody**](../Model/LoyaltiesProgramsMembersCreateInBulkResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMemberOrderPayment()`

```php
createMemberOrderPayment($programId, $memberId, $loyaltiesProgramsMembersOrdersPaymentsCreateRequestBody): \OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateCombinedResponseBody
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
$programId = 'programId_example'; // string | Identifies the loyalty program (lprg_ followed by hexadecimal characters).
$memberId = 'memberId_example'; // string | Identifies the program member (lmbr_[a-f0-9]+).
$loyaltiesProgramsMembersOrdersPaymentsCreateRequestBody = {"payment_limit":{"type":"CARD_BALANCE"},"mode":"TRANSACTION","card_id":"lcrd_128f962dbd8c4ba5e1","order":{"id":"ord_12b4cdf5f30c158825"}}; // \OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody

try {
    $result = $apiInstance->createMemberOrderPayment($programId, $memberId, $loyaltiesProgramsMembersOrdersPaymentsCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->createMemberOrderPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Identifies the loyalty program (lprg_ followed by hexadecimal characters). | |
| **memberId** | **string**| Identifies the program member (lmbr_[a-f0-9]+). | |
| **loyaltiesProgramsMembersOrdersPaymentsCreateRequestBody** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody**](../Model/LoyaltiesProgramsMembersOrdersPaymentsCreateRequestBody.md)|  | [optional] |

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
createProgramMember($programId, $loyaltiesProgramsMembersCreateRequestBody): \OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program ID (format lprg_[a-f0-9]+).
$loyaltiesProgramsMembersCreateRequestBody = {"customer_identification":{"type":"customer_id","customer_id":"cust_X07elh40iNWLujRmDNmBufxd"}}; // \OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateRequestBody

try {
    $result = $apiInstance->createProgramMember($programId, $loyaltiesProgramsMembersCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->createProgramMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Unique loyalty program ID (format lprg_[a-f0-9]+). | |
| **loyaltiesProgramsMembersCreateRequestBody** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateRequestBody**](../Model/LoyaltiesProgramsMembersCreateRequestBody.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersCreateResponseBody**](../Model/LoyaltiesProgramsMembersCreateResponseBody.md)

### Authorization

[X-App-Id](../../README.md#X-App-Id), [X-App-Token](../../README.md#X-App-Token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProgramMember()`

```php
getProgramMember($programId, $memberId): \OpenAPI\Client\Model\MemberWithCards
```

Get program member

<Info> <Badge color gray>Documentation in progress</Badge> This documentation is in progress. The parameters, fields, request and response bodies, and other data may be subject to change. If you need more information or you want to share feedback, contact [Voucherify support](https://www.voucherify.io/contact-support) or your Technical Account Manager. </Info> Returns one member of the program together with that members loyalty cards. Each card includes balance, lifetime_bucket, next_expiration, and next_activation. tier_progress is not included. Use [Get program membership](/api-reference/programs/get-program-membership) when you need tier progress. card.code can be null shortly after member creation, while code generation is still running. Returns 404 when the program doesnt exist, or when the member doesnt exist in that program. The program is checked first.

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
$programId = 'programId_example'; // string | Unique loyalty program ID (format lprg_[a-f0-9]+).
$memberId = 'memberId_example'; // string | Program member ID (format lmbr_[a-f0-9]+).

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
| **programId** | **string**| Unique loyalty program ID (format lprg_[a-f0-9]+). | |
| **memberId** | **string**| Program member ID (format lmbr_[a-f0-9]+). | |

### Return type

[**\OpenAPI\Client\Model\MemberWithCards**](../Model/MemberWithCards.md)

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
getProgramMembership($programId, $customerId, $identificationType): \OpenAPI\Client\Model\LoyaltiesProgramsMembershipsGetResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program ID (format lprg_[a-f0-9]+).
$customerId = 'customerId_example'; // string | Unique identifier of the customer or member, interpreted according to identification_type: a Voucherify customer ID (cust_...), a customer source_id, or a loyalty member ID (lmbr_...).
$identificationType = 'customer_id'; // string | Chooses how customerId is read. customer_id is the Voucherify customer ID and the default. customer_source_id is the customers source_id. member_id is the loyalty member ID.

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
| **programId** | **string**| Unique loyalty program ID (format lprg_[a-f0-9]+). | |
| **customerId** | **string**| Unique identifier of the customer or member, interpreted according to identification_type: a Voucherify customer ID (cust_...), a customer source_id, or a loyalty member ID (lmbr_...). | |
| **identificationType** | **string**| Chooses how customerId is read. customer_id is the Voucherify customer ID and the default. customer_source_id is the customers source_id. member_id is the loyalty member ID. | [optional] [default to &#39;customer_id&#39;] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembershipsGetResponseBody**](../Model/LoyaltiesProgramsMembershipsGetResponseBody.md)

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
listCardTransactions($programId, $memberId, $cardId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsMembersCardsTransactionsListResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program ID (format lprg_[a-f0-9]+).
$memberId = 'memberId_example'; // string | Program member ID (format lmbr_[a-f0-9]+).
$cardId = 'cardId_example'; // string | Loyalty card ID (format lcrd_[a-f0-9]+).
$limit = 10; // int | Maximum number of transactions to return. Must be between 1 and 100. Defaults to 10 when not provided.
$order = new \OpenAPI\Client\Model\ListCardTransactionsOrderParameter(); // ListCardTransactionsOrderParameter | Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected.
$cursor = 'cursor_example'; // string | Pagination cursor returned in the cursor.next field of a previous response. Must match the pattern ^lcrsctx_[a-f0-9]+$.
$filters = new \OpenAPI\Client\Model\LoyaltiesProgramsMembersCardsTransactionsListRequestQuery(); // LoyaltiesProgramsMembersCardsTransactionsListRequestQuery | Field-specific filter conditions, passed as a deep object, e.g. filters[id][conditions][$is] lctx_0f5d0a8878caa3ee5c.

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
| **programId** | **string**| Unique loyalty program ID (format lprg_[a-f0-9]+). | |
| **memberId** | **string**| Program member ID (format lmbr_[a-f0-9]+). | |
| **cardId** | **string**| Loyalty card ID (format lcrd_[a-f0-9]+). | |
| **limit** | **int**| Maximum number of transactions to return. Must be between 1 and 100. Defaults to 10 when not provided. | [optional] [default to 10] |
| **order** | [**ListCardTransactionsOrderParameter**](../Model/.md)| Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected. | [optional] |
| **cursor** | **string**| Pagination cursor returned in the cursor.next field of a previous response. Must match the pattern ^lcrsctx_[a-f0-9]+$. | [optional] |
| **filters** | [**LoyaltiesProgramsMembersCardsTransactionsListRequestQuery**](../Model/.md)| Field-specific filter conditions, passed as a deep object, e.g. filters[id][conditions][$is] lctx_0f5d0a8878caa3ee5c. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersCardsTransactionsListResponseBody**](../Model/LoyaltiesProgramsMembersCardsTransactionsListResponseBody.md)

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
listMemberOrderPayments($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsListResponseBody
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
$programId = 'programId_example'; // string | Identifies the loyalty program (lprg_ followed by hexadecimal characters).
$memberId = 'memberId_example'; // string | Identifies the program member (lmbr_[a-f0-9]+).
$limit = 10; // int | Maximum number of items to return. An integer between 1 and 100; numeric strings are also accepted. Defaults to 10.
$order = new \OpenAPI\Client\Model\ListCardTransactionsOrderParameter(); // ListCardTransactionsOrderParameter | Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected.
$cursor = 'cursor_example'; // string | Pagination cursor returned in the cursor.next field of a previous response (format: lcrsotx_ followed by hexadecimal characters).
$filters = new \OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery(); // LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery | Filters results by field, e.g. filters[id][conditions][$is] lotx_.... Each field accepts a conditions object with condition operators.

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
| **programId** | **string**| Identifies the loyalty program (lprg_ followed by hexadecimal characters). | |
| **memberId** | **string**| Identifies the program member (lmbr_[a-f0-9]+). | |
| **limit** | **int**| Maximum number of items to return. An integer between 1 and 100; numeric strings are also accepted. Defaults to 10. | [optional] [default to 10] |
| **order** | [**ListCardTransactionsOrderParameter**](../Model/.md)| Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected. | [optional] |
| **cursor** | **string**| Pagination cursor returned in the cursor.next field of a previous response (format: lcrsotx_ followed by hexadecimal characters). | [optional] |
| **filters** | [**LoyaltiesProgramsMembersOrdersPaymentsListRequestQuery**](../Model/.md)| Filters results by field, e.g. filters[id][conditions][$is] lotx_.... Each field accepts a conditions object with condition operators. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersOrdersPaymentsListResponseBody**](../Model/LoyaltiesProgramsMembersOrdersPaymentsListResponseBody.md)

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
listMemberRewardPurchases($programId, $memberId, $limit, $order, $cursor, $filters): \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesListResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program identifier (format: lprg_ followed by hexadecimal characters).
$memberId = 'memberId_example'; // string | Program member ID (format lmbr_[a-f0-9]+).
$limit = 10; // int | Maximum number of items to return. An integer between 1 and 100; numeric strings are also accepted. Defaults to 10.
$order = new \OpenAPI\Client\Model\ListCardTransactionsOrderParameter(); // ListCardTransactionsOrderParameter | Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected.
$cursor = 'cursor_example'; // string | Pagination cursor returned in the cursor.next field of a previous response (format: lcrstrx_ followed by hexadecimal characters).
$filters = new \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery(); // LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery | Field filters, e.g. filters[reward_id][conditions][$is] lrew_.... Each field accepts a conditions object with condition operators.

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
| **programId** | **string**| Unique loyalty program identifier (format: lprg_ followed by hexadecimal characters). | |
| **memberId** | **string**| Program member ID (format lmbr_[a-f0-9]+). | |
| **limit** | **int**| Maximum number of items to return. An integer between 1 and 100; numeric strings are also accepted. Defaults to 10. | [optional] [default to 10] |
| **order** | [**ListCardTransactionsOrderParameter**](../Model/.md)| Orders results by transaction id. -id is newest first and the default. id is oldest first. An array that orders by id and -id together is rejected. | [optional] |
| **cursor** | **string**| Pagination cursor returned in the cursor.next field of a previous response (format: lcrstrx_ followed by hexadecimal characters). | [optional] |
| **filters** | [**LoyaltiesProgramsMembersRewardsPurchasesListRequestQuery**](../Model/.md)| Field filters, e.g. filters[reward_id][conditions][$is] lrew_.... Each field accepts a conditions object with condition operators. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesListResponseBody**](../Model/LoyaltiesProgramsMembersRewardsPurchasesListResponseBody.md)

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
purchaseMemberReward($programId, $memberId, $loyaltiesProgramsMembersRewardsPurchasesCreateRequestBody): \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateCombinedResponseBody
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
$programId = 'programId_example'; // string | Unique loyalty program identifier (format: lprg_ followed by hexadecimal characters).
$memberId = 'memberId_example'; // string | Program member ID (format lmbr_[a-f0-9]+).
$loyaltiesProgramsMembersRewardsPurchasesCreateRequestBody = new \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody(); // \OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody

try {
    $result = $apiInstance->purchaseMemberReward($programId, $memberId, $loyaltiesProgramsMembersRewardsPurchasesCreateRequestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LV2ProgramsApi->purchaseMemberReward: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **programId** | **string**| Unique loyalty program identifier (format: lprg_ followed by hexadecimal characters). | |
| **memberId** | **string**| Program member ID (format lmbr_[a-f0-9]+). | |
| **loyaltiesProgramsMembersRewardsPurchasesCreateRequestBody** | [**\OpenAPI\Client\Model\LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody**](../Model/LoyaltiesProgramsMembersRewardsPurchasesCreateRequestBody.md)|  | [optional] |

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
