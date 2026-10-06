<?php

declare(strict_types=1);

namespace App\Builder;

final class House
{
    public function __construct(
        public readonly int $rooms,
        public readonly bool $garage,
        public readonly bool $garden,
    ) {
    }
}

final class HouseBuilder
{
    private int $rooms = 1;
    private bool $garage = false;
    private bool $garden = false;

    public function rooms(int $rooms): self
    {
        $this->rooms = $rooms;
        return $this;
    }

    public function withGarage(): self
    {
        $this->garage = true;
        return $this;
    }

    public function withGarden(): self
    {
        $this->garden = true;
        return $this;
    }

    public function build(): House
    {
        return new House($this->rooms, $this->garage, $this->garden);
    }
}
