@props(['name', 'label', 'type' => 'text', 'smCol' => 'sm:col-span-3', 'lgCol' => '', 'containerClass' => ''])
<div class='col-span-6 {{ $smCol }} {{ $lgCol }} {{ $containerClass }}'>
    <x-form.label for="{{ $name }}" class="text-white">{{ $label }}</x-form.label>
    <div class="relative mt-1 rounded-md shadow-sm">
        <x-form.site.input {{ $attributes }} :name="$name" :type="$type" />
        @error($name)
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <x-icon name="exclamation-circle" style="mini" class="h-5 w-5 text-red-500" />
            </div>
        @enderror

    </div>
    @error($name)
        <p class="mt-2 text-sm text-red-600" id="{{ $name }}-error">{{  $message }}</p>
    @enderror
  </div>
