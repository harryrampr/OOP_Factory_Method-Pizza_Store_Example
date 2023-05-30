<?php
declare(strict_types=1);

namespace App\Ingredients;

class VeryThinCrustDough extends Dough
{

    public function __construct()
    {
        $this->description = 'Very Thin Crust Dough';
        parent::__construct();
    }
}