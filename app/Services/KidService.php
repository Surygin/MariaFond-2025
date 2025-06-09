<?php

namespace App\Services;

use App\Jobs\Fundraising\EndFundraisingSendMailJob;
use App\Mail\Kid\FinishFundraisingMail;
use App\Models\Image;
use App\Models\Kid;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class KidService
{
    /**
     * @param $data
     * @return Kid
     */
    public static function store($data): Kid
    {

        $url = 'default.jpg';
        if(!empty($data['url'])){
            $url = Storage::disk('public')->put('/recipient', $data['url']);
        }

        DB::beginTransaction();

        $kid = Kid::create($data);
        $kid->image()->create([
            'url' => $url
        ]);

        DB::commit();

        Cache::forget('recipients');
        Cache::forget('recipientsActive');
        Cache::forget('recipientDone');

        return $kid;
    }

    /**
     * @param array $data
     * @param Kid $kid
     * @return Kid
     */
    public static function update(array $data, Kid $kid): Kid
    {
        $url = $kid->image->url;

        if(!empty($data['url'])){

            try {
                Storage::disk('public')->delete($url);
                $url = Storage::disk('public')->put('/recipient', $data['url']);
            } catch ( \Exception $exception) {

            }

        }

        DB::beginTransaction();

        $data['start_fundraising'] = $kid->start_fundraising + $data['fundraising'];
        $kid->update($data);
        $kid->image()->update([
            'url' => $url
        ]);

        if ($kid->start_fundraising >= $kid->end_fundraising)
        {
            $status['is_active'] = false;
            $kid->update($status);
            EndFundraisingSendMailJob::dispatch($kid);
        }

        DB::commit();

        Cache::forget('recipients');
        Cache::forget('recipientsActive');
        Cache::forget('recipientDone');

        return $kid;
    }
}
