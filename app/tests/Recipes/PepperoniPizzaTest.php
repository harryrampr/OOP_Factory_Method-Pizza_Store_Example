<?php

namespace Tests\Recipes;


use App\Pizza;
use App\PizzaIngredientFactory;
use App\Recipes\PepperoniPizza;
use PHPUnit\Framework\TestCase;
use App\PizzaSize;
use ReflectionClass;

/**
 * Class PepperoniPizzaTest
 *
 * Test case for the PepperoniPizza class.
 */
class PepperoniPizzaTest extends TestCase
{
    /**
     * Test the construction of a PepperoniPizza instance.
     */
    public function testConstruct(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new PepperoniPizza($ingredientFactory);

        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertInstanceOf(PepperoniPizza::class, $pizza);
    }

    /**
     * Test the property type of the PepperoniPizza class using reflection.
     */
    public function testPropertyType(): void
    {
        $reflectionClass = new ReflectionClass(PepperoniPizza::class);
        $reflectionProperty = $reflectionClass->getProperty('ingredientFactory');
        $propertyType = $reflectionProperty->getType()->getName();

        $this->assertEquals(PizzaIngredientFactory::class, $propertyType);
    }

    /**
     * Test the prepare method of the PepperoniPizza class.
     */
    public function testPrepare(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new PepperoniPizza($ingredientFactory);

        $this->expectOutputString('<h2>Preparing large Pepperoni Pizza</h2>' . PHP_EOL);

        $pizza->setSize(PizzaSize::LARGE);
        $pizza->setName('Pepperoni Pizza');
        $pizza->prepare();
    }
}