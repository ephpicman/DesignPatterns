<?php

declare(strict_types=1);

namespace Tests\Unit\Flyweight;

use App\Flyweight\StyleFactory;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testSharesIntrinsicState(): void
    {
        $factory = new StyleFactory();

        self::assertSame($factory->style('Inter', 16), $factory->style('Inter', 16));
        self::assertNotSame($factory->style('Inter', 16), $factory->style('Inter', 18));
    }
}
