<?php

declare(strict_types=1);

namespace Tests\Unit\Proxy;

use App\Proxy\LazyImageProxy;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testDefersTheRealObjectUntilUse(): void
    {
        $proxy = new LazyImageProxy('photo.jpg');

        self::assertSame('display:photo.jpg', $proxy->display());
        self::assertSame('display:photo.jpg', $proxy->display());
    }
}
