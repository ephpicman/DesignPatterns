<?php

declare(strict_types=1);

namespace Tests\Unit\Builder;

use App\Builder\HouseBuilder;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testBuildsAnObjectStepByStep(): void
    {
        $house = new HouseBuilder()->rooms(3)->withGarage()->withGarden()->build();

        self::assertSame(3, $house->rooms);
        self::assertTrue($house->garage);
        self::assertTrue($house->garden);
    }
}
