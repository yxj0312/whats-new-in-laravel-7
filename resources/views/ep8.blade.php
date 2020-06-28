<x-layout title="Tabs Component">
    <x-section>
        <x-tabs>
            <x-tab name="First">
                First content goes there
            </x-tab>

            <x-tab name="Second">
                Second content goes there
            </x-tab>
            
            <x-tab name="Third">
                Third content goes there
            </x-tab>
            {{-- <div>
                <button @click="active = 'First'">First</button>
                <button @click="active = 'Second'">Second</button>
                <button @click="active = 'Third'">Third</button>
            </div>

            <div>
                <div x-show="active === 'First'">First content goes here.</div>
                <div x-show="active === 'Second'">Second content goes here.</div>
                <div x-show="active === 'Third'">Third content goes here.</div>
            </div> --}}
        </x-tabs>
    </x-section>
</x-layout>