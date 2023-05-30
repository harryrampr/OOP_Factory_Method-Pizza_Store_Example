<?php
declare(strict_types=1);

namespace App\Ingredients;

class Onion extends Veggies
{

    public function __construct()
    {
        $this->description = 'Onion';
        parent::__construct();
    }
}