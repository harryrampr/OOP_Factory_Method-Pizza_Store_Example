<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Clams
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('<li class="mt-2 mb-3">Add the %s</li>%s', $this->description, PHP_EOL);

    }

}