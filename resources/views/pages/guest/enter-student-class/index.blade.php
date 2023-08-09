<x-app-layout>
    <main>
        <header class="flex items-center justify-between border-b border-white/5 px-4 py-4 sm:px-6 sm:py-6 lg:px-8">
            <h1 class="text-base font-semibold leading-7 text-white">Você foi convidado para participar do pelotão
                <strong>{{ $studentClass->name }}</strong></h1>
        </header>

        <div>
            <div class="mx-auto max-w-7xl py-8 sm:px-6 sm:py-10 lg:px-8">
                <div
                    class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset($studentClass->photo) }}" alt="" class="w-1/5 h-w-1/5 rounded-full">
                    </div>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                        Clique no botão abaixo para participar do seu pelotão
                    </p>
                    <div class="mt-4 flex items-center justify-center gap-x-6">
                        <a href="{{ route('enter-stuent-class.formRegister', $studentClass->code_class_id) }}"
                            class="flex items-center gap-2 rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                            Participar do pelotão
                        </a>
                    </div>

                    <x-icon name="background-image" style="outhers" />
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
