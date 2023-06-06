<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents a thin crust dough used in pizza making.
 */
class ThinCrustDough extends Dough
{
    /**
     * Constructs a new instance of ThinCrustDough.
     *
     * Sets the description of the dough to 'Thin Crust Dough' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Thin Crust Dough';
        parent::__construct();
    }
}