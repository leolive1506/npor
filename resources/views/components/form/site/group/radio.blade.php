@props(['name', 'label', 'smCol' => 'sm:col-span-6', 'lgCol' => '', 'description' => ''])
<div class='col-span-6 {{ $smCol }} {{ $lgCol }}'>
    <x-form.label for="{{ $name }}">{{ $label }}</x-form.label>
    @if ($description)
        <p class="text-sm leading-5 text-gray-500">{{ $description }}</p>
    @endif

    <div class="mt-4">
        <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
            {{ $slot }}
        </div>
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
</div>
