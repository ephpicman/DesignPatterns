<?php

declare(strict_types=1);

namespace App\Facade;

final class Inventory
{
    public function reserve(string $sku): bool
    {
        return $sku !== '';
    }
}

final class Payment
{
    public function charge(int $cents): bool
    {
        return $cents > 0;
    }
}

final class OrderFacade
{
    public function __construct(
        private readonly Inventory $inventory,
        private readonly Payment $payment,
    ) {
    }

    public function place(string $sku, int $cents): bool
    {
        return $this->inventory->reserve($sku) && $this->payment->charge($cents);
    }
}
