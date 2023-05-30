<?php
declare(strict_types=1);

namespace App\Recipes;

use App\Pizza;
use App\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    private PizzaIngredientFactory $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare(): void
    {
        echo sprintf('<h2 class="text-xl font-medium">Preparing %s %s</h2>%s',
            $this->size->toString(), $this->name, PHP_EOL);
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
    }
}