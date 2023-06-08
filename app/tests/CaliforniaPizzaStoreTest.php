<?php

namespace Tests;

use App\CaliforniaPizzaIngredientFactory;
use App\CaliforniaPizzaStore;
use App\PizzaType;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class CaliforniaPizzaStoreTest
 *
 * @covers \CaliforniaPizzaStore
 */
class CaliforniaPizzaStoreTest extends TestCase
{
    /**
     * @covers \CaliforniaPizzaStore::createPizza
     */
    public function testCreatePizza(): void
    {
        $pizzaType = PizzaType::CHEESE;

        $ingredientFactory = new CaliforniaPizzaIngredientFactory();
        $pizza = new ($pizzaType->recipe())($ingredientFactory);
        $pizza->setName($pizzaType->californiaName());

        $pizzaStore = new CaliforniaPizzaStore();

        $reflectionClass = new ReflectionClass(CaliforniaPizzaStore::class);
        $reflectionMethod = $reflectionClass->getMethod('createPizza');
        $reflectionMethod->setAccessible(true);

        $result = $reflectionMethod->invokeArgs($pizzaStore, [$pizzaType]);

        $this->assertEquals($pizza, $result);
    }
}