<x-app-layout>
    <main class="lg:pr-96">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">{{ $classForCurrentUser->name }}</h1>
            <!-- Sort dropdown -->
            {{-- <div class="relative">
                <button type="button"
                    class="flex items-center gap-x-1 text-sm font-medium leading-6 text-white"
                    id="sort-menu-button" aria-expanded="false" aria-haspopup="true">
                    Sort by
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M10 3a.75.75 0 01.55.24l3.25 3.5a.75.75 0 11-1.1 1.02L10 4.852 7.3 7.76a.75.75 0 01-1.1-1.02l3.25-3.5A.75.75 0 0110 3zm-3.76 9.2a.75.75 0 011.06.04l2.7 2.908 2.7-2.908a.75.75 0 111.1 1.02l-3.25 3.5a.75.75 0 01-1.1 0l-3.25-3.5a.75.75 0 01.04-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="absolute right-0 z-10 mt-2.5 w-40 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="sort-menu-button"
                    tabindex="-1">
                    <!-- Active: "bg-gray-50", Not Active: "" -->
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                        tabindex="-1" id="sort-menu-item-0">Name</a>
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                        tabindex="-1" id="sort-menu-item-1">Date updated</a>
                    <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                        tabindex="-1" id="sort-menu-item-2">Environment</a>
                </div>
            </div> --}}
        </header>

        @if ($classForCurrentUser->users_student_class_count > 1)
            <!-- Deployment list -->
            <ul role="list" class="divide-y divide-white/5">
                <li class="relative flex items-center space-x-4 px-4 py-4 sm:px-6 lg:px-8">
                    <div class="min-w-0 flex-auto">
                        <div class="flex items-center gap-x-3">
                            <x-status.circle />
                            <h2 class="min-w-0 text-sm font-semibold leading-6 text-white">
                                <a href="#" class="flex gap-x-2">
                                    <span class="truncate">Planetaria</span>
                                    <span class="text-gray-400">/</span>
                                    <span class="whitespace-nowrap">ios-app</span>
                                    <span class="absolute inset-0"></span>
                                </a>
                            </h2>
                        </div>
                        <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                            <p class="truncate">Deploys from GitHub</p>
                            <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <p class="whitespace-nowrap">Initiated 1m 32s ago</p>
                        </div>
                    </div>
                    <div
                        class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-gray-400 bg-gray-400/10 ring-gray-400/20">
                        Preview</div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </li>

                <!-- More deployments... -->
            </ul>
        @else
            <div>
                <div class="mx-auto max-w-7xl py-8 sm:px-6 sm:py-10 lg:px-8">
                    <div
                        class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                        <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            Compartilhe com seu pelotão
                        </h2>
                        <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                            Clique para copiar o link e enviar no WhatsApp para seus camaradas se ajuntarem ao pelotão
                        </p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <button type="button" x-on:click="copyToClipboard"
                                class="flex items-center gap-2 rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                                Clique aqui para copiar
                                <span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4"
                                        fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                        <svg viewBox="0 0 1024 1024"
                            class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]"
                            aria-hidden="true">
                            <circle cx="512" cy="512" r="512"
                                fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
                            <defs>
                                <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                                    <stop stop-color="#7775D6" />
                                    <stop offset="1" stop-color="#E935C1" />
                                </radialGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        @endif

    </main>

    <!-- Activity feed -->
    <aside
        class="bg-black/10 lg:fixed lg:bottom-0 lg:right-0 lg:top-16 lg:w-96 lg:overflow-y-auto lg:border-l lg:border-white/5">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h2 class="text-base font-semibold leading-7 text-white">Activity feed</h2>
            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">View all</a>
        </header>
        <ul role="list" class="divide-y divide-white/5">
            <li class="px-4 py-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-x-3">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="h-6 w-6 flex-none rounded-full bg-gray-800">
                    <h3 class="flex-auto truncate text-sm font-semibold leading-6 text-white">Michael Foster
                    </h3>
                    <time datetime="2023-01-23T11:00" class="flex-none text-xs text-gray-600">1h</time>
                </div>
                <p class="mt-3 truncate text-sm text-gray-500">Pushed to <span class="text-gray-400">ios-app</span>
                    (<span class="font-mono text-gray-400">2d89f0c8</span> on <span class="text-gray-400">main</span>)
                </p>
            </li>

            <!-- More items... -->
        </ul>
    </aside>

    <textarea id="share-button">{{ $shareURL }}</textarea>
    @push('scripts')
        <script>
            function copyToClipboard() {
                document.getElementById("share-button").select();
                document.execCommand('copy');
            }
        </script>
    @endpush
</x-app-layout>
