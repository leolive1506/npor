<x-table.container name="Users 2">
    <x-slot:actions>
        <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add user</button>
    </x-slot:actions>

    <x-table.table>
        <x-table.thead>
          <x-table.tr>
            <x-table.th>Name</x-table.th>
            <x-table.th>Title</x-table.th>
            <x-table.th>Email</x-table.th>
            <x-table.th>Role</x-table.th>
            <x-table.th-action><span class="sr-only">Edit</span></x-table.th-action>
          </x-table.tr>
        </x-table.thead>
        <tbody class="divide-y divide-gray-200 bg-white">
          <!-- Selected: "bg-gray-50" -->
          <x-table.tr>
            <x-table.td bold>Lindsay Walton</x-table.td>
            <x-table.td>Front-end Developer</x-table.td>
            <x-table.td>lindsay.walton@example.com</x-table.td>
            <x-table.td>Member</x-table.td>
            <x-table.td-action>
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
            </x-table.td-action>
          </x-table.tr>
          <x-table.tr>
            <x-table.td bold>Lindsay Walton</x-table.td>
            <x-table.td>Front-end Developer</x-table.td>
            <x-table.td>lindsay.walton@example.com</x-table.td>
            <x-table.td>Member</x-table.td>
            <x-table.td-action>
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
            </x-table.td-action>
          </x-table.tr>
        </tbody>
      </x-table.table>
</x-table.container>
