<?php

namespace Tests;

use App\ChicagoPizzaStore;
use App\ChicagoPizzaIngredientFactory;
use App\Pizza;
use App\PizzaSliceType;
use App\PizzaType;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class ChicagoPizzaStoreTest
 *
 * @covers \ChicagoPizzaStore
 */
class ChicagoPizzaStoreTest extends TestCase
{
    /**
     * @covers \ChicagoPizzaStore::createPizza
     */
    public function testCreatePizza(): void
    {
        $pizzaType = PizzaType::PEPPERONI;

        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        $pizza = new ($pizzaType->recipe())($ingredientFactory);
        $pizza->setName($pizzaType->chicagoName());
        $pizza->setSliceType(PizzaSliceType::SQUARE);

        $pizzaStore = new ChicagoPizzaStore();

        $reflectionClass = new ReflectionClass(ChicagoPizzaStore::class);
        $reflectionMethod = $reflectionClass->getMethod('createPizza');
        $reflectionMethod->setAccessible(true);

        $result = $reflectionMethod->invokeArgs($pizzaStore, [$pizzaType]);

        $this->assertInstanceOf(Pizza::class, $result);
        $this->assertEquals($pizza, $result);
    }
}