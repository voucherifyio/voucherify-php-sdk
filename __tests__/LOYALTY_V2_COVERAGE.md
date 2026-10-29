# Loyalty v2 e2e coverage (PHP SDK)

This document is the migration map for Loyalty v2 coverage in the PHP SDK (`__tests__/Unit/13_LoyaltiesV2Test.php`).

It records every HTTP helper call used for unpublished admin setup/teardown, and every published `LV2*Api` call the suite exercises. When `scripts/shared/get-take-list.ts` publishes an admin operation, switch that helper to the generated SDK method named below — do not call unpublished paths through the SDK today.

`npm run generate-sdk-php` deletes `sdks/php/src/` only. It does **not** delete `__tests__/`, so this file and the tests remain across regenerations. Still commit and push tests before regenerating.

## Files

| File | Role |
|------|------|
| `Unit/13_LoyaltiesV2Test.php` | Codeception Unit suite |
| `lib/loyalty_v2_fixture.php` | Setup / teardown orchestration |
| `lib/loyalty_v2_http.php` | Authenticated Guzzle helper for unpublished admin paths |
| `lib/config.php` | `Config::lv2*ApiInstance()` factories |

## Client split

| Concern | Client | Why |
|---------|--------|-----|
| Program / card definition / earning rule / reward admin | **HTTP** (`LoyaltyV2Http`) | Not on the published PHP SDK allowlist |
| Member lifecycle, points, payments, purchases, examine, selected reports | **SDK** (`LV2ProgramsApi`, `LV2ExamineApi`, …) | Allowlisted |
| Test customer + order | **SDK** (`CustomersApi`, `OrdersApi`) | Existing helpers |

## Depth legend

| Depth | Meaning |
|-------|---------|
| **Smoke** | Call succeeds; body/id present |
| **Basic** | Smoke + field checks (status, id prefix, list contains id) |
| **Flow** | Multi-step happy path |
| **Setup only** | Required for fixture; no dedicated assertion beyond setup ids |

---

## HTTP helpers → future SDK (migration map)

Each row is a method on `LoyaltyV2Http`. Future SDK names follow OpenAPI `operationId` once the path is allowlisted (likely on `LV2ProgramsApi` or a dedicated admin client for that tag).

| Helper | Method + path | Why HTTP today | Future SDK (when allowlisted) | Depth |
|--------|---------------|----------------|-------------------------------|-------|
| `createProgram` | `POST /v2/loyalties/programs` | Not on allowlist | `createProgram` | Setup only |
| `getProgram` | `GET /v2/loyalties/programs/{programId}` | Not on allowlist | `getProgram` | Unused in suite |
| `updateProgram` | `PUT /v2/loyalties/programs/{programId}` | Not on allowlist | `updateProgram` | Unused in suite |
| `activateProgram` | `POST /v2/loyalties/programs/{programId}/activate` | Not on allowlist | `activateProgram` | Setup only |
| `deactivateProgram` | `POST /v2/loyalties/programs/{programId}/deactivate` | Not on allowlist | `deactivateProgram` | Setup only (teardown) |
| `deleteProgram` | `DELETE /v2/loyalties/programs/{programId}` | Not on allowlist | `deleteProgram` | Setup only (teardown) |
| `createCardDefinition` | `POST /v2/loyalties/card-definitions` | Not on allowlist | `createCardDefinition` | Setup only |
| `activateCardDefinition` | `POST /v2/loyalties/card-definitions/{id}/activate` | Not on allowlist | `activateCardDefinition` | Setup only |
| `draftCardDefinition` / `deactivateCardDefinition` | `POST .../card-definitions/{id}/draft` | Not on allowlist (no deactivate path) | `draftCardDefinition` | Unused (teardown deletes) |
| `deleteCardDefinition` | `DELETE /v2/loyalties/card-definitions/{id}` | Not on allowlist | `deleteCardDefinition` | Setup only (teardown) |
| `createEarningRule` | `POST /v2/loyalties/earning-rules` | Not on allowlist | `createEarningRule` | Setup only |
| `activateEarningRule` | `POST .../earning-rules/{id}/activate` | Not on allowlist | `activateEarningRule` | Setup only |
| `deactivateEarningRule` | `POST .../earning-rules/{id}/deactivate` | Not on allowlist | `deactivateEarningRule` | Setup only (teardown) |
| `deleteEarningRule` | `DELETE /v2/loyalties/earning-rules/{id}` | Not on allowlist | `deleteEarningRule` | Setup only (teardown) |
| `createReward` | `POST /v2/loyalties/rewards` | Not on allowlist | `createReward` | Setup only |
| `activateReward` | `POST .../rewards/{id}/activate` | Not on allowlist | `activateReward` | Setup only |
| `deactivateReward` | `POST .../rewards/{id}/deactivate` | Not on allowlist | `deactivateReward` | Setup only (teardown) |
| `deleteReward` | `DELETE /v2/loyalties/rewards/{id}` | Not on allowlist | `deleteReward` | Setup only (teardown) |
| `batchAssignCardDefinitions` | `POST .../programs/{id}/card-definitions/batch` | Not on allowlist | `batchProgramCardDefinitionAssignments` | Setup only |
| `batchAssignEarningRules` | `POST .../programs/{id}/earning-rules/batch` | Not on allowlist | `batchProgramEarningRuleAssignments` | Setup only |
| `batchAssignRewards` | `POST .../programs/{id}/rewards/batch` | Not on allowlist | `batchProgramRewardAssignments` | Setup only |
| `request` | any | Shared transport | n/a | Internal |

---

## Covered via published SDK

### Members (`LV2ProgramsApi`)

| Method | HTTP | Depth | Notes |
|--------|------|-------|-------|
| `createProgramMember` | `POST .../members` | Flow | Customer id identification |
| `getProgramMember` | `GET .../members/{memberId}` | Basic | Id match; cards present |
| `listProgramMembers` | `GET .../members` | Basic | Created member in list |
| `getProgramMembership` | `GET .../memberships/{customerId}` | Smoke | Response present |
| `activateProgramMember` | `POST .../activate` | Basic | Status `ACTIVE` |
| `deactivateProgramMember` | `POST .../deactivate` | Basic | Status not `ACTIVE` |
| `deleteProgramMember` | `DELETE .../members/{memberId}` | Smoke | Cleanup only |

Not covered: batch create, update member, member activities.

### Cards / points (`LV2ProgramsApi`)

| Method | HTTP | Depth | Notes |
|--------|------|-------|-------|
| `adjustCardPoints` | `POST .../cards/{cardId}/points` | Flow | +100; wait for async balance |
| `listCardTransactions` | `GET .../transactions` | Basic | Non-empty after adjust |

Not covered: pending/expiring points (fixture uses `IMMEDIATE`; pending tests skipped).

### Order payments (`LV2ProgramsApi` + `OrdersApi`)

| Method | HTTP | Depth | Notes |
|--------|------|-------|-------|
| `OrdersApi.createOrder` | `POST /v1/orders` | Smoke | Pay-with-points order |
| `createMemberOrderPayment` | `POST .../orders/payments` | Flow | `DRY_RUN` + `CARD_BALANCE` |
| `listMemberOrderPayments` | `GET .../orders/payments` | Smoke | Response present |

### Reward purchases (`LV2ProgramsApi`)

| Method | HTTP | Depth | Notes |
|--------|------|-------|-------|
| `purchaseMemberReward` | `POST .../rewards/purchases` | Flow | Dry-run then `TRANSACTION` |
| `listMemberRewardPurchases` | `GET .../rewards/purchases` | Basic | Poll until `APPROVED` |
| `refundRewardPurchase` | `POST .../refund` | Flow | `policies.refund = ALLOW` |

### Examine (`LV2ExamineApi`)

| Method | HTTP | Depth | Notes |
|--------|------|-------|-------|
| `examineEarningRules` | `POST /v2/loyalties/examine/earning-rules` | Smoke | `SPECIFIC` / `customer.order.paid` |
| `examineRewards` | `POST /v2/loyalties/examine/rewards` | Smoke | Member id |

### Reports + GET helpers (subset)

| Method | API | Depth | Notes |
|--------|-----|-------|-------|
| `listProgramMembersSummaryReports` | `LV2ProgramsApi` | Smoke | Empty list OK |
| `listProgramRewardsSummaryReports` | `LV2ProgramsApi` | Smoke | Empty list OK |
| `listProgramMembersDailyReports` | `LV2ProgramsApi` | Smoke | `start_date` &lt; `end_date` |
| `listMemberCardDailyReports` | `LV2ProgramsApi` | Smoke | Same date rule |
| `getEarningRule` | `LV2EarningRulesApi` | Basic | Fixture id |
| `getReward` | `LV2RewardsApi` | Basic | Fixture id |

Not covered: other report endpoints, `LV2BenefitsApi`, real (non–dry-run) order payment.

### Customers (setup)

| Method | Depth | Notes |
|--------|-------|-------|
| `CustomersApi.createCustomer` | Smoke | Unique `source_id` |
| `CustomersApi.deleteCustomer` | Smoke | Cleanup |

---

## Teardown order

1. SDK: deactivate + delete member; delete customer (ignore 404).
2. HTTP: deactivate + delete program (clears assignments).
3. HTTP: deactivate + delete earning rule and reward.
4. HTTP: delete card definitions (423 if program/reward still reference them).

## How to run

From the OpenAPI repo:

```bash
npm run test-php-sdk
```

Or focused:

```bash
cd sdks/php && docker build -t php . && docker run --rm php php vendor/bin/codecept run Unit __tests__/Unit/13_LoyaltiesV2Test.php
```
