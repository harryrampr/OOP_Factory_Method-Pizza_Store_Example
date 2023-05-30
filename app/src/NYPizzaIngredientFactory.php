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

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(), new Onion(), new Mushroom(), new RedPepper()
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FreshClams();
    }
}