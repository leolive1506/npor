<x-notify.container>
    @if (session()->has('success'))
        @if (is_array(session()->get('success')))
            @foreach (session()->get('success') as $key => $value)
                <x-notify.success event="success{{ $key }}" />
                <span x-init="$dispatch('success{{ $key }}', {{ json_encode(session()->get('success')[$key]) }})"></span>
            @endforeach
        @else
            <x-notify.success />
            <span x-init="$dispatch('success', {{ json_encode(session()->get('success')) }})"></span>
        @endif
    @endif

    @if (session()->has('error'))
        @if (is_array(session()->get('error')))
            @foreach (session()->get('error') as $key => $value)
                <x-notify.error event="error{{ $key }}" />
                <span x-init="$dispatch('error{{ $key }}', {{ json_encode(session()->get('error')[$key]) }})"></span>
            @endforeach
        @else
            <x-notify.error />
            <span x-init="$dispatch('error', {{ json_encode(session()->get('error')) }})"></span>
        @endif
    @endif

    @if (session()->has('warning'))
        @if (is_array(session()->get('warning')))
            @foreach (session()->get('warning') as $key => $value)
                <x-notify.warning event="warning{{ $key }}" />
                <span x-init="$dispatch('warning{{ $key }}', {{ json_encode(session()->get('warning')[$key]) }})"></span>
            @endforeach
        @else
            <x-notify.warning />
            <span x-init="$dispatch('warning', {{ json_encode(session()->get('warning')) }})"></span>
        @endif
    @endif
</x-notify.container>
