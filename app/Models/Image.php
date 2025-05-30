<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    protected $table = 'imageables';

    protected $fillable = [
        'url',
        'imageable_type',
        'imageable_id'
    ];

    /**
     * @return MorphTo
     */
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
