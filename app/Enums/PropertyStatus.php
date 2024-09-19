<?php

namespace App\Enums;

enum PropertyStatus: string
{
    case AVAILABLE = 'available';
    case RENTED = 'rented';
    case MAINTENANCE = 'maintenance';

    public static function toArray(): array
    {
        return array_column(PropertyStatus::cases(), 'value');
    }
}
