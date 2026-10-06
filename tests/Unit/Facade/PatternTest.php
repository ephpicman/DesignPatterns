<?php

declare(strict_types=1);

namespace Tests\Unit\Facade;

use App\Facade\Inventory;
use App\Facade\OrderFacade;
use App\Facade\Payment;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testProvidesAHighLevelOperation(): void
    {
        self::assertTrue((new OrderFacade(new Inventory(), new Payment()))->place('SKU-1', 1000));
        self::assertFalse((new OrderFacade(new Inventory(), new Payment()))->place('', 1000));
    }
}
