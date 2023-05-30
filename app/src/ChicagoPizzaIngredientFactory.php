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

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new BlackOlives(),
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FrozenClam();
    }
}