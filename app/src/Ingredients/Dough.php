<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Dough
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('<h3 class="mt-2 mb-3 text-green-700">Start with the %s</h3>%s', $this->description, PHP_EOL .'<ul class="ml-2">'. PHP_EOL);

    }

}