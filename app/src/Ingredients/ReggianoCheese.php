<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents Reggiano cheese as a type of cheese topping.
 */
class ReggianoCheese extends Cheese
{
    /**
     * Constructs a new instance of ReggianoCheese.
     *
     * Sets the description of the cheese topping to 'Reggiano Cheese' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Reggiano Cheese';
        parent::__construct();
    }
}