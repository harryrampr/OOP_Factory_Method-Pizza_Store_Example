<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Dough
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('   - Start with the %s%s', $this->description, PHP_EOL);

    }

}