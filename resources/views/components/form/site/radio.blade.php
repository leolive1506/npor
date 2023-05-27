@props(['disabled' => false, 'name', 'id', 'label', 'checked' => false, 'classContainer' => '', 'classLabel' => ''])
<div class="flex items-center {{ $classContainer }}">
    <input
        @disabled($disabled)
        @checked($checked)
        id="{{ $id }}"
        name="{{ $name }}"
        type="radio"
        {{ $attributes->merge(['class' => 'h-4 w-4 focus:outline-none ' .
        ($errors->has($name)
            ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
            : 'border-gray-300 text-orange-500 focus:border-orange-300 focus:ring focus:ring-orange-400 focus:ring-opacity-70')]) }} />

    <x-form.label class="ml-3 text-white {{ $classLabel }}" for="{{ $id }}">{{ $label }}</x-form.label>
</div>
