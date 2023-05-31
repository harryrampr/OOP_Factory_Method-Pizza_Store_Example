<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Cheese
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);

    }
}