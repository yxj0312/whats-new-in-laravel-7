<x-layout title="Dropdown Component">
    <x-section>
        <x-dropdown>
            <x-slot name="trigger">
                <button>Click Me</button>
            </x-slot>

            <x-dropdown-link href="/">One</x-dropdown-link>
            <x-dropdown-link href="/">Two</x-dropdown-link>
            <x-dropdown-link href="/">Three</x-dropdown-link>
        </x-dropdown>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni est alias quidem atque quibusdam id dicta, ipsam nobis autem voluptatibus molestias adipisci rem aliquid, sunt, voluptates aperiam accusamus praesentium vero.
        </p>
    </x-section>

    <x-section>
        <div class="flex justify-end">
            <x-dropdown alignment="right">
                <x-slot name="trigger">
                    <button>Click Me</button>
                </x-slot>

                <x-dropdown-link href="/">One</x-dropdown-link>
                <x-dropdown-link href="/">Two</x-dropdown-link>
                <x-dropdown-link href="/">Three</x-dropdown-link>
            </x-dropdown>
        </div>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni est alias quidem atque quibusdam id dicta, ipsam nobis autem voluptatibus molestias adipisci rem aliquid, sunt, voluptates aperiam accusamus praesentium vero.
        </p>
    </x-section>
</x-layout>