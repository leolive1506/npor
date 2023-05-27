<footer class="min-h-[6.875rem] mt-0 h-auto w-full border-t-[3px] border-[#ca7d27] pb-6">
    <div class="flex flex-col max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center">
            <div class="self-start">
                <img class="py-4" width="104" height="32"
                    src="{{ asset('images/site/logo-quero-quadras.svg') }}" alt="Quero Quadras">
            </div>
            <div class="">
                <ul class="grid grid-cols-2 sm:flex gap-2">
                    @foreach (config('menu.site') as $link)
                        <li>
                            <a class="block sm:inline-flex items-center px-1 pt-1 text-base font-medium text-white"
                                href="{{ route($link['url']) }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-4 sm:mt-0">
                <ul class="flex gap-2 justify-between sm:justify-end">
                    <li>
                        <a href="{{ $social->link_insta }}" target="_blank" rel="noopener noreferrer">
                            <x-icon name="instagram" style="social" class="h-8 w-8" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social->link_face }}" target="_blank" rel="noopener noreferrer">
                            <x-icon name="facebook" style="social" class="h-8 w-8" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social->link_whats }}" target="_blank" rel="noopener noreferrer">
                            <x-icon name="whatsapp" style="social" class="h-8 w-8" />
                        </a>
                    </li>
                    <li>
                        <a href="{{ $social->link_twitter }}" target="_blank" rel="noopener noreferrer">
                            <x-icon name="twitter" style="social" class="h-8 w-8" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="self-center sm:self-end mr-0">
            <div class="col-md-1 col-4">
                <a href="https://xideaagencia.com.br/" target="_blank" rel="noopener noreferrer">
                    <img class="w-[2.74rem] h-[2.74rem]" src="{{ asset('images/site/logo-xidea.svg') }}"
                        alt="Quero Quadras"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center text-xs text-gray-50">© Quero Quadras - Todos os direitos reservados</p>
            </div>
        </div>
    </div>
</footer>
