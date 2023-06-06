<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\BlackOlives;
use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\FrozenClam;
use App\Ingredients\Garlic;
use App\Ingredients\MozzarellaCheese;
use App\Ingredients\Mushroom;
use App\Ingredients\Onion;
use App\Ingredients\Pepperoni;
use App\Ingredients\PlumTomatoSauce;
use App\Ingredients\Sauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\ThickCrustDough;

/**
 * A factory for creating ingredients used in Chicago style pizzas.
 */
class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * Creates a thick crust dough.
     *
     * @return Dough A new instance of ThickCrustDough.
     */
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    /**
     * Creates a plum tomato sauce.
     *
     * @return Sauce A new instance of PlumTomatoSauce.
     */
    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    /**
     * Creates mozzarella cheese.
     *
     * @return Cheese A new instance of MozzarellaCheese.
     */
    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    /**
     * Creates an array of veggies including garlic, onion, mushroom, and black olives.
     *
     * @return array An array of Veggie objects.
     */
    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new BlackOlives(),
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
     * Creates frozen clams.
     *
     * @return Clams A new instance of FrozenClam.
     */
    public function createClams(): Clams
    {
        return new FrozenClam();
    }
}