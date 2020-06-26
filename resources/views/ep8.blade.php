<x-layout title="Tabs Component">
    <x-section>
        <div x-data="{ active: 'First' }">
            <div>
                <button @click="active = 'First'">First</button>
                <button @click="active = 'Second'">Second</button>
                <button @click="active = 'Third'">Third</button>
            </div>

            <div>
                <div x-show="active === 'First'">First content goes here.</div>
                <div x-show="active === 'Second'">Second content goes here.</div>
                <div x-show="active === 'Third'">Third content goes here.</div>
            </div>
        </div>
    </x-section>
</x-layout>