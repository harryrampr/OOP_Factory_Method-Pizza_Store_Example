<?php
declare(strict_types=1);

namespace App\Ingredients;

class MozzarellaCheese extends Cheese
{

    public function __construct()
    {
        $this->description = 'Mozzarella Cheese';
        parent::__construct();
    }

}