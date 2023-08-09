@props(['disabled' => false, 'name', 'value' => ''])
<textarea {{ $disabled ? 'disabled' : '' }} rows="4" name="{{ $name }}" id="{{ $name }}"
    {{ $attributes->merge([
        'class' =>
            'block w-full rounded-md sm:text-sm focus:outline-none resize-none ' .
            ($errors->has($name)
            ? 'border-red-300 dark:border-red-700 dark:bg-red-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-600 focus:ring-red-500 dark:focus:ring-red-600 rounded-md shadow-sm'
        : 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm'),
    ]) }}>{{ $value }}</textarea>
