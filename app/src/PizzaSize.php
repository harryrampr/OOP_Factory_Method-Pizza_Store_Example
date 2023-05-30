<?php
declare(strict_types=1);

namespace App;

enum PizzaSize: int
{
    case PERSONAL = 4;
    case SMALL = 6;
    case MEDIUM = 8;
    case LARGE = 10;
    case XLARGE = 12;

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