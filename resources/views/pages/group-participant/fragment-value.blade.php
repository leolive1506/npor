<x-app-layout x-data="{
    isOpenModal: false,
}">
    <main class="lg:pr-96">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">Criar novo item a ser divido</h1>
        </header>

        <div>
            <div class="mx-auto max-w-7xl py-4 sm:px-4 sm:pb-10 sm:pt-4 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 text-center shadow-2xl sm:rounded-3xl px-6 py-4">
                    <div>
                        <x-form.container title="Escolha os participantes" method="POST" class="sm:mt-5"
                            action="group-participant.fragment-value.store" x-data="{ openSelectUsers: false }" :paramsAction="request('fragment_value_id')">
                            <label class="relative inline-flex items-center col-span-6 cursor-pointer">
                                <input type="checkbox" name="is_all_participants" class="sr-only peer" checked x-on:click="openSelectUsers = !openSelectUsers">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Todos</span>
                            </label>
                            <div
                                class="col-span-6 p-4 bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 w-full" x-cloak  x-show="openSelectUsers">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Participantes</h3>
                                    {{-- <button type="button"
                                        class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                        <x-icon name="x-circle" class="w-8 h-8" />
                                    </button> --}}
                                </div>
                                <div class="flow-root">
                                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 max-h-60 overflow-y-auto ">
                                        @foreach ($usersStudentClass as $userStudentClass)
                                            <li class="w-full">
                                                <label class="flex flex-1 w-full items-center space-x-4 p-3 sm:py-4 border active:scale-90 transition-transform border-transparent hover:border-gray-700 rounded cursor-pointer">
                                                    <input type="checkbox" value="{{ $userStudentClass->id }}" name="group_participants[]" class="rounded" />
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="{{ asset($userStudentClass->user->photo) }}"
                                                            alt="{{ $userStudentClass->user->student_number }} {{ $userStudentClass->user->war_name }}">
                                                    </div>
                                                    <div class="min-w-0">
                                                        <p
                                                            class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            {{ $userStudentClass->user->student_number }} {{ $userStudentClass->user->war_name }}
                                                        </p>
                                                    </div>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            {{-- <x-form.group.input name="name" label="Nome" />
                            <x-form.group.textarea name="description" label="Descrição" /> --}}

                            <x-slot name="actions">
                                <x-buttons.index title="Avançar" />
                            </x-slot>
                        </x-form.container>
                    </div>

                    <x-icon name="background-image" style="outhers" />
                </div>
            </div>
        </div>
    </main>

    <!-- Activity feed -->
    <aside
        class="bg-black/10 lg:fixed lg:bottom-0 lg:right-0 lg:top-16 lg:w-96 lg:overflow-y-auto lg:border-l lg:border-white/5">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h2 class="text-base font-semibold leading-7 text-white">Pelotão</h2>
            <a href="#" class="text-sm font-semibold leading-6 text-indigo-400">View all</a>
        </header>
        <ul role="list" class="divide-y divide-white/5">
            @foreach ($usersStudentClass as $userStudentClass)
                <li class="px-4 py-4 sm:px-6 lg:px-8">
                    <div class="flex items-center gap-x-3">
                        <img src="{{ asset($userStudentClass->user->photo) }}"
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
        </ul>
    </aside>
</x-app-layout>
