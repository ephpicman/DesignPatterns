<?php

declare(strict_types=1);

namespace Tests\Unit\FactoryMethod;

use App\FactoryMethod\EmailNotificationCreator;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testCreatorUsesItsConcreteProduct(): void
    {
        self::assertSame('Email: hello', new EmailNotificationCreator()->notify('hello'));
    }
}
