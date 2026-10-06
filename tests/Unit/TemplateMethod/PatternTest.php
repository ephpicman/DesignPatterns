<?php

declare(strict_types=1);

namespace Tests\Unit\TemplateMethod;

use App\TemplateMethod\CsvImporter;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testDefinesAnAlgorithmSkeletonWithCustomSteps(): void
    {
        self::assertSame('CSV:FILE.CSV', (new CsvImporter())->import('file.csv'));
    }
}
