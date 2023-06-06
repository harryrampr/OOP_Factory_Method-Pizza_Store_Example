<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents bruschetta sauce as a type of sauce.
 */
class BruschettaSauce extends Sauce
{
    /**
     * Constructs a new instance of BruschettaSauce.
     *
     * Sets the description of the sauce to 'Bruschetta Sauce' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Bruschetta Sauce';
        parent::__construct();
    }
}