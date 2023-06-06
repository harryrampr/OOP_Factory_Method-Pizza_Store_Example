<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents a very thin crust dough used in pizza making.
 */
class VeryThinCrustDough extends Dough
{
    /**
     * Constructs a new instance of VeryThinCrustDough.
     *
     * Sets the description of the dough to 'Very Thin Crust Dough' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Very Thin Crust Dough';
        parent::__construct();
    }
}