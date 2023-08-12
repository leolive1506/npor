<x-app-layout>
    <main class="lg:pr-96">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">Dividir valor</h1>
            <x-links.index title="Criar" href="{{ route('fragment-value.create') }}">
                <x-slot:icon>
                    <x-icon name="plus-circle" class="h-6 w-6" />
                </x-slot:icon>
            </x-links.index>
        </header>
        <ul role="list" class="divide-y divide-white/5">
            <li class="relative flex items-center space-x-4 px-4 py-4 sm:px-6 lg:px-8">
                <div class="min-w-0 flex-auto">
                    <div class="flex items-center gap-x-3">
                        <x-status.circle />
                        <h2 class="min-w-0 text-sm font-semibold leading-6 text-white">
                            <a href="#" class="flex gap-x-2">
                                <span class="truncate">Quadro</span>
                                <span class="text-gray-400">/</span>
                                <span class="whitespace-nowrap">1º GC</span>
                                <span class="absolute inset-0"></span>
                            </a>
                        </h2>
                    </div>
                    <div class="mt-3 flex items-center gap-x-2.5 text-xs leading-5 text-gray-400">
                        <p class="truncate">Deploys from GitHub</p>
                        <svg viewBox="0 0 2 2" class="h-0.5 w-0.5 flex-none fill-gray-300">
                            <circle cx="1" cy="1" r="1" />
                        </svg>
                        <p class="whitespace-nowrap">Iniciado 1m 32s ago</p>
                    </div>
                </div>
                <div
                    class="rounded-full flex-none py-1 px-2 text-xs font-medium ring-1 ring-inset text-gray-400 bg-gray-400/10 ring-gray-400/20">
                    Preview
                </div>
                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </li>

        </ul>
    </main>

    <!-- Activity feed -->
    <aside
        class="bg-black/10 lg:fixed lg:bottom-0 lg:right-0 lg:top-16 lg:w-96 lg:overflow-y-auto lg:border-l lg:border-white/5">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h2 class="text-base font-semibold leading-7 text-white">Pelotão</h2>
            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">View all</a>
        </header>
        {{-- <ul role="list" class="divide-y divide-white/5">
            @foreach ($usersStudentClass as $userStudentClass)
                <li class="px-4 py-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-x-3">
                        <img src="{{ $userStudentClass->user->photo }}"
                            alt="" class="h-6 w-6 flex-none rounded-full bg-gray-800">
                        <h3 class="flex-auto truncate text-sm font-semibold leading-6 text-white">
                            {{ $userStudentClass->user->student_number }} {{ $userStudentClass->user->war_name }}
                        </h3>
                        @switch($userStudentClass->position_id)
                            @case($userPositions['sheriff'])
                                <x-status.circle color="text-blue-500" />
                                @break
                            @case($userPositions['deputySheriff'])
                                <x-status.circle color="text-green-500" />
                                @break
                            @default

                        @endswitch

                        <time datetime="{{ $userStudentClass->user->created_at }}" class="flex-none text-xs text-gray-600">1h</time>
                    </div>
                    </p>
                </li>
            @endforeach
        </ul> --}}
    </aside>
</x-app-layout>
