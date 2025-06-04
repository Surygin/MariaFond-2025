<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisite extends Model
{
    protected $fillable = [
        'inn',
        'rs',
        'ks',
        'kpp',
        'bik',
        'ogrn',
        'recipient',
        'bank_title',
        'bank_address',
    ];
}
