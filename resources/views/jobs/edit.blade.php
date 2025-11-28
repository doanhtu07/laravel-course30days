@php use App\Models\Job; @endphp

@props([
    /** @var Job|null $job */
    'job',
])

<x-layout title="Edit Job: {{ $job->title }}">
    <form
        method="POST"
        action="{{ route('jobs.update', $job->id) }}"
    >
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label
                            for="title"
                            class="block text-sm/6 font-medium text-gray-900 dark:text-white"
                        >
                            Title
                        </label>

                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 dark:bg-white/5 dark:outline-white/10 dark:focus-within:outline-indigo-500">
                                <input
                                    id="title"
                                    type="text"
                                    name="title"
                                    placeholder="Shift Leader"
                                    required
                                    value="{{ old('title', $job->title) }}"
                                    class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-transparent dark:text-white dark:placeholder:text-gray-500"
                                />
                            </div>

                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label
                            for="salary"
                            class="block text-sm/6 font-medium text-gray-900 dark:text-white"
                        >
                            Salary
                        </label>

                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 dark:bg-white/5 dark:outline-white/10 dark:focus-within:outline-indigo-500">
                                <input
                                    id="salary"
                                    type="text"
                                    name="salary"
                                    placeholder="$50,000 Per Year"
                                    required
                                    value="{{ old('salary', $job->salary) }}"
                                    class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-transparent dark:text-white dark:placeholder:text-gray-500"
                                />
                            </div>

                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button
                    form="delete-form"
                    class="text-red-500 text-sm text-bold"
                >
                    Delete
                </button>
            </div>

            <div class="flex items-center gap-x-6">
                <a
                    href="{{ route('jobs.show', $job->id) }}"
                    class="text-sm/6 font-semibold text-gray-900 dark:text-white"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:shadow-none dark:focus-visible:outline-indigo-500"
                >
                    Update
                </button>
            </div>
        </div>
    </form>

    <form
        id="delete-form"
        method="POST"
        action="{{ route('jobs.destroy', $job->id) }}"
        class="hidden"
    >
        @csrf
        @method('DELETE')
    </form>
</x-layout>
