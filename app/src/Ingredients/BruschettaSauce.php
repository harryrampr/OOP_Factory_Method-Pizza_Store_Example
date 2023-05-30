<?php
declare(strict_types=1);

namespace App\Ingredients;

class BruschettaSauce extends Sauce
{

    public function __construct()
    {
        $this->description = 'Bruschetta Sauce';
        parent::__construct();
    }
}