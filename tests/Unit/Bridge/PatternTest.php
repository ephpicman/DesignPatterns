<?php

declare(strict_types=1);

namespace Tests\Unit\Bridge;

use App\Bridge\ArticlePage;
use App\Bridge\HtmlRenderer;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testSeparatesAbstractionFromImplementation(): void
    {
        self::assertSame('<h1>Article</h1>', (new ArticlePage(new HtmlRenderer()))->output());
    }
}
