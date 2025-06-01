<?php

namespace App\Services;

use App\Models\Kid;
use Illuminate\Support\Facades\DB;

class KidService
{
    /**
     * @param $data
     * @return Kid
     */
    public static function store($data): Kid
    {
        $url = !empty($data['url']) ? $data['url'] : 'default.jpg';

        DB::beginTransaction();

        $kid = Kid::create($data);
        $kid->image()->create([
            'url' => $url
        ]);

        DB::commit();

        return $kid;
    }
}
