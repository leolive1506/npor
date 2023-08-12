<x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
    Dashboard
</x-nav-link>

<x-nav-link
    :href="route('fragment-value.index')"
    :active="str_contains(request()->url(), 'dividir-valor')"
>
    {{ __('Dividir valor') }}
</x-nav-link>
