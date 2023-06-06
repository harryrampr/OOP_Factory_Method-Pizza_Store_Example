<?php
declare(strict_types=1);

namespace App;

/**
 * A pizza store specializing in California style pizzas.
 */
class CaliforniaPizzaStore extends PizzaStore
{
    /**
     * Creates a pizza of the specified type using the California pizza ingredient factory.
     *
     * @param PizzaType $type The type of pizza to create.
     * @return Pizza A new instance of the specified pizza type.
     */
    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();
        $pizza = new ($type->recipe())($ingredientFactory);
        $pizza->setName($type->californiaName());

        return $pizza;
    }
}