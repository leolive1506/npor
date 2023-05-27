@props([
    'name', 'label', 'select' => true,
    'smCol' => 'sm:col-span-3', 'lgCol' => '',
    'containerClass' => '', 'classLabel' => '',
    'attributesSelect' => ''
])
<div class="col-span-6 {{ $smCol }} {{ $lgCol }} {{ $containerClass }}">
    <x-form.label for="{{ $name }}" class="{{ $classLabel }}">{{ $label }}</x-form.label>
    <x-form.select name="{{ $name }}" {{ $attributes }}>
        @if ($select)
            <option value="">Selecione</option>
        @endif
        {{ $slot }}
    </x-form.select>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
</div>
