<?php
declare(strict_types=1);

namespace App\Ingredients;

class MarinaraSauce extends Sauce
{

    public function __construct()
    {
        $this->description = 'Marinara Sauce';
        parent::__construct();
    }
}