<?php

namespace Tests\Recipes;

use App\Recipes\ClamPizza;
use App\PizzaSize;
use PHPUnit\Framework\TestCase;
use App\Pizza;
use App\PizzaIngredientFactory;
use ReflectionClass;

/**
 * Class ClamPizzaTest
 *
 * Test case for the ClamPizza class.
 */
class ClamPizzaTest extends TestCase
{
    /**
     * Test the construction of a ClamPizza instance.
     */
    public function testConstruct(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new ClamPizza($ingredientFactory);

        $this->assertInstanceOf(Pizza::class, $pizza);
        $this->assertInstanceOf(ClamPizza::class, $pizza);
    }

    /**
     * Test the property type of the ClamPizza class using reflection.
     */
    public function testPropertyType(): void
    {
        $reflectionClass = new ReflectionClass(ClamPizza::class);
        $reflectionProperty = $reflectionClass->getProperty('ingredientFactory');
        $propertyType = $reflectionProperty->getType()->getName();

        $this->assertEquals(PizzaIngredientFactory::class, $propertyType);
    }

    /**
     * Test the prepare method of the ClamPizza class.
     */
    public function testPrepare(): void
    {
        $ingredientFactory = $this->createMock(PizzaIngredientFactory::class);
        $pizza = new ClamPizza($ingredientFactory);

        $this->expectOutputString('<h2>Preparing small Clam Pizza</h2>' . PHP_EOL);

        $pizza->setSize(PizzaSize::SMALL);
        $pizza->setName('Clam Pizza');
        $pizza->prepare();
    }

}