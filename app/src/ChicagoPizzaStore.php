<?php
declare(strict_types=1);

namespace App;

/**
 * A pizza store specializing in Chicago style pizzas.
 */
class ChicagoPizzaStore extends PizzaStore
{
    /**
     * Creates a pizza of the specified type using the Chicago pizza ingredient factory.
     *
     * @param PizzaType $type The type of pizza to create.
     * @return Pizza A new instance of the specified pizza type.
     */
    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        $pizza = new ($type->recipe())($ingredientFactory);
        $pizza->setName($type->chicagoName());
        $pizza->setSliceType(PizzaSliceType::SQUARE);

        return $pizza;
    }
}