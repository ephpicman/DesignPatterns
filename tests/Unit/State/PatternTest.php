<?php

declare(strict_types=1);

namespace Tests\Unit\State;

use App\State\Post;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testDelegatesBehaviourToTheCurrentState(): void
    {
        $post = new Post();

        self::assertSame('published', $post->publish());
        self::assertSame('already published', $post->publish());
    }
}
