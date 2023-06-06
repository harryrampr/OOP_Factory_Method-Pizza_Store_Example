<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents eggplant as a type of vegetable topping.
 */
class EggPlant extends Veggies
{
    /**
     * Constructs a new instance of EggPlant.
     *
     * Sets the description of the vegetable topping to 'Egg Plant' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Egg Plant';
        parent::__construct();
    }
}