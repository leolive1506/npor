<div {{ $attributes }}>
    <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
        <!--
            Off-canvas menu backdrop, show/hide based on off-canvas menu state.

            Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
            Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

        <div class="fixed inset-0 z-40 flex">
            <!--
            Off-canvas menu, show/hide based on off-canvas menu state.

            Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative flex w-full max-w-xs flex-1 flex-col bg-gray-800 pt-5 pb-4">
                <!--
                Close button, show/hide based on off-canvas menu state.

                Entering: "ease-in-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
                Leaving: "ease-in-out duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button"
                        class="ml-1 flex h-10 w-10 items-center justify-center rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        x-on:click="openMobile = false"
                    >
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x-mark -->
                        <x-icon name="x-mark" class="h-6 w-6 text-white" />
                    </button>
                </div>

                <div class="flex flex-shrink-0 items-center px-4">
                    <x-icon name="logo" class="h-8 w-auto" style="" />
                </div>
                <div class="mt-5 h-0 flex-1 overflow-y-auto">
                    <nav class="space-y-1 px-2">
                        <x-navigation.admin.menu />
                    </nav>
                </div>
            </div>

            <div class="w-14 flex-shrink-0" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>
    </div>
</div>
