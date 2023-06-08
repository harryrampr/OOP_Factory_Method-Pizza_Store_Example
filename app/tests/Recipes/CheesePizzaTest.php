<?php

namespace Tests\Recipes;

use App\PizzaSize;
use App\Recipes\CheesePizza;
use PHPUnit\Framework\TestCase;
use App\Pizza;
use App\PizzaIngredientFactory;
use ReflectionClass;

/**
 * Class CheesePizzaTest
 *
 * Test case for the CheesePizza class.
 */
class CheesePizzaTest extends TestCase
{
    /**
     * Test the construction of a CheesePizza instance.
     */
    public function testConstruct(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new CheesePizza($ingredientFactory);

        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /**
     * Test the property type of the CheesePizza class using reflection.
     */
    public function testPropertyType(): void
    {
        $reflectionClass = new ReflectionClass(CheesePizza::class);
        $reflectionProperty = $reflectionClass->getProperty('ingredientFactory');
        $propertyType = $reflectionProperty->getType()->getName();

        $this->assertEquals(PizzaIngredientFactory::class, $propertyType);
    }

    /**
     * Test the prepare method of the CheesePizza class.
     */
    public function testPrepare(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new CheesePizza($ingredientFactory);

        $this->expectOutputString('<h2>Preparing large Cheese Pizza</h2>' . PHP_EOL);

        $pizza->setSize(PizzaSize::LARGE);
        $pizza->setName('Cheese Pizza');
        $pizza->prepare();
    }

}