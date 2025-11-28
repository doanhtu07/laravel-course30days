<x-layout title="Create Job">
    <form
        method="POST"
        action="{{ route('jobs.store') }}"
    >
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
                <h2 class="text-base/7 font-semibold text-gray-900 dark:text-white">
                    Create a New Job
                </h2>

                <p class="mt-1 text-sm/6 text-gray-600 dark:text-gray-400">
                    We just need a handful of details from you.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">
                            Title
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="title"
                                name="title"
                                type="text"
                                placeholder="CEO"
                                required
                                value="{{ old('title') }}"
                            />

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">
                            Salary
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="salary"
                                name="salary"
                                type="text"
                                placeholder="$50,000 Per Year"
                                required
                                value="{{ old('salary') }}"
                            />

                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button
                type="button"
                class="text-sm/6 font-semibold text-gray-900 dark:text-white"
            >
                Cancel
            </button>

            <x-form-button>
                Save
            </x-form-button>
        </div>
    </form>
</x-layout>
