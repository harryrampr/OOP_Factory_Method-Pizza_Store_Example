<?php
declare(strict_types=1);

namespace App\Ingredients;

class Mushroom extends Veggies
{

    public function __construct()
    {
        $this->description = 'Mushroom';
        parent::__construct();
    }
}