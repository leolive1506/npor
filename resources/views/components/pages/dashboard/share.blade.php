<div {{ $attributes }}>
    <div class="mx-auto max-w-7xl py-8 sm:px-6 sm:py-10 lg:px-8">
        <div
            class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center shadow-2xl sm:rounded-3xl sm:px-16">
            <h2 class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-white sm:text-4xl">
                Compartilhe com seu pelotão
            </h2>
            <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-300">
                Clique para copiar o link e enviar no WhatsApp para seus camaradas se ajuntarem ao pelotão
            </p>
            <div x-data="{
                copyText: '{{ $shareURL }}',
                copyNotification: false,
                copyToClipboard() {
                    navigator.clipboard.writeText(this.copyText);
                    this.copyNotification = true;
                    let that = this;
                    setTimeout(function() {
                        that.copyNotification = false;
                    }, 3000);
                }
            }" class="mt-10 flex items-center justify-center gap-x-6">
                <button type="button" @click="copyToClipboard();"
                    class="flex items-center gap-2 rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                    <div class="relative z-20 flex items-center">
                        <div x-show="copyNotification" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-2"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-x-0"
                            x-transition:leave-end="opacity-0 translate-x-2" class="absolute left-0" x-cloak>
                            <div
                                class="px-3 h-7 -ml-1.5 items-center flex text-xs bg-green-500 border-r border-green-500 -translate-x-full text-white rounded">
                                <span>Copiado!</span>
                                <div
                                    class="absolute right-0 inline-block h-full -mt-px overflow-hidden translate-x-3 -translate-y-2 top-1/2">
                                    <div
                                        class="w-3 h-3 origin-top-left transform rotate-45 bg-green-500 border border-transparent">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center h-8 text-xs group">
                            <x-icon name="copy" x-show="!copyNotification"
                                class="w-4 h-4 stroke-current text-white" />
                            <x-icon name="copied" x-show="copyNotification"
                                class="w-4 h-4 stroke-current text-white" />
                        </div>
                    </div>
                    Clique aqui para copiar
                    <x-icon style="social" name="whatsapp" />
                </button>
            </div>

            <x-icon name="background-image" style="outhers" />
        </div>
    </div>
</div>
