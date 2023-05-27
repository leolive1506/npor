@props(['active' => false, 'icon' => null, 'title' => null])

@php
$classActive = ($active)
                ? 'bg-gray-900 text-white'
                : 'text-gray-300 hover:bg-gray-700 hover:text-white';

@endphp

<a {{ $attributes->merge(['class' => "group flex items-center px-2 py-2 text-sm font-medium rounded-md " . $classActive]) }}>
    @if ($icon)
        <x-icon name="{{ $icon }}" class="{{ $active ?  'text-gray-300' : 'text-gray-400 group-hover:text-gray-300' }} mr-3 flex-shrink-0 h-6 w-6" />
    @endif
        {{ $title ?? $slot }}
</a>
