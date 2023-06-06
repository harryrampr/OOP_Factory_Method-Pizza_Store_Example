<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents plum tomato sauce as a type of sauce.
 */
class PlumTomatoSauce extends Sauce
{
    /**
     * Constructs a new instance of PlumTomatoSauce.
     *
     * Sets the description of the sauce to 'Plum Tomato Sauce' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Plum Tomato Sauce';
        parent::__construct();
    }
}