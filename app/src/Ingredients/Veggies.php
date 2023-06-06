<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Abstract class representing veggies in a pizza.
 */
abstract class Veggies
{
    /**
     * The description of the veggies.
     *
     * @var string
     */
    protected string $description;

    /**
     * Veggies constructor.
     * Prints the step of adding the veggies to the pizza.
     */
    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);
    }
}