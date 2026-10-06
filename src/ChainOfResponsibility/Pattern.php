<?php

declare(strict_types=1);

namespace App\ChainOfResponsibility;

abstract class Handler
{
    private ?self $next = null;

    public function setNext(self $handler): self
    {
        $this->next = $handler;
        return $handler;
    }

    public function handle(int $amount): string
    {
        if ($this->next !== null) {
            return $this->next->handle($amount);
        }

        return 'unhandled';
    }
}

final class Manager extends Handler
{
    public function handle(int $amount): string
    {
        return $amount <= 1000 ? 'manager' : parent::handle($amount);
    }
}

final class Director extends Handler
{
    public function handle(int $amount): string
    {
        return $amount <= 5000 ? 'director' : parent::handle($amount);
    }
}
