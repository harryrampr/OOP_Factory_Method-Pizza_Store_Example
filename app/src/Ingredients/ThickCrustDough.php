<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents a thick crust dough used in pizza making.
 */
class ThickCrustDough extends Dough
{
    /**
     * Constructs a new instance of ThickCrustDough.
     *
     * Sets the description of the dough to 'Thick Crust Dough' and calls the parent constructor.
     */
    public function __construct()
    {
        $this->description = 'Thick Crust Dough';
        parent::__construct();
    }
}