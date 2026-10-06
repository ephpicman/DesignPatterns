<?php

declare(strict_types=1);

namespace Tests\Unit\Adapter;

use App\Adapter\LegacyGateway;
use App\Adapter\PaymentAdapter;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testAdaptsAnIncompatibleInterface(): void
    {
        self::assertSame('charged 12.50', (new PaymentAdapter(new LegacyGateway()))->pay(1250));
    }
}
