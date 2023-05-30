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

class CaliforniaPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new VeryThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new BruschettaSauce();
    }

    public function createCheese(): Cheese
    {
        return new GoatCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Mushroom(),
            new RedPepper(),
            new Spinach(),
            new EggPlant()
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