<?php
declare(strict_types=1);

namespace App\Ingredients;

class EggPlant extends Veggies
{

    public function __construct()
    {
        $this->description = 'Egg Plant';
        parent::__construct();

    }
}