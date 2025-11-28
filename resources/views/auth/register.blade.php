<x-layout title="Register">
    <form
        method="POST"
        action="{{ route('register.store') }}"
    >
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12 dark:border-white/10">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">
                            Name
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="name"
                                name="name"
                                type="text"
                                placeholder="John Doe"
                                required
                                value="{{ old('name') }}"
                            />

                            <x-form-error name="name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">
                            Email
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="email"
                                name="email"
                                type="email"
                                placeholder="johndoe@gmail.com"
                                required
                                value="{{ old('email') }}"
                            />

                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">
                            Password
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="password"
                                name="password"
                                type="password"
                                required
                            />

                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">
                            Confirm Password
                        </x-form-label>

                        <div class="mt-2">
                            <x-form-input
                                id="password_confirmation"
                                name="password_confirmation"
                                type="password"
                                required
                            />

                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a
                href="{{ route('home') }}"
                class="text-sm/6 font-semibold text-gray-900 dark:text-white"
            >
                Cancel
            </a>

            <x-form-button>
                Register
            </x-form-button>
        </div>
    </form>
</x-layout>
