<?php

declare(strict_types=1);

namespace Tests\Unit\Visitor;

use App\Visitor\Book;
use App\Visitor\Movie;
use App\Visitor\PricingVisitor;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testDispatchesWorkToTheConcreteVisitorMethod(): void
    {
        $visitor = new PricingVisitor();

        self::assertSame('book:PHP', (new Book('PHP'))->accept($visitor));
        self::assertSame('movie:PHP', (new Movie('PHP'))->accept($visitor));
    }
}
