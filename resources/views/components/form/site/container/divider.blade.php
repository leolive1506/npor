@props([
    'title' => '', 'description' => '', 'infoLeft' => '', 'actions' => '', 'paramsAction' => [],
    'method' => 'POST', 'action' => '#', 'methodForm' => 'POST',
    'hiddenImg' => true, 'classTitle' => '', 'classDescription' => '', 'classContainerInputs' => '',
    'classGridContainer' => '',
])

@php
    if ($method == 'GET') {
        $methodForm = 'GET';
    }
@endphp

<div {{ $attributes->merge(['class' => 'mt-10 max-w-7xl mx-auto sm:px-6']) }}>
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-6 {{ $classGridContainer }}">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0 h-full">
                <h3 class="text-lg font-medium leading-6 text-gray-900 {{ $classTitle }}">{{ $title }}</h3>
                @if ($description)
                    @if (is_string($description))
                        <p class="mt-1 text-sm text-gray-600 {{ $classDescription }}}">{{ $description }}</p>
                    @else
                        {{ $description }}
                    @endif
                @endif
                @if ($infoLeft)
                    <div class="{{ $hiddenImg ? 'hidden' : '' }} sm:contents">
                        {{ $infoLeft }}
                    </div>
                @endif
            </div>
        </div>
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form method="{{ $methodForm }}" action="{{ route($action, $paramsAction) }}">
                @csrf
                <div class="overflow-hidden shadow sm:rounded-md {{ $classContainerInputs }}">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
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
