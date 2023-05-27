<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex min-h-0 flex-1 flex-col bg-gray-800">
        <div class="flex h-16 flex-shrink-0 items-center bg-gray-900 px-4">
            <x-icon name="logo" class="h-8 w-auto" style="" />
        </div>
        <div class="flex flex-1 flex-col overflow-y-auto">
            <nav class="flex-1 space-y-1 px-2 py-4">
                <x-navigation.admin.menu />
            </nav>
        </div>
    </div>
</div>
