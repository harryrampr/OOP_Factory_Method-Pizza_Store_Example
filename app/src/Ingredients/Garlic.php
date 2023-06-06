<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents garlic as a type of vegetable topping.
 */
class Garlic extends Veggies
{
    /**
     * Constructs a new instance of Garlic.
     *
     * Sets the description of the vegetable topping to 'Garlic' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Garlic';
        parent::__construct();
    }
}