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
            return Kid::count();
        });
        $recipientsActive = Cache::remember('recipientsActive', now()->addDay(), function () {
            return Kid::where('is_active', true)->count();
        });
        $recipientsDone = Cache::remember('recipientDone', now()->addDay(), function () use ($recipients, $recipientsActive){
            return $recipients - $recipientsActive;
        });

        return collect([
            'recipients'        => $recipients,
            'recipientsActive'  => $recipientsActive,
            'recipientsDone'    => $recipientsDone
        ]);
    }
}
