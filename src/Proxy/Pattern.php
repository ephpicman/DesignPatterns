<?php

declare(strict_types=1);

namespace App\Proxy;

interface Image
{
    public function display(): string;
}

final class RealImage implements Image
{
    public function __construct(private readonly string $file)
    {
    }

    public function display(): string
    {
        return 'display:' . $this->file;
    }
}

final class LazyImageProxy implements Image
{
    private ?RealImage $image = null;

    public function __construct(private readonly string $file)
    {
    }

    public function display(): string
    {
        return ($this->image ??= new RealImage($this->file))->display();
    }
}
