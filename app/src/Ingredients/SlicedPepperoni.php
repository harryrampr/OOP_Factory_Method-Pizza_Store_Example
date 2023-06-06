<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents sliced pepperoni as a type of pepperoni topping.
 */
class SlicedPepperoni extends Pepperoni
{
    /**
     * Constructs a new instance of SlicedPepperoni.
     *
     * Sets the description of the pepperoni topping to 'Sliced Pepperoni' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Sliced Pepperoni';
        parent::__construct();
    }
}