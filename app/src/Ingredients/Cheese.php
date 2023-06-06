<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Abstract class representing cheese in a pizza.
 */
abstract class Cheese
{
    /**
     * The description of the cheese.
     *
     * @var string
     */
    protected string $description;

    /**
     * Cheese constructor.
     * Prints the step of adding the cheese to the pizza.
     */
    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);
    }
}