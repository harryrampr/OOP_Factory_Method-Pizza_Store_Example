<?php
declare(strict_types=1);

namespace App\Ingredients;

class FreshClams extends Clams
{

    public function __construct()
    {
        $this->description = 'Fresh Clams';
        parent::__construct();
    }
}