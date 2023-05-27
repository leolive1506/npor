@props(['title' => null])
<th scope="col" {{ $attributes->merge(['class' => 'px-6 py-3.5 text-left text-sm font-semibold text-gray-900']) }}>
    {{ $title ?? $slot }}
</th>
