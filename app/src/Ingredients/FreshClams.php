<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents fresh clams as a type of clam topping.
 */
class FreshClams extends Clams
{
    /**
     * Constructs a new instance of FreshClams.
     *
     * Sets the description of the clam topping to 'Fresh Clams' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Fresh Clams';
        parent::__construct();
    }
}