<?php

namespace Tests;

use App\PizzaIngredientFactory;
use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionMethod;

class PizzaIngredientFactoryTest extends TestCase
{
    public function testPizzaIngredientFactoryIsInterface(): void
    {
        $reflectionClass = new ReflectionClass(PizzaIngredientFactory::class);
        $this->assertTrue($reflectionClass->isInterface());
    }

    public function testPizzaIngredientFactoryMethods(): void
    {
        $reflectionClass = new ReflectionClass(PizzaIngredientFactory::class);
        $methods = $reflectionClass->getMethods(ReflectionMethod::IS_PUBLIC);

        $requiredMethods = [
            'createDough',
            'createSauce',
            'createCheese',
            'createVeggies',
            'createPepperoni',
            'createClams',
        ];

        foreach ($methods as $method) {
            $this->assertTrue($method->isPublic());
            $this->assertTrue(in_array($method->getName(), $requiredMethods, true));
        }

        $this->assertCount(count($requiredMethods), $methods);
    }
}