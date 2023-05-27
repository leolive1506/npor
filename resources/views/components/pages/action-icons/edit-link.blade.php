@props(['href', 'title' => 'Editar'])
<a href="{{ $href }}" class="flex justify-center items-center" title="{{ $title }}">
    <x-icon name="pencil" class="h-6 w-6 text-gray-500 hover:text-indigo-500" />
</a>
