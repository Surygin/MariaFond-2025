<?php

namespace App\Services;

use App\Mail\Kid\FinishFundraisingMail;
use App\Models\Image;
use App\Models\Kid;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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

    public static function update(array $data, Kid $kid): Kid
    {
        $image = Image::where('imageable_id', $kid->id)->first();

        DB::beginTransaction();

        $image->update($data);

        $data['start_fundraising'] = $kid->start_fundraising + $data['fundraising'];
        $kid->update($data);

        if ($kid->start_fundraising >= $kid->end_fundraising)
        {
            $status['is_active'] = false;
            $kid->update($status);
            Mail::to('anton@premier-partner.ru')->send(new FinishFundraisingMail($kid));
        }

        DB::commit();

        return $kid;
    }
}
