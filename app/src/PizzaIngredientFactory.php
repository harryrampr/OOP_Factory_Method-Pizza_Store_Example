<?php
declare(strict_types=1);

namespace App;

use App\Ingredients\Cheese;
use App\Ingredients\Clams;
use App\Ingredients\Dough;
use App\Ingredients\Pepperoni;
use App\Ingredients\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClams(): Clams;

}