<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\BruschettaSauce;
use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\EggPlant;
use App\Ingredients\FreshClams;
use App\Ingredients\GoatCheese;
use App\Ingredients\Mushroom;
use App\Ingredients\Pepperoni;
use App\Ingredients\RedPepper;
use App\Ingredients\Sauce;
use App\Ingredients\SlicedPepperoni;
use App\Ingredients\Spinach;
use App\Ingredients\VeryThinCrustDough;

/**
 * A factory for creating ingredients used in California style pizzas.
 */
class CaliforniaPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * Creates a very thin crust dough.
     *
     * @return Dough A new instance of VeryThinCrustDough.
     */
    public function createDough(): Dough
    {
        return new VeryThinCrustDough();
    }

    /**
     * Creates a bruschetta sauce.
     *
     * @return Sauce A new instance of BruschettaSauce.
     */
    public function createSauce(): Sauce
    {
        return new BruschettaSauce();
    }

    /**
     * Creates goat cheese.
     *
     * @return Cheese A new instance of GoatCheese.
     */
    public function createCheese(): Cheese
    {
        return new GoatCheese();
    }

    /**
     * Creates an array of veggies including mushroom, red pepper, spinach, and eggplant.
     *
     * @return array An array of Veggie objects.
     */
    public function createVeggies(): array
    {
        return [
            new Mushroom(),
            new RedPepper(),
            new Spinach(),
            new EggPlant()
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