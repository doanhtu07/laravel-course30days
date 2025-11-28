@props([
    /** @var bool */
    'active' => false,
])

@php
    $name = 'Tu Do';
    // Some other code...
@endphp

<a
    {{ $attributes }}
    class="block rounded-md px-3 py-2 text-base font-medium {{ $active ? 'text-white bg-gray-900 dark:bg-gray-950/50' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}"
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{ $slot }}
</a>
