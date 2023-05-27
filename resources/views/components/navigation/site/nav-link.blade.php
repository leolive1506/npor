@props(['active' => false, 'title' => null])

@php
$classActive = ($active)
                ? 'border-white text-white'
                : 'border-transparent text-gray-300 hover:border-gray-100 hover:text-gray-100';

@endphp

<a {{ $attributes->merge(['class' => "block sm:inline-flex font-bold items-center border-b-2 px-1 pt-1 text-base font-medium " . $classActive]) }}>
    {{ $title ?? $slot }}
</a>
