<?php

declare(strict_types=1);

namespace Tests\Unit\Iterator;

use App\Iterator\BookCollection;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testTraversesACollectionWithoutExposingItsStorage(): void
    {
        $books = new BookCollection();
        $books->add('Clean Code');
        $books->add('Design Patterns');

        self::assertSame(['Clean Code', 'Design Patterns'], iterator_to_array($books));
    }
}
