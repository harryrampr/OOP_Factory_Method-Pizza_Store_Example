<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Abstract class representing clams in a pizza.
 */
abstract class Clams
{
    /**
     * The description of the clams.
     *
     * @var string
     */
    protected string $description;

    /**
     * Clams constructor.
     * Prints the step of adding the clams to the pizza.
     */
    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);
    }
}