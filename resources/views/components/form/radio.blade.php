@props(['disabled' => false, 'name', 'id', 'label', 'checked' => false, 'classLabel' => '', 'classContainer' => 'sm:col-span-2'])
<div class="flex items-center col-span-1 {{ $classContainer }}">
    <input
        @disabled($disabled)
        @checked($checked)
        id="{{ $id }}"
        name="{{ $name }}"
        type="radio"
        {{ $attributes->merge(['class' => 'h-4 w-4 focus:outline-none ' .
        ($errors->has($name)
            ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
            : 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50')]) }} />

    <x-form.label class="ml-3 {{ $classLabel }}" for="{{ $id }}">{{ $label }}</x-form.label>
</div>
