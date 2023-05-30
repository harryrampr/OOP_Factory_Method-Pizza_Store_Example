<?php
declare(strict_types=1);

namespace App;

class CaliforniaPizzaStore extends PizzaStore
{

    protected function createPizza(PizzaType $type): Pizza
    {
        $ingredientFactory = new CaliforniaPizzaIngredientFactory();
        $pizza = new ($type->recipe())($ingredientFactory);
        $pizza->setName($type->californiaName());

        return $pizza;
    }
}