<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job,
        ]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = new Job([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        $job->employer_id = 1;

        if ($job->save()) {
            $job->refresh();
            $jobPosted = new JobPosted($job);
            Mail::to($job->employer->user)->queue($jobPosted);
        }

        return redirect()->route('jobs.index');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', [
            'job' => $job,
        ]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect()->route('jobs.show', $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
