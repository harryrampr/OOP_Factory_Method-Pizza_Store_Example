<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents onion as a type of vegetable topping.
 */
class Onion extends Veggies
{
    /**
     * Constructs a new instance of Onion.
     *
     * Sets the description of the vegetable topping to 'Onion' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Onion';
        parent::__construct();
    }
}