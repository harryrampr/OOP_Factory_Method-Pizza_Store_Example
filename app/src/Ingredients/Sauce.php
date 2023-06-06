<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Abstract class representing sauce in a pizza.
 */
abstract class Sauce
{
    /**
     * The description of the sauce.
     *
     * @var string
     */
    protected string $description;

    /**
     * Sauce constructor.
     * Prints the step of adding the sauce to the pizza.
     */
    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);
    }
}