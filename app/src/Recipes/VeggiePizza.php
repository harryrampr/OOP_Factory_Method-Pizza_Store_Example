<?php
declare(strict_types=1);

namespace App\Recipes;

use App\Pizza;
use App\PizzaIngredientFactory;

/**
 * Concrete implementation of the Veggie Pizza.
 */
class VeggiePizza extends Pizza
{
    private PizzaIngredientFactory $ingredientFactory;

    /**
     * VeggiePizza constructor.
     *
     * @param PizzaIngredientFactory $ingredientFactory The ingredient factory used to create pizza ingredients.
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    /**
     * Prepare the veggie pizza by creating its dough, sauce, cheese, and veggies.
     */
    public function prepare(): void
    {
        echo sprintf('<h2>Preparing %s %s</h2>%s',
            $this->size->toString(), $this->name, PHP_EOL);
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}