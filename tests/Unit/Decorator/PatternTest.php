<?php

declare(strict_types=1);

namespace Tests\Unit\Decorator;

use App\Decorator\EmailNotifier;
use App\Decorator\SmsDecorator;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testAddsBehaviourWithoutChangingTheWrappedObject(): void
    {
        $notifier = new SmsDecorator(new EmailNotifier());

        self::assertSame('email:hello|sms:hello', $notifier->send('hello'));
    }
}
