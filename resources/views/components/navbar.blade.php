<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b-2">
    <div class="container xl:max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo-navbar.png') }}" class="h-8" alt="Pantai Goa Petapa Logo" />
            <span
                class="self-center text-lg sm:text-xl md:text-2xl font-semibold whitespace-nowrap dark:text-white">Pantai
                Goa
                Petapa</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 rtl:space-x-reverse">
            @if (auth()->check())
                <a href="{{ route('user.order', auth()->user()->uuid) }}">
                    <button type="button"
                        class="relative text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rounded fill-gray-500 dark:fill-gray-400"
                            fill="currentColor" viewBox="0 0 15 15">
                            <path
                                d="M12 12C11.1675 12 10.5 12.6675 10.5 13.5C10.5 13.8978 10.658 14.2794 10.9393 14.5607C11.2206 14.842 11.6022 15 12 15C12.3978 15 12.7794 14.842 13.0607 14.5607C13.342 14.2794 13.5 13.8978 13.5 13.5C13.5 13.1022 13.342 12.7206 13.0607 12.4393C12.7794 12.158 12.3978 12 12 12ZM0 0V1.5H1.5L4.2 7.1925L3.18 9.03C3.0675 9.24 3 9.4875 3 9.75C3 10.1478 3.15804 10.5294 3.43934 10.8107C3.72064 11.092 4.10218 11.25 4.5 11.25H13.5V9.75H4.815C4.76527 9.75 4.71758 9.73025 4.68242 9.69508C4.64725 9.65992 4.6275 9.61223 4.6275 9.5625C4.6275 9.525 4.635 9.495 4.65 9.4725L5.325 8.25H10.9125C11.475 8.25 11.97 7.935 12.225 7.4775L14.91 2.625C14.9625 2.505 15 2.3775 15 2.25C15 2.05109 14.921 1.86032 14.7803 1.71967C14.6397 1.57902 14.4489 1.5 14.25 1.5H3.1575L2.4525 0M4.5 12C3.6675 12 3 12.6675 3 13.5C3 13.8978 3.15804 14.2794 3.43934 14.5607C3.72064 14.842 4.10218 15 4.5 15C4.89782 15 5.27936 14.842 5.56066 14.5607C5.84196 14.2794 6 13.8978 6 13.5C6 13.1022 5.84196 12.7206 5.56066 12.4393C5.27936 12.158 4.89782 12 4.5 12Z"
                                fill-rule="evenodd" clip-rule="evenodd" />
                        </svg>
                        <span
                            class="absolute top-0 left-7 transform -translate-y-1/2 w-5 h-5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full flex items-center justify-center">
                            <p class="text-white lg:text-xs" id="cartCount">
                                {{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</p>
                        </span>
                    </button>
                </a>
            @endif
            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>

            @if (auth()->check())
                <button type="button"
                    class="flex text-sm rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/default-profile.png') }}" alt="User Photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span
                            class="block text-sm text-gray-900 dark:text-white">{{ auth()->user()->pengunjung->nama }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ auth()->user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ route('user.profil', auth()->user()->uuid) }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil</a>
                        </li>
                        <li>
                            <a href="{{ route('user.history-order', auth()->user()->uuid) }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Riwayat
                                Pemesanan</a>
                        </li>
                        <li>
                            <a href="{{ route('user.logout') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            @else
                <a href="{{ url('login') }}"
                    class="inline-flex justify-center items-center py-2 px-5 text-base font-medium text-center text-white rounded-lg bg-slate-500 hover:bg-slate-600 focus:ring-4 focus:ring-slate-100 dark:focus:ring-slate-700">
                    Login
                </a>
            @endif
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/tiket" :active="request()->is('tiket')">Tiket</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/tentang" :active="request()->is('tentang')">Tentang</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/kontak" :active="request()->is('kontak')">Kontak</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
