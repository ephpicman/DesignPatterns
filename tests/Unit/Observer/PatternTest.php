<?php

declare(strict_types=1);

namespace Tests\Unit\Observer;

use App\Observer\EventLogger;
use App\Observer\Subject;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testNotifiesAllObservers(): void
    {
        $subject = new Subject();
        $logger = new EventLogger();
        $subject->attach($logger);
        $subject->notify('created');

        self::assertSame('created', $logger->lastEvent);
    }
}
