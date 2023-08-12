<x-app-layout>
    <main class="lg:pr-96">
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">Criar novo item a ser divido</h1>
        </header>

        <div>
            <div class="mx-auto max-w-7xl py-4 sm:px-4 sm:pb-10 sm:pt-4 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 text-center shadow-2xl sm:rounded-3xl px-6 py-4">
                    <div>
                        <x-form.container title="Preencha os campos abaixo" method="POST" class="sm:mt-5" action="fragment-value.store">
                            <x-form.group.input name="name" label="Nome" />
                            <x-form.group.textarea name="description" label="Descrição" />

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
