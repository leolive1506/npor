@props(['action', 'method' => 'POST', 'title' => 'Deletar', 'confirm' => 'Desaja deletar?'])
<form action="{{ $action }}" method="{{ $method }}" class="flex justify-center items-center">
    @csrf
    @method('delete')
    <button class="flex justify-center items-center" onclick="return confirm({{ json_encode($confirm) }})">
        <span title="{{ $title }}">
            <x-icon name="x-circle" class="h-6 w-6 text-gray-500 hover:text-red-600" />
        </span>
    </button>
</form>
