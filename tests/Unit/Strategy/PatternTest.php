<?php

declare(strict_types=1);

namespace Tests\Unit\Strategy;

use App\Strategy\AscendingSort;
use App\Strategy\Sorter;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testCanSwapAnAlgorithmAtRuntime(): void
    {
        self::assertSame([1, 2, 3], (new Sorter(new AscendingSort()))->sort([3, 1, 2]));
    }
}
