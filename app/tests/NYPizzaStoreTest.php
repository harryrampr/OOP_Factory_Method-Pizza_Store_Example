<?php

namespace Tests;

use App\NYPizzaIngredientFactory;
use App\NYPizzaStore;
use App\Pizza;
use App\PizzaType;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class NYPizzaStoreTest
 *
 * @covers \NYPizzaStore
 */
class NYPizzaStoreTest extends TestCase
{
    /**
     * @covers \NYPizzaStore::createPizza
     */
    public function testCreatePizza(): void
    {
        $pizzaType = PizzaType::CLAM;

        $ingredientFactory = new NYPizzaIngredientFactory();
        $pizza = new ($pizzaType->recipe())($ingredientFactory);
        $pizza->setName($pizzaType->nyName());

        $pizzaStore = new NYPizzaStore();

        $reflectionClass = new ReflectionClass(NYPizzaStore::class);
        $reflectionMethod = $reflectionClass->getMethod('createPizza');
        $reflectionMethod->setAccessible(true);

        $result = $reflectionMethod->invokeArgs($pizzaStore, [$pizzaType]);

        $this->assertInstanceOf(Pizza::class, $result);
        $this->assertEquals($pizza, $result);
    }
}