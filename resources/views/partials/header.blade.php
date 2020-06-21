<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="font-bold tracking-widest uppercase">My Site: {{ $title }}</h1>

    <nav>
        <x-nav-link route="home">Home</x-nav-link>
        <x-nav-link route="about" title="About">About</x-nav-link>
        <x-nav-link route="testimonials">Testimonials</x-nav-link>
        <x-nav-link route="contact">Contact</x-nav-link>
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