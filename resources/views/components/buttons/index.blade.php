<button
    {{ $attributes->merge(['class' => 'inline-flex justify-center rounded-md border py-2 px-4 text-sm font-medium shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition-all ' . $color]) }}
    type="{{ $type }}"
>
    {{ $title }}
</button>
