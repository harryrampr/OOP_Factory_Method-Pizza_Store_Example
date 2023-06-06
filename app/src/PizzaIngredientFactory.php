<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;

/**
 * Interface representing a pizza ingredient factory.
 * Concrete implementations of this interface will provide methods to create various pizza ingredients.
 */
interface PizzaIngredientFactory
{
    /**
     * Create the dough for the pizza.
     *
     * @return Dough The created dough.
     */
    public function createDough(): Dough;

    /**
     * Create the sauce for the pizza.
     *
     * @return Sauce The created sauce.
     */
    public function createSauce(): Sauce;

    /**
     * Create the cheese for the pizza.
     *
     * @return Cheese The created cheese.
     */
    public function createCheese(): Cheese;

    /**
     * Create the veggies for the pizza.
     *
     * @return array An array of created veggies.
     */
    public function createVeggies(): array;

    /**
     * Create the pepperoni for the pizza.
     *
     * @return Pepperoni The created pepperoni.
     */
    public function createPepperoni(): Pepperoni;

    /**
     * Create the clams for the pizza.
     *
     * @return Clams The created clams.
     */
    public function createClams(): Clams;
}