@props(['disabled' => false, 'name', 'id', 'label', 'value' => '', 'checked' => false, 'smCol' => 'col-span-1'])

<div class="relative flex items-start justify-between py-4 px-3 {{ $smCol }}">
    <div class="flex h-5 items-center">
        <input
            id="{{ $name }}-{{ $value }}"
            name="{{ $name }}"
            value="{{ $value }}"
            {{ $attributes->merge(['class' => 'h-4 w-4 rounded ' .
                ($errors->has($name)
                    ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
                    : 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                )
        ]) }}
            type="checkbox"
            @checked($checked)
        >
    </div>

    <div class="min-w-0 text-sm">
        <x-form.label for="{{ $name }}-{{ $value }}" class="select-none flex flex-1 w-full">{{ $label }}</x-form.label>
    </div>
</div>
