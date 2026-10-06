<?php

declare(strict_types=1);

namespace App\Mediator;

final class ChatRoom
{
    /** @var array<string, User> */
    private array $users = [];

    public function register(User $user): void
    {
        $this->users[$user->name] = $user;
    }

    public function send(string $from, string $message): void
    {
        foreach ($this->users as $name => $user) {
            if ($name !== $from) {
                $user->receive($from . ': ' . $message);
            }
        }
    }
}

final class User
{
    public string $lastMessage = '';

    public function __construct(public readonly string $name, private readonly ChatRoom $room)
    {
        $room->register($this);
    }

    public function send(string $message): void
    {
        $this->room->send($this->name, $message);
    }

    public function receive(string $message): void
    {
        $this->lastMessage = $message;
    }
}
