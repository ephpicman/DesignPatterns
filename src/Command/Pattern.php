<?php

declare(strict_types=1);

namespace App\Command;

interface Command
{
    public function execute(): string;
}

final class Light
{
    public function on(): string
    {
        return 'on';
    }
}

final class TurnOnLight implements Command
{
    public function __construct(private readonly Light $light)
    {
    }

    public function execute(): string
    {
        return $this->light->on();
    }
}

final class RemoteControl
{
    public function press(Command $command): string
    {
        return $command->execute();
    }
}
