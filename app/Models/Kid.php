<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Facades\Storage;

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
        'is_active',
    ];

    /**
     * @return MorphOne
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getImageForKidAttribute(): string
    {
        return Storage::disk('public')->url($this->image->url);
    }
}
