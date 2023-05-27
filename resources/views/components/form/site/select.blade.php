@props(['disabled' => false, 'name'])
<select {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base sm:text-sm ' . ($errors->has($name)
        ? 'border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
        : 'border-gray-300 text-gray-500 focus:border-orange-300 focus:ring focus:ring-orange-400 focus:ring-opacity-70'
    )])
}} id="{{ $name }}" name="{{ $name }}">
    {{ $slot }}
</select>
