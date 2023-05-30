<?php
declare(strict_types=1);

namespace App\Ingredients;

class PlumTomatoSauce extends Sauce
{

    public function __construct()
    {
        $this->description = 'Plum Tomato Sauce';
        parent::__construct();
    }
}