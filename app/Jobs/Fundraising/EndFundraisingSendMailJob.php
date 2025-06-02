<?php

namespace App\Jobs\Fundraising;

use App\Mail\Kid\FinishFundraisingMail;
use App\Models\Kid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class EndFundraisingSendMailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(private Kid $kid)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('anton@premier-partner.ru')->send(new FinishFundraisingMail($this->kid));
    }
}
