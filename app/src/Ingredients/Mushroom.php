<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents mushroom as a type of vegetable topping.
 */
class Mushroom extends Veggies
{
    /**
     * Constructs a new instance of Mushroom.
     *
     * Sets the description of the vegetable topping to 'Mushroom' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Mushroom';
        parent::__construct();
    }
}