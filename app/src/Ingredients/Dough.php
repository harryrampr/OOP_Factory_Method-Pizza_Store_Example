<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Abstract class representing the dough of a pizza.
 */
abstract class Dough
{
    /**
     * The description of the dough.
     *
     * @var string
     */
    protected string $description;

    /**
     * Constructs a new instance of the dough.
     * Displays the starting step of the pizza preparation.
     */
    public function __construct()
    {
        echo sprintf('<h3 class="text-green-700">Start with the %s</h3>%s',
            $this->description, PHP_EOL . '<ul class="ml-2">' . PHP_EOL);
    }
}