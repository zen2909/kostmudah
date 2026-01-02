<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel')</title>
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- NAVBAR --}}
    <nav class=" bg-white fixed w-full z-20 top-0 start-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto pt-4 pb-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/kostmudah.png') }}" class="h-10" alt="kostmudah Logo" />
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-neutral-primary rounded-full md:me-0 focus:ring-4 focus:ring-neutral-tertiary"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/1.webp" class="w-10 h-10 rounded-full shadow-lg"
                        alt="Avatar" />
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden bg-neutral-primary-medium rounded-base shadow-lg w-44" id="user-dropdown">
                    <div class="px-4 py-3 text-sm">
                        <span class="block text-heading font-medium">Joseph McFall</span>
                        <span class="block text-body truncate">name@flowbite.com</span>
                    </div>
                    <ul class="p-2 text-sm text-body font-medium" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Search/Rent</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">History</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Payment</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-fg-brand md:p-0 md:dark:hover:bg-transparent">Likes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="pt-24 min-h-screen">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">

                <!-- Company Info Section -->
                <div class="space-y-6">
                    <!-- Logo -->
                    <div class="flex justify-center lg:justify-start">
                        <div class="h-32 w-32 sm:h-40 sm:w-40 lg:h-36 lg:w-36">
                            <img src="{{ asset('images/hero-logo.png') }}" alt="KostMudah Logo"
                                class="h-full w-full object-contain">
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-center lg:text-left text-gray-700 font-medium font-poppins text-sm sm:text-base">
                        Platform sewa kos terpercaya di Surabaya.
                        Temukan tempat tinggal ideal kamu
                        dengan cepat, mudah, dan aman.
                    </p>

                    <!-- Contact Info -->
                    <div class="space-y-4">
                        <!-- Location -->
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-[#06283D] text-lg mt-0.5" data-icon="zondicons:location"></span>
                            <p class="font-inter font-light text-gray-600 text-sm sm:text-base">
                                Surabaya, Jawa Timur
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-[#06283D] text-lg mt-0.5" data-icon="dashicons:email"></span>
                            <p class="font-inter font-light text-gray-600 text-sm sm:text-base">
                                Kostmudah@gmail.com
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-[#06283D] text-lg mt-0.5"
                                data-icon="fluent:call-16-filled"></span>
                            <p class="font-inter font-light text-gray-600 text-sm sm:text-base">
                                +62647352637
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Links -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:col-span-2">
                    <!-- Navigate -->
                    <div>
                        <h3 class="font-poppins font-semibold text-[#06283D] text-lg mb-4 sm:mb-6">
                            Navigate
                        </h3>
                        <ul class="space-y-3 sm:space-y-4">
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Search/Rent
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    History
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Payment
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Like
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Help -->
                    <div>
                        <h3 class="font-poppins font-semibold text-[#06283D] text-lg mb-4 sm:mb-6">
                            Help
                        </h3>
                        <ul class="space-y-3 sm:space-y-4">
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Pusat Bantuan
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Syarat & Ketentuan
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Kebijakan Privasi
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Follow Us -->
                    <div>
                        <h3 class="font-poppins font-semibold text-[#06283D] text-lg mb-4 sm:mb-6">
                            Follow Us
                        </h3>
                        <ul class="space-y-3 sm:space-y-4">
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Instagram: @kostmudah.id
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    Facebook: KostMudah
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="font-inter text-gray-600 hover:text-[#06283D] transition-colors duration-200 text-sm sm:text-base block">
                                    X: @kostmudah
                                </a>
                            </li>
                        </ul>

                        <!-- Social Media Icons (Optional addition) -->
                        <div class="flex space-x-4 mt-6">
                            <a href="#" class="text-[#06283D] hover:opacity-80 transition-opacity">
                                <span class="iconify text-xl" data-icon="mdi:instagram"></span>
                            </a>
                            <a href="#" class="text-[#06283D] hover:opacity-80 transition-opacity">
                                <span class="iconify text-xl" data-icon="mdi:facebook"></span>
                            </a>
                            <a href="#" class="text-[#06283D] hover:opacity-80 transition-opacity">
                                <span class="iconify text-xl" data-icon="mdi:twitter"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 sm:mt-12 pt-6 sm:pt-8 border-t border-gray-200">
                <p class="text-center text-gray-500 text-xs sm:text-sm">
                    © 2024 KostMudah. All rights reserved.
                </p>
            </div>
        </div>
    </footer>


    <script src="../node_modules/flyonui/flyonui.js"></script>
    <script src="../node_modules/flyonui/dist/accordion.js"></script>
</body>

</html>
