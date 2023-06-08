<?php

namespace Tests;

use App\PizzaSliceType;
use PHPUnit\Framework\TestCase;

class PizzaSliceTypeTest extends TestCase
{
    public function testPizzaSliceTypeIsEnumerator(): void
    {
        $enumReflection = new \ReflectionEnum(PizzaSliceType::class);
        $this->assertTrue($enumReflection->isEnum());
    }

    public function testPizzaSliceTypeCases(): void
    {
        $expectedCases = ['DIAGONAL' => 0, 'SQUARE' => 1];

        $enumReflection = new \ReflectionEnum(PizzaSliceType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedCases), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $caseValue = $case->getValue()->value;
            $this->assertContains($caseName, array_keys($expectedCases));
            $this->assertSame($expectedCases[$caseName], $caseValue);
        }
    }

    public function testPizzaSliceToStringMethod(): void
    {
        $expectedResults = ['DIAGONAL' => 'diagonal', 'SQUARE' => 'square'];

        $enumReflection = new \ReflectionEnum(PizzaSliceType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaSliceType::$caseName")->toString());
        }
    }
}