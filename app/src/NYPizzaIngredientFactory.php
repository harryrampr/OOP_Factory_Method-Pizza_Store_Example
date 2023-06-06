<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\FreshClams;
use App\Ingredients\Garlic;
use App\Ingredients\MarinaraSauce;
use App\Ingredients\Mushroom;
use App\Ingredients\Onion;
use App\Ingredients\Pepperoni;
use App\Ingredients\RedPepper;
use App\Ingredients\ReggianoCheese;
use App\Ingredients\Sauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\ThinCrustDough;

/**
 * A factory for creating ingredients used in New York style pizzas.
 */
class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * Creates a thin crust dough.
     *
     * @return Dough A new instance of ThinCrustDough.
     */
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    /**
     * Creates a marinara sauce.
     *
     * @return Sauce A new instance of MarinaraSauce.
     */
    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    /**
     * Creates Reggiano cheese.
     *
     * @return Cheese A new instance of ReggianoCheese.
     */
    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    /**
     * Creates an array of veggies including garlic, onion, mushroom, and red pepper.
     *
     * @return array An array of Veggie objects.
     */
    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper(),
        ];
    }

    /**
     * Creates sliced pepperoni.
     *
     * @return Pepperoni A new instance of SlicedPepperoni.
     */
    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    /**
     * Creates fresh clams.
     *
     * @return Clams A new instance of FreshClams.
     */
    public function createClams(): Clams
    {
        return new FreshClams();
    }
}