<?php

declare(strict_types=1);

namespace Tests\Unit\Composite;

use App\Composite\Box;
use App\Composite\Product;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testTreatsLeavesAndCompositesUniformly(): void
    {
        $box = new Box();
        $box->add(new Product(100))->add(new Product(250));

        self::assertSame(350, $box->price());
    }
}
