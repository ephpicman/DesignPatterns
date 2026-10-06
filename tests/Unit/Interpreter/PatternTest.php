<?php

declare(strict_types=1);

namespace Tests\Unit\Interpreter;

use App\Interpreter\AndExpression;
use App\Interpreter\Variable;
use PHPUnit\Framework\TestCase;

final class PatternTest extends TestCase
{
    public function testEvaluatesAnExpressionAgainstContext(): void
    {
        $expression = new AndExpression(new Variable('admin'), new Variable('active'));

        self::assertTrue($expression->interpret(['admin' => true, 'active' => true]));
        self::assertFalse($expression->interpret(['admin' => true, 'active' => false]));
    }
}
