@props(['open', 'title', 'action' => null, 'icon' => null,  'bgIcon' => 'bg-green-100'])
<div
    x-cloak
    x-show="{{ $open }}"
    x-on:keydown.escape.window="{{ $open }} = false"
    class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!--
      Background backdrop, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div
        x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                x-transition:enter="transform ease-out duration-300 transition"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                {{-- class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md sm:p-6 max-h-[90vh] overflow-y-auto"> --}}
                class="relative p-4 max-w-md min-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-4">
                    @if (is_string($title))
                        <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">{{ $title }}</h3>
                    @else
                        {{ $title }}
                    @endif

                    <button type="button" x-on:click="{{ $open }} = false"
                        class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        <x-icon name="x-circle" class="w-8 h-8" />
                    </button>
                </div>
                <div class="flow-root">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
