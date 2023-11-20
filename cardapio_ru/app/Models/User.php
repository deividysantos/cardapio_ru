<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'LOGIN',
        'ID_COMPANY',
        'ACESS_LEVEL',
    ];

    protected $hidden = [
        'PASSWORD',
    ];

    protected $casts = [
        'PASSWORD' => 'hashed',
    ];

    public function Companie(): BelongsTo{
        return $this->belongsTo(Companie::class, 'ID_COMPANIE');
    }
}
