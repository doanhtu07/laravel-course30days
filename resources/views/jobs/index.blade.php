@php
    use App\Models\Job;
    use Illuminate\Pagination\LengthAwarePaginator;
@endphp

@props([
    /**
     * @var Job[]|LengthAwarePaginator $jobs
     */
    'jobs',
])

<x-layout title="Job Listings">
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a
                href="{{ route('jobs.show', $job['id']) }}"
                class="block px-4 py-6 border dark:text-white border-gray-200 dark:border-gray-500 rounded-lg"
            >
                <div class="font-bold text-blue-500 dark:text-blue-400">
                    {{ $job->employer->name }}
                </div>

                <div>
                    <strong>{{ $job['title'] }}:</strong>
                    Pays {{ $job['salary'] }} per year.
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
