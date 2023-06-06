<?php
declare(strict_types=1);

namespace App;

/**
 * Enumeration representing the types of pizza slice shapes.
 */
enum PizzaSliceType: int
{
    /**
     * The diagonal slice type.
     */
    case DIAGONAL = 0;

    /**
     * The square slice type.
     */
    case SQUARE = 1;

    /**
     * Returns a string representation of the pizza slice type.
     *
     * @return string The string representation of the pizza slice type.
     */
    public function toString(): string
    {
        return match ($this) {
            self::DIAGONAL => 'diagonal',
            self::SQUARE => 'square',
        };
    }
}