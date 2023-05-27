@props(['banners'])
<div {{ $attributes->merge(['class' => 'mx-60 swiper bannersSwiper banners-destaques-horizontal']) }}>
    <div class="swiper-wrapper">
        @foreach ($banners as $item)
            <div class="swiper-slide">
                <div class="img-container">
                    <img src="{{ asset($item->name_image) }}" alt="{{ $item->name }}" />
                </div>
            </div>
        @endforeach
    </div>
    <div class="swiper-button-next swiper-button-next-banners"></div>
    <div class="swiper-button-prev swiper-button-prev-banners"></div>
    <div class="swiper-pagination swiper-pagination-banners"></div>
</div>

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

    const configSwiperBanners = {
        ...commonConfig, slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination-banners',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next-banners",
            prevEl: ".swiper-button-prev-banners",
        },
    }

    new Swiper(".bannersSwiper", configSwiperBanners);
</script>
@endpush
