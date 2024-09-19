<?php

namespace App\Enums;

enum PropertyType: string
{
    case APARTMENT = 'apartment';
    case HOUSE = 'house';
    case PENTHOUSE = 'penthouse';
    case COMMERCE = 'commerce';
    case OFFICE = 'office';

    public static function toArray(): array
    {
        return array_column(PropertyType::cases(), 'value');
    }
}
