<?php

declare(strict_types=1);

namespace App\Iterator;

use IteratorAggregate;
use Traversable;

final class BookCollection implements IteratorAggregate
{
    /** @var list<string> */
    private array $books = [];

    public function add(string $book): void
    {
        $this->books[] = $book;
    }

    /** @return Traversable<int, string> */
    public function getIterator(): Traversable
    {
        yield from $this->books;
    }
}
