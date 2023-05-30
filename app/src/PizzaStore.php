<?php
declare(strict_types=1);

namespace App;

abstract class PizzaStore
{
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

    abstract protected function createPizza(PizzaType $type): Pizza;

}