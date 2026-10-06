<?php

declare(strict_types=1);

namespace Tests\Unit\Memento;

use App\Memento\Editor;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testRestoresPreviousState(): void
    {
        $editor = new Editor();
        $editor->write('first');
        $snapshot = $editor->save();
        $editor->write('second');
        $editor->restore($snapshot);

        self::assertSame('first', $editor->text());
    }
}
