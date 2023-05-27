<div>
    @foreach (config('menu.admin') as $link)
        @can($link['can'])
            <x-navigation.admin.nav-link title="{{ $link['text'] }}" href="{{ route($link['url']) }}" icon="{{ $link['icon'] }}"
        {{-- active --}} />
        @endcan
    @endforeach
</div>
