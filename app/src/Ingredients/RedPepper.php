<?php
declare(strict_types=1);

namespace App\Ingredients;

class RedPepper extends Veggies
{

    public function __construct()
    {
        $this->description = 'Red Pepper';
        parent::__construct();
    }
}