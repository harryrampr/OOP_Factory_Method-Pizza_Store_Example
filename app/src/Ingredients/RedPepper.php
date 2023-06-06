<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents red pepper as a type of vegetable topping.
 */
class RedPepper extends Veggies
{
    /**
     * Constructs a new instance of RedPepper.
     *
     * Sets the description of the vegetable topping to 'Red Pepper' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Red Pepper';
        parent::__construct();
    }
}