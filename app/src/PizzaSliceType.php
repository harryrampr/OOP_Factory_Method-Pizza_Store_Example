<?php
declare(strict_types=1);

namespace App;

enum PizzaSliceType: int
{
    case DIAGONAL = 0;
    case SQUARE = 1;

    public function toString(): string
    {
        return match ($this) {
            self::DIAGONAL => 'diagonal',
            self::SQUARE => 'square',
        };
    }
}