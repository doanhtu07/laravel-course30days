<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{
    public function edit(User $user, Job $job): bool
    {
        dd($job->employer->user->getAttributes(), $user->getAttributes());

        return $job->employer->user->is($user);
    }
}
