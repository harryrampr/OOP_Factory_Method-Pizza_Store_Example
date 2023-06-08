<?php

namespace Tests;

use App\PizzaSize;
use PHPUnit\Framework\TestCase;

/**
 * Test class for PizzaSize.
 */
class PizzaSizeTest extends TestCase
{
    /**
     * Test if PizzaSize is an enumerator.
     *
     * @return void
     */
    public function testPizzaSizeIsEnumerator(): void
    {
        $enumReflection = new \ReflectionEnum(PizzaSize::class);
        $this->assertTrue($enumReflection->isEnum());
    }

    /**
     * Test the cases of PizzaSize.
     *
     * @return void
     */
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
            /** @var \ReflectionEnumCase $case */
            $caseName = $case->getName();
            $caseValue = $case->getValue()->value;
            $this->assertContains($caseName, array_keys($expectedCases));
            $this->assertSame($expectedCases[$caseName], $caseValue);
        }
    }

    /**
     * Test the toString method of PizzaSize.
     *
     * @return void
     */
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
            /** @var \ReflectionEnumCase $case */
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaSize::$caseName")->toString());
        }
    }
}