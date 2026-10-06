<?php

declare(strict_types=1);

namespace Tests\Unit\Singleton;

use App\Singleton\Configuration;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testReturnsTheSameInstance(): void
    {
        $first = Configuration::instance();
        $second = Configuration::instance();
        $first->set('environment', 'test');

        self::assertSame($first, $second);
        self::assertSame('test', $second->get('environment'));
    }
}
