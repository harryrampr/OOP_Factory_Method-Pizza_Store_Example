<?php

namespace Tests;

use App\PizzaType;
use App\Recipes\CheesePizza;
use App\Recipes\ClamPizza;
use App\Recipes\PepperoniPizza;
use App\Recipes\VeggiePizza;
use PHPUnit\Framework\TestCase;

class PizzaTypeTest extends TestCase
{
    public function testPizzaTypeIsEnumerator(): void
    {
        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $this->assertTrue($enumReflection->isEnum());
    }

    public function testPizzaTypeCases(): void
    {
        $expectedCases = [
            'CHEESE' => 0,
            'CLAM' => 1,
            'PEPPERONI' => 2,
            'VEGGIE' => 3,
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedCases), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $caseValue = $case->getValue()->value;
            $this->assertContains($caseName, array_keys($expectedCases));
            $this->assertSame($expectedCases[$caseName], $caseValue);
        }
    }

    public function testPizzaTypeRecipeMethod(): void
    {
        $expectedResults = [
            'CHEESE' => CheesePizza::class,
            'CLAM' => ClamPizza::class,
            'PEPPERONI' => PepperoniPizza::class,
            'VEGGIE' => VeggiePizza::class,
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaType::$caseName")->recipe());
        }
    }

    public function testPizzaTypeToStringMethod(): void
    {
        $expectedResults = [
            'CHEESE' => 'cheese',
            'CLAM' => 'clam',
            'PEPPERONI' => 'pepperoni',
            'VEGGIE' => 'veggie',
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaType::$caseName")->toString());
        }
    }

    public function testPizzaTypeNyNameMethod(): void
    {
        $expectedResults = [
            'CHEESE' => 'New York Style Cheese Pizza',
            'CLAM' => 'New York Style Clam Pizza',
            'PEPPERONI' => 'New York Style Pepperoni Pizza',
            'VEGGIE' => 'New York Style Veggie Pizza',
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaType::$caseName")->nyName());
        }
    }

    public function testPizzaTypeChicagoNameMethod(): void
    {
        $expectedResults = [
            'CHEESE' => 'Chicago Style Cheese Pizza',
            'CLAM' => 'Chicago Style Clam Pizza',
            'PEPPERONI' => 'Chicago Style Pepperoni Pizza',
            'VEGGIE' => 'Chicago Style Veggie Pizza',
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaType::$caseName")->chicagoName());
        }
    }

    public function testPizzaTypeCaliforniaNameMethod(): void
    {
        $expectedResults = [
            'CHEESE' => 'California Style Cheese Pizza',
            'CLAM' => 'California Style Clam Pizza',
            'PEPPERONI' => 'California Style Pepperoni Pizza',
            'VEGGIE' => 'California Style Veggie Pizza',
        ];

        $enumReflection = new \ReflectionEnum(PizzaType::class);
        $cases = $enumReflection->getCases();
        $this->assertSame(count($expectedResults), count($cases));

        foreach ($cases as $case) {
            $caseName = $case->getName();
            $this->assertSame($expectedResults[$caseName], constant("App\PizzaType::$caseName")->californiaName());
        }
    }
}