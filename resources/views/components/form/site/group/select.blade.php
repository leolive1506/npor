@props([
    'name', 'label', 'select' => true,
    'smCol' => 'sm:col-span-3', 'lgCol' => '',
    'containerClass' => '', 'classLabel' => ''
])
<div {{ $attributes->merge(['class' => 'col-span-6 ' . $smCol . ' ' . $lgCol . ' ' . $containerClass]) }}>
    <x-form.label for="{{ $name }}" class="text-white {{ $classLabel }}}">{{ $label }}</x-form.label>
    <x-form.site.select name="{{ $name }}">
        @if ($select)
            <option value="">Selecione</option>
        @endif
        {{ $slot }}
    </x-form.site.select>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
</div>
