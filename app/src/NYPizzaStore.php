<?php
declare(strict_types=1);

namespace App;

class NYPizzaStore extends PizzaStore
{

    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();
        $pizza = new ($type->recipe())($ingredientFactory);
        $pizza->setName($type->nyName());

        return $pizza;
    }
}