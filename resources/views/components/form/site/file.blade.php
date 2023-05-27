@props(['name', 'multiple' => false, 'label' => ''])
<label
    class="flex items-center justify-center gap-4 p-4 rounded-lg shadow-lg tracking-wide border border-blue cursor-pointer bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 text-white"
    for="{{ $name }}" x-data="{ filename: '{{ $label }}'.substring(0, 20) + '...' }">
    <x-icon name="cloud-arrow-up" class="h-6 w-6" />
    <div class="flex flex-col">
        <span x-text="filename" class="text-sm leading-normal"></span>
        <input
            type="file"
            class="hidden"
            name="{{ $name }}"
            id="{{ $name }}"
            {{ $multiple ? 'multiple' : '' }}
            x-on:change="
                filename = $event.target.files[0].name;
                filename = filename.substring(0, 20) + '...';
            " />
    </div>
</label>

