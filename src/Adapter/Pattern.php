<?php

declare(strict_types=1);

namespace App\Adapter;

interface PaymentProcessor
{
    public function pay(int $cents): string;
}

final class LegacyGateway
{
    public function charge(float $amount): string
    {
        return sprintf('charged %.2f', $amount);
    }
}

final class PaymentAdapter implements PaymentProcessor
{
    public function __construct(private readonly LegacyGateway $gateway)
    {
    }

    public function pay(int $cents): string
    {
        return $this->gateway->charge($cents / 100);
    }
}
