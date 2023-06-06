<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents goat cheese as a type of cheese topping.
 */
class GoatCheese extends Cheese
{
    /**
     * Constructs a new instance of GoatCheese.
     *
     * Sets the description of the cheese topping to 'Goat Cheese' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Goat Cheese';
        parent::__construct();
    }
}