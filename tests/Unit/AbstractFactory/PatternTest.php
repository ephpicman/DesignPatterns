<?php

declare(strict_types=1);

namespace Tests\Unit\AbstractFactory;

use App\AbstractFactory\Application;
use App\AbstractFactory\WindowsFactory;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testCreatesACompatibleFamily(): void
    {
        self::assertSame('Windows button + Windows checkbox', new Application(new WindowsFactory())->render());
    }
}
