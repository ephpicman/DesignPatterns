<?php

declare(strict_types=1);

namespace App\Singleton;

final class Configuration
{
    private static ?self $instance = null;

    private function __construct(private array $values = [])
    {
    }

    public static function instance(): self
    {
        return self::$instance ??= new self();
    }

    public function set(string $key, mixed $value): void
    {
        $this->values[$key] = $value;
    }

    public function get(string $key): mixed
    {
        return $this->values[$key] ?? null;
    }
}
