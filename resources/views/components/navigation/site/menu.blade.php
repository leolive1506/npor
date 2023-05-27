@foreach (config('menu.site') as $link)
    <x-navigation.site.nav-link
        :title="$link['text']"
        :href="route($link['url'])"
        :active="request()->routeIs($link['url'])"
    />
@endforeach
