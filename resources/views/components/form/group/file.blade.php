@props(['label' => 'Escolha um arquivo', 'name', 'multiple' => false, 'preview' => false, 'src' => null])

<div
    {{ $attributes->merge(['class' => 'flex flex-col justify-start sm:justify-center col-span-6 flex-1 h-full']) }}>
    <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-white">{{ $label }}</label>
    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-200/25 px-6 py-10">
        <div class="text-center">
            @if ($preview)
                <img src="{{ $src }}" alt="Foto do pelotão" class="h-32 w-32 rounded-full object-cover mx-auto max-h-full max-w-full {{ $src ?? 'hidden' }}"
                    id="preview_image">

                <svg class="mx-auto h-12 w-12 text-gray-300 {{ $src ? 'hidden' : 'block' }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                    id="default_img">
                    <path fill-rule="evenodd"
                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                        clip-rule="evenodd" />
                </svg>
            @endif
            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="{{ $name }}"
                    class="relative cursor-pointer rounded-md bg-gray-800 houver:opacity-5 transition-colors p-4 font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span class=>Selecione um arquivo</span>
                    <input type="file" class="sr-only" name="{{ $name }}" id="{{ $name }}"
                        {{ $multiple ? 'multiple' : '' }}>
                </label>
            </div>
            {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        const inputImage = document.querySelector("input#photo")
        const output = document.getElementById('preview_image');

        inputImage.onchange = event => {
            const [file] = inputImage.files
            if (file) {
                output.classList.remove('hidden');
                output.src = URL.createObjectURL(file)

                document.querySelector('#default_img').classList.add('hidden')
            }
        }
    </script>
@endpush
