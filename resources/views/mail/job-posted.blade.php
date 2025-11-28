@props([
    /** @var string $jobId */
    'jobId',

    /** @var string $jobTitle */
    'jobTitle',
])

{{-- prettier-ignore-start --}}

<x-mail::message>
# Job: {{ $jobTitle }}

Congrats! Your job is now live on our platform.

<x-mail::button :url="route('jobs.show', $jobId)">
View Your Job Listing
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

{{-- prettier-ignore-end --}}
