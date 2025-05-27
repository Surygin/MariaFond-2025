<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    /** @use HasFactory<\Database\Factories\KidFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'declension_name',
        'history',
        'start_fundraising',
        'end_fundraising',
    ];
}
