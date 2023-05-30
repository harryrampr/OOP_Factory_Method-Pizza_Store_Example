<?php
declare(strict_types=1);

namespace App\Ingredients;

class ThickCrustDough extends Dough
{

    public function __construct()
    {
        $this->description = 'Thick Crust Dough';
        parent::__construct();
    }
}