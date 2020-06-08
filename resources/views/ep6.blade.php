<x-layout title="Dropdown Component">
    <x-section>
        <x-dropdown>
            <x-slot name="trigger">
                <button>Click Me</button>
            </x-slot>

            <a class="block px-4 py-1 hover:bg-gray-300 text-sm" href="/">One</a>
            <a class="block px-4 py-1 hover:bg-gray-300 text-sm" href="/">Two</a>
            <a class="block px-4 py-1 hover:bg-gray-300 text-sm" href="/">Three</a>
        </x-dropdown>
    </x-section>
</x-layout>