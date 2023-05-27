@props(['disabled' => false, 'name', 'id', 'label', 'value' => '', 'checked' => false])

<div class="relative flex items-start py-4">
    <div class="min-w-0 flex-1 text-sm">
        <x-form.label for="{{ $name }}-{{ $value }}" class="select-none">{{ $label }}</x-form.label>
    </div>
    <div class="ml-3 flex h-5 items-center">
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
</div>
