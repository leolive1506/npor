@props([
    'title' => '', 'description' => '', 'actions' => '', 'paramsAction' => [],
    'method' => 'POST', 'action' => '#', 'methodForm' => 'POST', 'withFile' => false,
    'cols' => 'grid-cols-6', 'containerInputsClass' => ''
])

@php
    if ($method == 'GET') {
        $methodForm = 'GET';
    }
@endphp

<div {{  $attributes->merge(['class' => 'mt-10 sm:mt-0 max-w-7xl mx-auto']) }}>
    <div class="grid md:grid-cols-3 md:gap-6">
        @if ($title)
            <div>
                <div class="px-4 sm:px-0 h-full">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $title }}</h3>
                    @if ($description)
                        <p class="mt-1 text-sm text-gray-600">{{ $description }}</p>
                    @endif
                </div>
            </div>
        @endif

        <div class="mt-5 md:col-span-3 md:mt-0">
            <form
                method="{{ $methodForm }}"
                action="{{ route($action, $paramsAction) }}"
                enctype="{{ $withFile ? 'multipart/form-data' : ''}}"
            >
                @method($method)
                @csrf

                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid {{ $cols }} gap-6 {{ $containerInputsClass }}">
                            {{ $slot }}
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        @if ($actions)
                            {{ $actions }}
                        @else
                            <x-buttons.index />
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
