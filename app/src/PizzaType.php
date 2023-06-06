<?php
declare(strict_types=1);

namespace App;

use App\Recipes\CheesePizza;
use App\Recipes\ClamPizza;
use App\Recipes\PepperoniPizza;
use App\Recipes\VeggiePizza;

/**
 * Enumeration representing the different types of pizzas.
 */
enum PizzaType: int
{
    case CHEESE = 0;
    case CLAM = 1;
    case PEPPERONI = 2;
    case VEGGIE = 3;

    /**
     * Get the recipe class name for the pizza type.
     *
     * @return string The fully qualified class name of the recipe for the pizza type.
     */
    public function recipe(): string
    {
        return match ($this) {
            self::CHEESE => CheesePizza::class,
            self::CLAM => ClamPizza::class,
            self::PEPPERONI => PepperoniPizza::class,
            self::VEGGIE => VeggiePizza::class
        };
    }

    /**
     * Get the string representation of the pizza type.
     *
     * @return string The string representation of the pizza type.
     */
    public function toString(): string
    {
        return match ($this) {
            self::CHEESE => 'cheese',
            self::CLAM => 'clam',
            self::PEPPERONI => 'pepperoni',
            self::VEGGIE => 'veggie'
        };
    }

    /**
     * Get the New York style name for the pizza type.
     *
     * @return string The New York style name of the pizza type.
     */
    public function nyName(): string
    {
        return match ($this) {
            self::CHEESE => 'New York Style Cheese Pizza',
            self::CLAM => 'New York Style Clam Pizza',
            self::PEPPERONI => 'New York Style Pepperoni Pizza',
            self::VEGGIE => 'New York Style Veggie Pizza'
        };
    }

    /**
     * Get the Chicago style name for the pizza type.
     *
     * @return string The Chicago style name of the pizza type.
     */
    public function chicagoName(): string
    {
        return match ($this) {
            self::CHEESE => 'Chicago Style Cheese Pizza',
            self::CLAM => 'Chicago Style Clam Pizza',
            self::PEPPERONI => 'Chicago Style Pepperoni Pizza',
            self::VEGGIE => 'Chicago Style Veggie Pizza'
        };
    }

    /**
     * Get the California style name for the pizza type.
     *
     * @return string The California style name of the pizza type.
     */
    public function californiaName(): string
    {
        return match ($this) {
            self::CHEESE => 'California Style Cheese Pizza',
            self::CLAM => 'California Style Clam Pizza',
            self::PEPPERONI => 'California Style Pepperoni Pizza',
            self::VEGGIE => 'California Style Veggie Pizza'
        };
    }
}