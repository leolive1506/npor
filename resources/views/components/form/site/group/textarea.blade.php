@props(['name', 'label', 'smCol' => 'sm:col-span-6', 'lgCol' => ''])
<div class='col-span-6 {{ $smCol }} {{ $lgCol }}'>
    <x-form.label for="{{ $name }}">{{ $label }}</x-form.label>
    <div class="mt-1">
        <x-form.textarea {{ $attributes }} :name="$name" />
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
</div>
