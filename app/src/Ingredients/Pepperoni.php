<?php
declare(strict_types=1);

namespace App\Ingredients;

/**
 * Represents a type of pepperoni topping.
 */
abstract class Pepperoni
{
    /**
     * @var string The description of the pepperoni topping.
     */
    protected string $description;

    /**
     * Constructs a new instance of Pepperoni.
     *
     * This constructor displays the HTML list item element with the description of the pepperoni topping.
     */
    public function __construct()
    {
        echo sprintf('<li>Add the %s</li>%s', $this->description, PHP_EOL);
    }
}