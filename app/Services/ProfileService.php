<?php

namespace App\Services;

use App\Models\Kid;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class ProfileService
{
    public static function showQuantityRecipients(): Collection
    {
        $recipients = Cache::remember('recipients', now()->addDay(), function () {
            $all = Kid::count();
            $active = Kid::where('is_active', true)->count();

            return [
                'all' => $all,
                'active' => $active,
                'done' => $all - $active
            ];
        });

        return collect($recipients);
    }
}
