<?php

namespace Tests;

use App\PizzaSize;
use PHPUnit\Framework\TestCase;

class PizzaSizeTest extends TestCase
{
    public function testPizzaSizeIsEnumerator(): void
    {
        $enumReflection = new \ReflectionEnum(PizzaSize::class);
        $this->assertTrue($enumReflection->isEnum());
    }

    public function testPizzaSizeCases(): void
    {
        $expectedCases = [
            'PERSONAL' => 4,
            'SMALL' => 6,
            'MEDIUM' => 8,
            'LARGE' => 10,
            'XLARGE' => 12,
        ];

        $enumReflection = new \ReflectionEnum(PizzaSize::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedCases), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $caseValue = $case->getValue()->value;
            $this->assertContains($caseName, array_keys($expectedCases));
            $this->assertSame($expectedCases[$caseName], $caseValue);
        }
    }

    public function testPizzaSizeToStringMethod(): void
    {
        $expectedResults = [
            'PERSONAL' => 'personal',
            'SMALL' => 'small',
            'MEDIUM' => 'medium',
            'LARGE' => 'large',
            'XLARGE' => 'x-large',
        ];

        $enumReflection = new \ReflectionEnum(PizzaSize::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaSize::$caseName")->toString());
        }
    }
}