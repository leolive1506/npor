@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm font-medium text-white text-start']) }}>
    {{ $value ?? $slot }}
</label>
