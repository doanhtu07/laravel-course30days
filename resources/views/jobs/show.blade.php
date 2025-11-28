@php use App\Models\Job; @endphp

@props([
    /** @var Job|null $job */
    'job',
])

<x-layout title="Job">
    <h2 class="font-bold text-lg text-gray-900 dark:text-white">
        {{ $job->title }}
    </h2>

    <p class="text-gray-900 dark:text-white">
        This job pays {{ $job->salary }} per year.
    </p>

    @can('edit', $job)
        <p class="mt-6">
            <x-button href="{{ route('jobs.edit', $job->id) }}">
                Edit Job
            </x-button>
        </p>
    @endcan
</x-layout>
