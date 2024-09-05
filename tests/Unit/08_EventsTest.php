<?php
require_once __DIR__ . '/../lib/config.php';
require_once __DIR__ . '/../lib/events.php';
require_once __DIR__ . '/../lib/utils.php';
require_once __DIR__ . '/../lib/voucherify.php';

use PHPUnit\Framework\TestCase;

class EventsTest extends TestCase
{
    private $eventsApiInstance;

    protected function setUp(): void
    {
        $this->eventsApiInstance = Config::eventsApiInstance();
    }

    public function testCreateAndTrackCustomEvent()
    {
        $createdEvent = createEvent($this->eventsApiInstance);

        $snapshot = 'events/createdEvent';
        $keysToRemove = ['id', 'source_id'];
        $filteredSnapshot = filterSnapshot($snapshot, $keysToRemove);

        $this->assertTrue(validateDeepMatch($filteredSnapshot, $createdEvent), 'Error during test with creating and tracking custom event');
    }
}
