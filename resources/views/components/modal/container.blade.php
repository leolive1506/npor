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
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-md sm:p-6 max-h-[90vh] overflow-y-auto">
                <button class="rounded-full absolute right-3 top-3" x-on:click="{{ $open }} = false">
                    <x-icon name="x-circle" class="h-8 w-8 text-gray-500 hover:text-gray-700 transition-colors" />
                </button>
                <div>
                    @if ($icon)
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full {{ $bgIcon }}">
                            {{ $icon }}
                        </div>
                    @endif
                    <div class="mt-3 text-center sm:mt-5">
                        @if (is_string($title))
                            <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">{{ $title }}</h3>
                        @else
                            {{ $title }}
                        @endif

                        <div class="mt-2">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @if ($action)
                    <div class="mt-5 sm:mt-6">
                        {{ $action }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
