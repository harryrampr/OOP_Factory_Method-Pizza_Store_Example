<?php
declare(strict_types=1);

namespace App\Ingredients;

class ReggianoCheese extends Cheese
{

    public function __construct()
    {
        $this->description = 'Reggiano Cheese';
        parent::__construct();
    }
}