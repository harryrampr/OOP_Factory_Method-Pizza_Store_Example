<?php
declare(strict_types=1);

namespace App;

/**
 * Enumeration representing the sizes of a pizza.
 */
enum PizzaSize: int
{
    /**
     * The personal pizza size, typically serving 4 slices.
     */
    case PERSONAL = 4;

    /**
     * The small pizza size, typically serving 6 slices.
     */
    case SMALL = 6;

    /**
     * The medium pizza size, typically serving 8 slices.
     */
    case MEDIUM = 8;

    /**
     * The large pizza size, typically serving 10 slices.
     */
    case LARGE = 10;

    /**
     * The extra-large pizza size, typically serving 12 slices.
     */
    case XLARGE = 12;

    /**
     * Returns a string representation of the pizza size.
     *
     * @return string The string representation of the pizza size.
     */
    public function toString(): string
    {
        return match ($this) {
            self::PERSONAL => 'personal',
            self::SMALL => 'small',
            self::MEDIUM => 'medium',
            self::LARGE => 'large',
            self::XLARGE => 'x-large'
        };
    }
}