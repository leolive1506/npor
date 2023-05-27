<section class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8 mt-10">
    <article>
        <h4 class="text-orange-400 upppercase font-black h-8 text-[1.6875rem]">DESTAQUES</h4>
        <div class="mt-6 mx-60 swiper highlightsSwiper">
            <div class="swiper-wrapper">
                @foreach ($highlights as $item)
                    <a class="col-span-1 h-full min-h-full swiper-slide"
                        href="{{ URL('/quadra/' . $item->quadra_id . '-' . Illuminate\Support\Str::slug($item->nomedaquadra, '-')) }}">
                        <div class="rounded-lg shadow-lg bg-[#403f3f] max-w-sm p-2">
                            <img class="object-cover w-full h-full"
                                src="{{ asset($item->image ? 'images/sportscourt/' . $item->image : 'images/site/logo-quero-quadras.svg') }}"
                                alt="ttt" />

                            <div class="p-6">
                                <h5 class="text-white text-xl font-medium mb-2">{{ $item->nomedaquadra }}</h5>
                                <div
                                    class=" inline-block px-6 py-2.5 bg-white text-black font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-100 hover:shadow-lg  transition duration-150 ease-in-out">
                                    {{ $item->address }}, Nº{{ $item->number }} - {{ $item->city }} -
                                    {{ $item->state }}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="swiper-button-next swiper-button-next-highlights"></div>
            <div class="swiper-button-prev swiper-button-prev-highlights"></div>
            <div class="swiper-pagination swiper-pagination-highlights"></div>
        </div>
    </article>
</section>

@push('scripts')
    <script type="module">
        const commonConfig = {
            modules: [SwiperNavigation, SwiperPagination, SwiperAutoplay],
            autoplay: {
                delay: 3000,
            },
            cssMode: true,
            mousewheel: true,
            keyboard: true,
        }

        const configSwiperHighlights = {
            ...commonConfig, slidesPerView: 1,
            breakpoints: {
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                640: {
                    slidesPerView: 3,
                    spaceBetween: 10
                }
            },
            pagination: {
                el: '.swiper-pagination-highlights',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next-highlights",
                prevEl: ".swiper-button-prev-highlights",
            },
        }

        new Swiper(".highlightsSwiper", configSwiperHighlights);
    </script>
@endpush
