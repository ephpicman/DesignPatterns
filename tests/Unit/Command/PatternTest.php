<?php

declare(strict_types=1);

namespace Tests\Unit\Command;

use App\Command\Light;
use App\Command\RemoteControl;
use App\Command\TurnOnLight;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testEncapsulatesAnActionAsAnObject(): void
    {
        self::assertSame('on', (new RemoteControl())->press(new TurnOnLight(new Light())));
    }
}
