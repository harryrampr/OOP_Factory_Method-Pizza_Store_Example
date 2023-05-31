<?php
declare(strict_types=1);

namespace App\Ingredients;

abstract class Dough
{
    protected string $description;

    public function __construct()
    {
        echo sprintf('<h2  class="<h2  text-green-700">Start with the %s</h2 >%s', $this->description, PHP_EOL .'<ul class="ml-2">'. PHP_EOL);

    }

}