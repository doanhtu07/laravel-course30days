<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    public Job $jobListing;

    /**
     * Create a new job instance.
     */
    public function __construct(Job $jobListing)
    {
        $this->jobListing = $jobListing;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('Translating '.$this->jobListing->title.' to Spanish.');
    }
}
