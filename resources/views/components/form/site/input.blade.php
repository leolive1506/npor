@props(['disabled' => false, 'name', 'type' => 'text'])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ('block w-full rounded-md sm:text-sm focus:outline-none ') .
    ($errors->has($name)
        ? 'border-red-300 pr-10 text-red-900 placeholder-red-300 focus:border-red-500 focus:outline-none focus:ring-red-500'
        : 'border-gray-300 text-gray-500 focus:border-orange-300 focus:ring focus:ring-orange-400 focus:ring-opacity-70')
    ])
!!}
    name="{{ $name }}"
    id="{{ $name }}"
    aria-invalid="{{ $errors->has($name) }}"
    type="{{ $type }}"
>
