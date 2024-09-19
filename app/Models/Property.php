<?php

namespace App\Models;

use App\Enums\PropertyStatus;
use App\Enums\PropertyType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'type',
        'area',
        'rooms',
        'description',
        'status',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => PropertyType::class,
            'status' => PropertyStatus::class,
        ];
    }

    /**                                                                                                                   **
     * -------------------------------------------------- Relationships -------------------------------------------------- *
     *                                                                                                                     */

     // Tenant user
    public function tenant()
    {
        return $this->belongsTo(User::class);
    }
}
