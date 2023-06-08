<?php

namespace Tests\Recipes;

use App\Recipes\VeggiePizza;
use App\Pizza;
use App\PizzaIngredientFactory;
use PHPUnit\Framework\TestCase;
use App\PizzaSize;
use ReflectionClass;

/**
 * Class VeggiePizzaTest
 *
 * Test case for the VeggiePizza class.
 */
class VeggiePizzaTest extends TestCase
{
    /**
     * Test the construction of a VeggiePizza instance.
     */
    public function testConstruct(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new VeggiePizza($ingredientFactory);

        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertInstanceOf(VeggiePizza::class, $pizza);
    }

    /**
     * Test the property type of the VeggiePizza class using reflection.
     */
    public function testPropertyType(): void
    {
        $reflectionClass = new ReflectionClass(VeggiePizza::class);
        $reflectionProperty = $reflectionClass->getProperty('ingredientFactory');
        $propertyType = $reflectionProperty->getType()->getName();

        $this->assertEquals(PizzaIngredientFactory::class, $propertyType);
    }

    /**
     * Test the prepare method of the VeggiePizza class.
     */
    public function testPrepare(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new VeggiePizza($ingredientFactory);

        $this->expectOutputString('<h2>Preparing large Veggie Pizza</h2>' . PHP_EOL);

        $pizza->setSize(PizzaSize::LARGE);
        $pizza->setName('Veggie Pizza');
        $pizza->prepare();
    }
}