@props(['name', 'label', 'smCol' => 'sm:col-span-6', 'lgCol' => '', 'description' => '', 'display' => 'grid grid-cols-1 sm:grid-cols-6 gap-4'])
<div class='col-span-6 {{ $smCol }} {{ $lgCol }}'>
    <x-form.label for="{{ $name }}">{{ $label }}</x-form.label>
    @if ($description)
        <p class="text-sm leading-5 text-gray-500">{{ $description }}</p>
    @endif

    <div class="mt-4">
        <div class="{{ $display }}">
            {{ $slot }}
        </div>
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{ $message }}</p>
    @enderror
</div>
