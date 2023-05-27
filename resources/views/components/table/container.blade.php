@props(['name' => null, 'description' => '', 'actions' => false, 'actionAllSelected' => false])
<div {{ $attributes }}>
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">{{ $name ?? null }}</h1>
            @if ($description)
                <p class="mt-2 text-sm text-gray-700">{{ $description }}</p>
            @endif
        </div>
        @if ($actions)
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                {{ $actions }}
            </div>
        @endif
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    @if ($actionAllSelected)
                        <div class="absolute top-0 left-12 flex h-12 items-center space-x-3 bg-gray-50 sm:left-16">
                            {{ $actionAllSelected }}
                        </div>
                    @endif
                    <!-- Selected row actions, only show when rows are selected. -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
