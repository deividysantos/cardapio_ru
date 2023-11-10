<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Meal extends Model
{
    use HasFactory;

    protected $fillables = [
        'SALA1',
        'SALAD2',
        'SALAD3',
        'MAIN_COURSE',
        'GARRISON',
        'VEHETARIAN',
        'DESSERT',
        'MEAL_DATE',
        'CREATED_AT',
    ];

    public function Food(): BelongsTo{
        return $this->belongsTo(Food::class, 'ID_FOOD');
    }
}
