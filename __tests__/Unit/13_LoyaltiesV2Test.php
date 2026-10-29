<?php

require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/loyalty_v2_fixture.php';

use PHPUnit\Framework\TestCase;

/**
 * Loyalty v2 e2e. Prompt 02: fixture setup/teardown only.
 * Later prompts extend this class with SDK member and runtime coverage.
 */
class LoyaltiesV2Test extends TestCase
{
    public function testSetupAndTeardownCreatesIds(): void
    {
        if (!LoyaltyV2Fixture::hasCredentials()) {
            $this->markTestSkipped('Missing X_APP_ID / X_APP_TOKEN for Loyalty v2 HTTP setup.');
        }

        $ctx = null;
        try {
            $ctx = LoyaltyV2Fixture::setup();
            $this->assertNotEmpty($ctx['programId']);
            $this->assertNotEmpty($ctx['cardDefinitionId']);
            $this->assertNotEmpty($ctx['rewardCardDefinitionId']);
            $this->assertNotEmpty($ctx['earningRuleId']);
            $this->assertNotEmpty($ctx['rewardId']);
            $this->assertNotSame(
                $ctx['cardDefinitionId'],
                $ctx['rewardCardDefinitionId'],
                'Spend card and reward credit card must differ'
            );
        } finally {
            LoyaltyV2Fixture::teardown($ctx);
        }
    }
}
