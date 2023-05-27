@props(['plans', 'periods', 'isAdmin'])
<div {{ $attributes->merge(['class' => 'grid grid-cols-1 sm:grid-cols-3 gap-2 items-start justify-center w-full mt-8']) }}>
    @foreach ($plans as $item)
        <div
            class="hover:md:scale-110 hover:z-10 hover:transform flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg text-gray-700">
            <div class="flex flex-col items-center p-10 bg-gray-200">
                <span class="font-semibold">{{ $item->name }}</span>
                <div class="flex items-center">
                    <span class="text-3xl">R$</span>
                    <span class="text-5xl font-bold">{{ $item->amount_per_payment }}</span>
                    <span class="text-2xl text-gray-500">
                        /{{ strtolower($periods[$item->period]) }}
                    </span>
                </div>
            </div>
            <div class="p-10">
                <ul>
                    @foreach ($item->benefits as $benefit)
                        <li class="flex items-center">
                            <x-icon name="check"  class="w-5 h-5 text-green-600 fill-current" />
                            <span class="ml-2">{{ $benefit->benefit }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="flex px-10 pb-10 justfy-center">
                @if(!$isAdmin)
                    <a href="{{  URL::to($item->endpoint) }}"
                        class="flex items-center justify-center w-full h-12 px-6 text-sm uppercase bg-gray-200 rounded-lg font-bold">
                        Contratar
                    </a>
                @else
                    <div class="flex items-center justify-center w-full h-12 px-6 text-sm uppercase bg-yellow-500 text-white rounded-lg font-bold">
                        <span>Você é um admin</span>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
