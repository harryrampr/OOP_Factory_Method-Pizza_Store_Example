<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents black olives as a type of vegetable topping.
 */
class BlackOlives extends Veggies
{
    /**
     * Constructs a new instance of BlackOlives.
     *
     * Sets the description of the vegetable topping to 'Black Olives' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Black Olives';
        parent::__construct();
    }
}