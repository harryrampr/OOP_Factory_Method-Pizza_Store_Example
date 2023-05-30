<?php
declare(strict_types=1);

namespace App;

class ChicagoPizzaStore extends PizzaStore
{

    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        $pizza = new ($type->recipe())($ingredientFactory);
        $pizza->setName($type->chicagoName());
        $pizza->setSliceType(PizzaSliceType::SQUARE);

        return $pizza;
    }
}