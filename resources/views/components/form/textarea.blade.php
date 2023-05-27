@props(['disabled' => false, 'name', 'value' => ''])
<textarea {{ $disabled ? 'disabled' : '' }} rows="4" name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->merge(['class' => ('block w-full rounded-md sm:text-sm focus:outline-none ') .
    ($errors->has($name)
        ? 'border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
        : 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 resize-none')]) }}>{{ $value }}</textarea>
