<?php
declare(strict_types=1);

namespace App\Ingredients;

class FrozenClam extends Clams
{

    public function __construct()
    {
        $this->description = 'Frozen Clam';
        parent::__construct();
    }
}