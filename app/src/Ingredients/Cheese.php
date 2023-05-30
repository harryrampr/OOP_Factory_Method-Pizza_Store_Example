<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Cheese
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('   - Add the %s%s', $this->description, PHP_EOL);

    }
}