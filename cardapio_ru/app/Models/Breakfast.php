<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Breakfast extends Model
{
    use HasFactory;

    protected $fillable = [
        'BREAD1',
        'BREAD2',
        'COFFEE',
        'MILK',
        'TEA',
        'FRUIT',
        'PROTEIN',
        'MEAL_DATE',
        'CREATED_AT',

    ];
    public function Food(): BelongsTo{
        return $this->belongsTo(Food::class, 'ID_FOOD');
    }
}
