<?php
declare(strict_types=1);

namespace App\Ingredients;

class Garlic extends Veggies
{

    public function __construct()
    {
        $this->description = 'Garlic';
        parent::__construct();
    }
}