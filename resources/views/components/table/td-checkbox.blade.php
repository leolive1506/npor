<td class="relative w-12 px-6 sm:w-16 sm:px-8" x-data="{ selected: false }">
    <!-- Selected row marker, only show when row is selected. -->
    <div x-cloak x-show="selected " class="absolute inset-y-0 left-0 w-0.5 bg-indigo-600"></div>

    <input x-on:click="selected = !selected" type="checkbox" class="absolute left-4 top-1/2 -mt-2 h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 sm:left-6" {{  $attributes }}>
</td>
