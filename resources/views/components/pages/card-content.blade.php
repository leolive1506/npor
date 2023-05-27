@props(['padding' => '', 'noMt' => false, 'mt' => 'mt-4'])
@php
    if ($noMt) {
        $mt = '';
    }
@endphp
<div {{ $attributes->merge(['class' => 'bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 px-4 sm:px-6 lg:px-8 ' . $mt]) }}>
    {{ $slot }}
</div>
