<?php

declare(strict_types=1);

namespace App\Strategy;

interface SortStrategy
{
    /** @param list<int> $values */
    public function sort(array $values): array;
}

final class AscendingSort implements SortStrategy
{
    public function sort(array $values): array
    {
        sort($values);
        return $values;
    }
}

final class Sorter
{
    public function __construct(private readonly SortStrategy $strategy)
    {
    }

    /** @param list<int> $values */
    public function sort(array $values): array
    {
        return $this->strategy->sort($values);
    }
}
