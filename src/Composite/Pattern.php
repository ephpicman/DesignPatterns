<?php

declare(strict_types=1);

namespace App\Composite;

interface Component
{
    public function price(): int;
}

final class Product implements Component
{
    public function __construct(private readonly int $price)
    {
    }

    public function price(): int
    {
        return $this->price;
    }
}

final class Box implements Component
{
    /** @var list<Component> */
    private array $children = [];

    public function add(Component $component): self
    {
        $this->children[] = $component;
        return $this;
    }

    public function price(): int
    {
        return array_sum(array_map(static fn (Component $component): int => $component->price(), $this->children));
    }
}
