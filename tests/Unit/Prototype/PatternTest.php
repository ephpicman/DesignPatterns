<?php

declare(strict_types=1);

namespace Tests\Unit\Prototype;

use App\Prototype\Document;
use App\Prototype\DocumentRegistry;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testCreatesAnIndependentClone(): void
    {
        $registry = new DocumentRegistry();
        $registry->add('invoice', new Document('Invoice', ['type' => 'pdf']));

        $copy = $registry->create('invoice');
        $copy->title = 'Copy';
        $copy->metadata['type'] = 'html';

        self::assertSame('Invoice', $registry->create('invoice')->title);
        self::assertSame('pdf', $registry->create('invoice')->metadata['type']);
    }
}
