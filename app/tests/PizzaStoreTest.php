<?php

namespace Tests;

use App\Pizza;
use App\PizzaSize;
use App\PizzaStore;
use App\PizzaType;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Class PizzaStoreTest
 *
 * @covers \PizzaStore
 */
class PizzaStoreTest extends TestCase
{
    /**
     * @covers \PizzaStore::orderPizza
     */
    public function testOrderPizza(): void
    {
        $size = PizzaSize::SMALL;
        $type = PizzaType::CHEESE;

        $pizza = $this->createMock(Pizza::class);
        $pizza->expects($this->once())->method('setSize')->with($size);
        $pizza->expects($this->once())->method('prepare');
        $pizza->expects($this->once())->method('bake');
        $pizza->expects($this->once())->method('cut');
        $pizza->expects($this->once())->method('box');

        $pizzaStore = $this->getMockForAbstractClass(PizzaStore::class);
        $pizzaStore->expects($this->once())->method('createPizza')->with($type)->willReturn($pizza);

        $result = $pizzaStore->orderPizza($size, $type);

        $this->assertInstanceOf(Pizza::class, $result);
    }

    /**
     * @covers \PizzaStore::createPizza
     */
    public function testCreatePizza(): void
    {
        $pizzaStoreClass = new ReflectionClass(PizzaStore::class);
        $createPizzaMethod = $pizzaStoreClass->getMethod('createPizza');

        $this->assertTrue($createPizzaMethod->isAbstract());
        $this->assertTrue($createPizzaMethod->isProtected());
    }
}