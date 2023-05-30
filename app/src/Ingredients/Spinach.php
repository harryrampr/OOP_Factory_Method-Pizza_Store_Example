<?php
declare(strict_types=1);

namespace App\Ingredients;

class Spinach extends Veggies
{

    public function __construct()
    {
        $this->description = 'Spinach';
        parent::__construct();
    }
}