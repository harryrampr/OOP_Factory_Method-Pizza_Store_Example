<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents spinach as a type of vegetable topping.
 */
class Spinach extends Veggies
{
    /**
     * Constructs a new instance of Spinach.
     *
     * Sets the description of the vegetable topping to 'Spinach' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Spinach';
        parent::__construct();
    }
}