<?php
declare(strict_types=1);

namespace App;

/**
 * Abstract class representing a pizza store.
 */
abstract class PizzaStore
{
    /**
     * Order a pizza of the specified size and type.
     *
     * @param PizzaSize $size The size of the pizza.
     * @param PizzaType $type The type of the pizza.
     * @return Pizza The ordered pizza.
     */
    public function orderPizza(PizzaSize $size, PizzaType $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->setSize($size);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * Create a pizza of the specified type.
     *
     * This is an abstract method that must be implemented by concrete pizza stores.
     *
     * @param PizzaType $type The type of the pizza.
     * @return Pizza The created pizza.
     */
    abstract protected function createPizza(PizzaType $type): Pizza;
}