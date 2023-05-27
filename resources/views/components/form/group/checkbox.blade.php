@props(['name', 'legend', 'containerCols' => 'grid-cols-4', 'smCol' => 'sm:col-span-6', 'lgCol' => ''])
<fieldset class='col-span-6 {{ $smCol }} {{ $lgCol }}'>
    <legend class="text-lg font-medium text-gray-900 w-full min-w-full">{{ $legend }}</legend>
    <div class="mt-4 divide-y divide-gray-200 border-t border-b border-gray-200 grid {{ $containerCols }} gap-6">
        {{ $slot }}
    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
</fieldset>
