<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents mozzarella cheese as a type of cheese topping.
 */
class MozzarellaCheese extends Cheese
{
    /**
     * Constructs a new instance of MozzarellaCheese.
     *
     * Sets the description of the cheese topping to 'Mozzarella Cheese' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Mozzarella Cheese';
        parent::__construct();
    }
}