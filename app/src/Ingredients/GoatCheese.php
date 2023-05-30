<?php
declare(strict_types=1);

namespace App\Ingredients;

class GoatCheese extends Cheese
{

    public function __construct()
    {
        $this->description = 'Goat Cheese';
        parent::__construct();
    }
}