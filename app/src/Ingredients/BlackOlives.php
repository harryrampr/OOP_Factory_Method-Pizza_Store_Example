<?php
declare(strict_types=1);

namespace App\Ingredients;

class BlackOlives extends Veggies
{

    public function __construct()
    {
        $this->description = 'Black Olives';
        parent::__construct();
    }
}