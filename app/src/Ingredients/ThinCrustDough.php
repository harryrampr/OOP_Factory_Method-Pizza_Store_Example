<?php
declare(strict_types=1);

namespace App\Ingredients;

class ThinCrustDough extends Dough
{
    public function __construct()
    {
        $this->description = 'Thin Crust Dough';
        parent::__construct();
    }
}