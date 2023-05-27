@props(['value' => null, 'bold' => false])
<td
    {{ $attributes->merge(['class' => 'whitespace-nowrap px-6 py-4 text-sm '
        . ($bold ? 'font-medium text-gray-900' :  'text-gray-500')
    ])}}
>
    {{  $value ?? $slot }}
</td>
