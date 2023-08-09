<x-app-layout>
    <main>
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">Faça login para participar do pelotão</h1>
        </header>

        <div>
            <div class="mx-auto max-w-7xl py-4 sm:px-6 sm:py-10 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 py-4 sm:py-12 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                    <div>
                        <x-form.container.divider title="Preencha os campos ao lado" action="enter-stuent-class.login"
                            method="POST" class="sm:mt-5" paramsAction="{{ $studentClass->code_class_id }}">
                            <x-slot:description>
                                <div class="flex flex-col justify-center items-center gap-4">
                                    <p class="mt-1 text-sm text-gray-600">Preecha os campos para participar do pelotão
                                    </p>
                                    <img class="h-1/6 w-1h-1/6 rounded-full" src="{{ asset($studentClass->photo) }}"
                                        alt="">
                                </div>
                            </x-slot:description>
                            <x-form.group.input name="email" label="Email" type="email" />
                            <x-form.group.input name="password" label="Senha" type="password" />

                            <x-slot name="actions">
                                <a href="{{ route('enter-stuent-class.formRegister', $studentClass->code_class_id) }}"
                                    class="underline mr-4 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    Deseja criar uma conta?
                                </a>

                                <x-buttons.index />
                            </x-slot>
                        </x-form.container.divider>
                    </div>

                    <x-icon name="background-image" style="outhers" />
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
