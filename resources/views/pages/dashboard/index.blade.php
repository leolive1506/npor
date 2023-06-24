<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div>
        <x-navigation.in-squad.mobile />
        <x-navigation.in-squad.desktop />

        <div class="xl:pl-72">
            <!-- Sticky search header -->
            <div
                class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-6 border-b border-white/5 bg-gray-900 px-4 shadow-sm sm:px-6 lg:px-8">
                <button type="button" class="-m-2.5 p-2.5 text-white xl:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <form class="flex flex-1" action="#" method="GET">
                        <label for="search-field" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-500"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input id="search-field"
                                class="block h-full w-full border-0 bg-transparent py-0 pl-8 pr-0 text-white focus:ring-0 sm:text-sm"
                                placeholder="Search..." type="search" name="search">
                        </div>
                    </form>
                </div>
            </div>

            <main class="lg:pr-96">
                <header
                    class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
                    <h1 class="text-base font-semibold leading-7 text-white">Recentemente criados</h1>
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
            </main>

            <!-- Activity feed -->
            <aside
                class="bg-black/10 lg:fixed lg:bottom-0 lg:right-0 lg:top-16 lg:w-96 lg:overflow-y-auto lg:border-l lg:border-white/5">
                <header
                    class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
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
                        <p class="mt-3 truncate text-sm text-gray-500">Pushed to <span
                                class="text-gray-400">ios-app</span> (<span
                                class="font-mono text-gray-400">2d89f0c8</span> on <span
                                class="text-gray-400">main</span>)</p>
                    </li>

                    <!-- More items... -->
                </ul>
            </aside>
        </div>
    </div>
</body>

</html>
