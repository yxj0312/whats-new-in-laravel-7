<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center" x-data="{ open: false }">
    <h1 class="font-bold tracking-widest uppercase">My Site: {{ $title }}</h1>

    <nav class="hidden md:flex">
        <x-nav-link route="home">Home</x-nav-link>
        <x-nav-link route="about" title="About">About</x-nav-link>
        <x-nav-link route="testimonials">Testimonials</x-nav-link>
        <x-nav-link route="contact">Contact</x-nav-link>
    </nav>

    <button class="focus:outline-none" @click="open = ! open">
        <svg x-show="! open" viewBox="0 0 20 20" width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="red" fill-rule="evenodd">
                <g fill="white">
                    <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                </g>
            </g>
        </svg>

        <svg x-show="open" viewBox="0 0 20 20" width="20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g fill="white">
                    <polygon id="Combined-Shape" points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                </g>
            </g>
        </svg>
    </button>

    <div class="hidden md:block">
        <x-dropdown alignment="right">
            <x-slot name="trigger">
                <button>
                    <img src="" alt="" class="border-white">123
                </button>
            </x-slot>

            <x-dropdown-link href="#" class="text-black">Account</x-dropdown-lin>
            <x-dropdown-link href="#" class="text-black">Support</x-dropdown-lin>
        </x-dropdown>
    </div>
</header>