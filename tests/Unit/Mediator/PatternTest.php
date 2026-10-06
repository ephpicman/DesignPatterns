<?php

declare(strict_types=1);

namespace Tests\Unit\Mediator;

use App\Mediator\ChatRoom;
use App\Mediator\User;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testCentralizesCommunication(): void
    {
        $room = new ChatRoom();
        $alice = new User('Alice', $room);
        $bob = new User('Bob', $room);

        $alice->send('Hello');

        self::assertSame('Alice: Hello', $bob->lastMessage);
        self::assertSame('', $alice->lastMessage);
    }
}
