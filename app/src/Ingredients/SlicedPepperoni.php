<?php
declare(strict_types=1);

namespace App\Ingredients;

class SlicedPepperoni extends Pepperoni
{

    public function __construct()
    {
        $this->description = 'Sliced Pepperoni';
        parent::__construct();
    }
}