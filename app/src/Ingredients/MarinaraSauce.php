<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents marinara sauce as a type of sauce.
 */
class MarinaraSauce extends Sauce
{
    /**
     * Constructs a new instance of MarinaraSauce.
     *
     * Sets the description of the sauce to 'Marinara Sauce' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Marinara Sauce';
        parent::__construct();
    }
}