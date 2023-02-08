<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Informações do perfil
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Atualize seus dados se necessário
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="student_number" value="Seu número" />
            <x-text-input id="student_number" class="block mt-1 w-full" type="number" name="student_number" :value="old('student_number')" required autofocus autocomplete="student_number" :value="old('student_number', $user->student_number)" />
            <x-input-error :messages="$errors->get('student_number')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="war_name" value="Seu nome de guerra" />
            <x-text-input id="war_name" class="block mt-1 w-full" type="text" name="war_name" :value="old('war_name')" required autofocus autocomplete="war_name" :value="old('war_name', $user->war_name)" />
            <x-input-error :messages="$errors->get('war_name')" class="mt-2" />
        </div>

        <div>
           <x-input-label for="phone" value="Celular" />
            <x-text-input id="phone" class="block mt-1 w-full" name="phone" :value="old('phone')" required autocomplete="phone" :value="old('phone', $user->phone)" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        E-mail não verificado

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            Clique aqui para verificar seu email
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            Novo link de verificação foi enviado para seu endereço de email
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>Salvar</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >Salvo</p>
            @endif
        </div>
    </form>
</section>
