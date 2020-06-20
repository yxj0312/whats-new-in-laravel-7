<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="font-bold tracking-widest uppercase">My Site: {{ $title }}</h1>

    <nav>
        <a class="px-6 hover:underline hover:text-blue-500" href="/">Home</a>
        <a class="px-6 hover:underline hover:text-blue-500" href="/about">About</a>
        <a class="px-6 hover:underline hover:text-blue-500 {{ Request::is('blade-components-cookbook-ep7/testimonials') ? 'text-blue-500' : '' }}" href="/blade-components-cookbook-ep7/testimonials">Testimonials</a>
        <a class="px-6 hover:underline hover:text-blue-500" href="/contact">Contact</a>
    </nav>

    <x-dropdown alignment="right">
        <x-slot name="trigger">
            <button>
                <img src="" alt="" class="border-white">123
            </button>
        </x-slot>

        <x-dropdown-link href="#" class="text-black">Account</x-dropdown-lin>
        <x-dropdown-link href="#" class="text-black">Support</x-dropdown-lin>
    </x-dropdown>
</header>