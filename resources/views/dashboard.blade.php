@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    {{-- Section hero --}}
    <section class="bg-white lg:grid lg:min-h-screen lg:place-content-center">
        <div class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 sm:py-16 md:py-24 lg:px-8 lg:py-32">
            <div class="grid grid-cols-1 md:grid-cols-2 md:items-center md:gap-8 lg:gap-12">
                <!-- Konten Teks -->
                <div class="max-w-prose text-left order-2 md:order-1">
                    <h1
                        class="text-3xl font-bold text-gray-900 sm:text-4xl md:text-5xl lg:text-6xl font-poppins leading-tight">
                        Cari Kos Lebih Mudah,<br class="hidden sm:block">
                        Cepat, dan Nyaman!
                    </h1>

                    <p
                        class="mt-4 text-base text-pretty text-gray-700 sm:text-lg md:text-xl lg:text-2xl lg:leading-relaxed font-inter">
                        <span class="font-bold">KostMudah</span> bantu kamu menemukan tempat tinggal ideal tanpa ribet
                        cukup beberapa klik, langsung bisa sewa!
                    </p>

                    <div class="mt-6 sm:mt-8 flex gap-4">
                        <a class="group relative inline-flex items-center overflow-hidden rounded-sm bg-[#06283D] px-6 py-3 sm:px-8 sm:py-4 md:px-10 md:py-4 text-white rounded-xl hover:bg-[#051c2c] transition-colors duration-300"
                            href="#">
                            <span class="absolute -end-full transition-all group-hover:end-3 md:group-hover:end-4">
                                <svg class="size-4 sm:size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>

                            <span
                                class="text-base sm:text-lg md:text-xl lg:text-[24px] font-medium transition-all group-hover:me-3 md:group-hover:me-4">
                                Sewa Sekarang
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="order-1 md:order-2 mb-8 md:mb-0 flex justify-center md:justify-end">
                    <img src="{{ asset('images/hero-logo.png') }}"
                        class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg h-auto object-contain" alt="hero logo"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Section rekomendasi --}}
    <section class="bg-[#06283D] py-8 sm:py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12 md:mb-16 lg:mb-20">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[36px] font-medium font-sans text-white">
                    Rekomendasi Terbaik
                </h2>
                <div class="flex justify-center mt-3 sm:mt-4">
                    <hr class="w-16 sm:w-20 md:w-24 lg:w-32 h-0.5 border-0 bg-white">
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="flex justify-center">
                <div class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] p-4 sm:p-6 md:p-8 w-full max-w-7xl">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6 md:gap-8">

                        <!-- Card 1 -->
                        <div
                            class="bg-white group hover:shadow-lg rounded-lg sm:rounded-xl lg:rounded-[20px] border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden w-full">
                            <figure class="overflow-hidden h-40 sm:h-48 md:h-52 lg:h-56">
                                <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png"
                                    alt="Kos Bu Jamilah"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </figure>
                            <div class="p-3 sm:p-4 md:p-5">
                                <!-- Title & Like -->
                                <div class="flex justify-between items-start mb-3 sm:mb-4">
                                    <h5 class="font-sans font-medium text-lg sm:text-xl md:text-2xl truncate pr-2">
                                        Kos Bu Jamilah
                                    </h5>
                                    <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                        <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                    </button>
                                </div>

                                <!-- Details -->
                                <div class="space-y-2 sm:space-y-3">
                                    <!-- Location -->
                                    <div class="flex items-start gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-gray-600 flex-shrink-0 mt-0.5"
                                            data-icon="streamline-plump-color:location-pin"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            Sukolilo, Surabaya
                                        </span>
                                    </div>

                                    <!-- Rating -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-yellow-500 flex-shrink-0"
                                            data-icon="fluent-emoji-flat:star"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            4.5/5.0
                                        </span>
                                    </div>

                                    <!-- Price -->
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-green-600 flex-shrink-0"
                                            data-icon="emojione:money-with-wings"></span>
                                        <span class="font-sans text-sm sm:text-base font-semibold text-gray-900">
                                            Rp 1.000.000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 (Duplikat untuk contoh) -->
                        <div
                            class="bg-white group hover:shadow-lg rounded-lg sm:rounded-xl lg:rounded-[20px] border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden w-full">
                            <figure class="overflow-hidden h-40 sm:h-48 md:h-52 lg:h-56">
                                <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png"
                                    alt="Kos Bu Jamilah"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </figure>
                            <div class="p-3 sm:p-4 md:p-5">
                                <div class="flex justify-between items-start mb-3 sm:mb-4">
                                    <h5 class="font-sans font-medium text-lg sm:text-xl md:text-2xl truncate pr-2">
                                        Kos Bu Jamilah
                                    </h5>
                                    <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                        <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                    </button>
                                </div>
                                <div class="space-y-2 sm:space-y-3">
                                    <div class="flex items-start gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-gray-600 flex-shrink-0 mt-0.5"
                                            data-icon="streamline-plump-color:location-pin"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            Sukolilo, Surabaya
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-yellow-500 flex-shrink-0"
                                            data-icon="fluent-emoji-flat:star"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            4.5/5.0
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-green-600 flex-shrink-0"
                                            data-icon="emojione:money-with-wings"></span>
                                        <span class="font-sans text-sm sm:text-base font-semibold text-gray-900">
                                            Rp 1.000.000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div
                            class="bg-white group hover:shadow-lg rounded-lg sm:rounded-xl lg:rounded-[20px] border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden w-full">
                            <figure class="overflow-hidden h-40 sm:h-48 md:h-52 lg:h-56">
                                <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png"
                                    alt="Kos Bu Jamilah"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </figure>
                            <div class="p-3 sm:p-4 md:p-5">
                                <div class="flex justify-between items-start mb-3 sm:mb-4">
                                    <h5 class="font-sans font-medium text-lg sm:text-xl md:text-2xl truncate pr-2">
                                        Kos Bu Jamilah
                                    </h5>
                                    <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                        <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                    </button>
                                </div>
                                <div class="space-y-2 sm:space-y-3">
                                    <div class="flex items-start gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-gray-600 flex-shrink-0 mt-0.5"
                                            data-icon="streamline-plump-color:location-pin"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            Sukolilo, Surabaya
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-yellow-500 flex-shrink-0"
                                            data-icon="fluent-emoji-flat:star"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            4.5/5.0
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-green-600 flex-shrink-0"
                                            data-icon="emojione:money-with-wings"></span>
                                        <span class="font-sans text-sm sm:text-base font-semibold text-gray-900">
                                            Rp 1.000.000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div
                            class="bg-white group hover:shadow-lg rounded-lg sm:rounded-xl lg:rounded-[20px] border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden w-full">
                            <figure class="overflow-hidden h-40 sm:h-48 md:h-52 lg:h-56">
                                <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png"
                                    alt="Kos Bu Jamilah"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                            </figure>
                            <div class="p-3 sm:p-4 md:p-5">
                                <div class="flex justify-between items-start mb-3 sm:mb-4">
                                    <h5 class="font-sans font-medium text-lg sm:text-xl md:text-2xl truncate pr-2">
                                        Kos Bu Jamilah
                                    </h5>
                                    <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                        <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                    </button>
                                </div>
                                <div class="space-y-2 sm:space-y-3">
                                    <div class="flex items-start gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-gray-600 flex-shrink-0 mt-0.5"
                                            data-icon="streamline-plump-color:location-pin"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            Sukolilo, Surabaya
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-yellow-500 flex-shrink-0"
                                            data-icon="fluent-emoji-flat:star"></span>
                                        <span class="font-sans text-sm sm:text-base text-gray-700">
                                            4.5/5.0
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 sm:gap-3">
                                        <span class="iconify text-lg sm:text-xl text-green-600 flex-shrink-0"
                                            data-icon="emojione:money-with-wings"></span>
                                        <span class="font-sans text-sm sm:text-base font-semibold text-gray-900">
                                            Rp 1.000.000
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section pencarian --}}
    <section class="bg-white py-8 sm:py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[36px] font-medium font-sans text-[#06283D]">
                    Pencarian Cepat
                </h2>

                <!-- Underline -->
                <div class="flex justify-center mt-3 sm:mt-4 mb-4 sm:mb-6 md:mb-8">
                    <div class="w-16 sm:w-20 md:w-24 lg:w-32 h-0.5 bg-[#06283D]"></div>
                </div>

                <!-- Filter Badges -->
                <div
                    class="flex flex-wrap justify-center gap-2 sm:gap-3 md:gap-4 max-w-sm sm:max-w-md md:max-w-lg mx-auto px-4">
                    <button
                        class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full border border-[#06283D] text-[#06283D] hover:bg-[#06283D] hover:text-white transition-all duration-200 font-sans font-medium text-xs sm:text-sm md:text-[14px] whitespace-nowrap cursor-pointer">
                        Harga
                    </button>
                    <button
                        class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full border border-[#06283D] text-[#06283D] hover:bg-[#06283D] hover:text-white transition-all duration-200 font-sans font-medium text-xs sm:text-sm md:text-[14px] whitespace-nowrap cursor-pointer">
                        Fasilitas
                    </button>
                    <button
                        class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full border border-[#06283D] text-[#06283D] hover:bg-[#06283D] hover:text-white transition-all duration-200 font-sans font-medium text-xs sm:text-sm md:text-[14px] whitespace-nowrap cursor-pointer">
                        Kategori
                    </button>
                    <button
                        class="px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full border border-[#06283D] text-[#06283D] hover:bg-[#06283D] hover:text-white transition-all duration-200 font-sans font-medium text-xs sm:text-sm md:text-[14px] whitespace-nowrap cursor-pointer">
                        Rating
                    </button>
                </div>
            </div>

            <!-- Cards Container -->
            <div class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] p-4 sm:p-6 md:p-8 shadow-sm">
                <!-- Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 md:gap-8">

                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-xl lg:rounded-[20px] border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group w-full">
                        <!-- Image -->
                        <figure class="overflow-hidden h-48 sm:h-52 md:h-56 lg:h-60">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png" alt="Kos Bu Jamilah"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        </figure>

                        <!-- Content -->
                        <div class="p-4 sm:p-5 md:p-6">
                            <!-- Title & Like -->
                            <div class="flex justify-between items-start mb-3 sm:mb-4">
                                <h5
                                    class="font-sans font-medium text-base sm:text-lg md:text-xl lg:text-2xl text-gray-900 truncate pr-2">
                                    Kos Bu Jamilah
                                </h5>
                                <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                </button>
                            </div>

                            <!-- Details -->
                            <div class="space-y-2 sm:space-y-3">
                                <!-- Location -->
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-gray-600 flex-shrink-0"
                                        data-icon="streamline-plump-color:location-pin"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700 truncate">
                                        Sukolilo, Surabaya
                                    </span>
                                </div>

                                <!-- Rating -->
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-yellow-500 flex-shrink-0"
                                        data-icon="fluent-emoji-flat:star"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700">
                                        4.5/5.0
                                    </span>
                                </div>

                                <!-- Price -->
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-green-600 flex-shrink-0"
                                        data-icon="emojione:money-with-wings"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base font-semibold text-gray-900">
                                        Rp 1.000.000
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-xl lg:rounded-[20px] border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group w-full">
                        <figure class="overflow-hidden h-48 sm:h-52 md:h-56 lg:h-60">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png" alt="Kos Bu Jamilah"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        </figure>
                        <div class="p-4 sm:p-5 md:p-6">
                            <div class="flex justify-between items-start mb-3 sm:mb-4">
                                <h5
                                    class="font-sans font-medium text-base sm:text-lg md:text-xl lg:text-2xl text-gray-900 truncate pr-2">
                                    Kos Bu Jamilah
                                </h5>
                                <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                </button>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-gray-600 flex-shrink-0"
                                        data-icon="streamline-plump-color:location-pin"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700 truncate">
                                        Sukolilo, Surabaya
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-yellow-500 flex-shrink-0"
                                        data-icon="fluent-emoji-flat:star"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700">
                                        4.5/5.0
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-green-600 flex-shrink-0"
                                        data-icon="emojione:money-with-wings"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base font-semibold text-gray-900">
                                        Rp 1.000.000
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white rounded-xl lg:rounded-[20px] border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group w-full">
                        <figure class="overflow-hidden h-48 sm:h-52 md:h-56 lg:h-60">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png" alt="Kos Bu Jamilah"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        </figure>
                        <div class="p-4 sm:p-5 md:p-6">
                            <div class="flex justify-between items-start mb-3 sm:mb-4">
                                <h5
                                    class="font-sans font-medium text-base sm:text-lg md:text-xl lg:text-2xl text-gray-900 truncate pr-2">
                                    Kos Bu Jamilah
                                </h5>
                                <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                </button>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-gray-600 flex-shrink-0"
                                        data-icon="streamline-plump-color:location-pin"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700 truncate">
                                        Sukolilo, Surabaya
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-yellow-500 flex-shrink-0"
                                        data-icon="fluent-emoji-flat:star"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700">
                                        4.5/5.0
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-green-600 flex-shrink-0"
                                        data-icon="emojione:money-with-wings"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base font-semibold text-gray-900">
                                        Rp 1.000.000
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white rounded-xl lg:rounded-[20px] border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden group w-full">
                        <figure class="overflow-hidden h-48 sm:h-52 md:h-56 lg:h-60">
                            <img src="https://cdn.flyonui.com/fy-assets/components/card/image-8.png" alt="Kos Bu Jamilah"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                        </figure>
                        <div class="p-4 sm:p-5 md:p-6">
                            <div class="flex justify-between items-start mb-3 sm:mb-4">
                                <h5
                                    class="font-sans font-medium text-base sm:text-lg md:text-xl lg:text-2xl text-gray-900 truncate pr-2">
                                    Kos Bu Jamilah
                                </h5>
                                <button class="flex-shrink-0 text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="iconify text-xl sm:text-2xl" data-icon="bxs:like"></span>
                                </button>
                            </div>
                            <div class="space-y-2 sm:space-y-3">
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-gray-600 flex-shrink-0"
                                        data-icon="streamline-plump-color:location-pin"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700 truncate">
                                        Sukolilo, Surabaya
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-yellow-500 flex-shrink-0"
                                        data-icon="fluent-emoji-flat:star"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base text-gray-700">
                                        4.5/5.0
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 sm:gap-3">
                                    <span class="iconify text-base sm:text-lg text-green-600 flex-shrink-0"
                                        data-icon="emojione:money-with-wings"></span>
                                    <span class="font-sans text-xs sm:text-sm md:text-base font-semibold text-gray-900">
                                        Rp 1.000.000
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section fitur unggulan --}}
    <section class="py-6 sm:py-12 bg-[#06283D] text-white">
        <div class="container px-4 mx-auto max-w-7xl">
            <!-- Section Header -->
            <div class="space-y-4 text-center mb-8 md:mb-12">
                <h2 class="text-2xl font-medium sm:text-3xl md:text-4xl font-sans">
                    Fitur Unggulan KostMudah
                </h2>
                <div class="flex justify-center">
                    <div class="w-24 sm:w-32 md:w-40 h-0.5 bg-white mt-4"></div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">

                <!-- Card 1: Cari kos berdasarkan peta & lokasi kampus -->
                <div class="feature-card group">
                    <div class="p-4 md:p-6">
                        <!-- Ganti dengan gambar PNG dari aset -->
                        <div class="w-48 h-48 md:w-56 md:h-56 mx-auto mb-4 bg-white p-5 rounded-2xl">
                            <img src="{{ asset('images/search.png') }}" alt="Cari kos berdasarkan peta & lokasi kampus"
                                class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="px-4 pb-6 md:px-6 md:pb-8">
                        <p class="text-center text-lg md:text-xl font-inter text-white leading-relaxed">
                            Cari kos berdasarkan<br>
                            peta & lokasi kampus
                        </p>
                    </div>
                </div>

                <!-- Card 2: Chat langsung dengan pemilik kos -->
                <div class="feature-card group">
                    <div class="p-4 md:p-6">
                        <!-- Ganti dengan gambar PNG dari aset -->
                        <div class="w-48 h-48 md:w-56 md:h-56 mx-auto mb-4 bg-white p-5 rounded-2xl">
                            <img src="{{ asset('images/chat.png') }}" alt="Chat langsung dengan pemilik kos"
                                class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="px-4 pb-6 md:px-6 md:pb-8">
                        <p class="text-center text-lg md:text-xl font-inter text-white leading-relaxed">
                            Chat langsung<br>
                            dengan pemilik kos
                        </p>
                    </div>
                </div>

                <!-- Card 3: Pembayaran aman & fleksibel -->
                <div class="feature-card group">
                    <div class="p-4 md:p-6">
                        <!-- Ganti dengan gambar PNG dari aset -->
                        <div class="w-48 h-48 md:w-56 md:h-56 mx-auto mb-4 bg-white p-5 rounded-2xl">
                            <img src="{{ asset('images/money.png') }}" alt="Pembayaran aman & fleksibel"
                                class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="px-4 pb-6 md:px-6 md:pb-8">
                        <p class="text-center text-lg md:text-xl font-inter text-white leading-relaxed">
                            Pembayaran<br>
                            aman & fleksibel
                        </p>
                    </div>
                </div>

                <!-- Card 4: Filter Cerdas Sesuai Kebutuhan -->
                <div class="feature-card group">
                    <div class="p-4 md:p-6">
                        <!-- Ganti dengan gambar PNG dari aset -->
                        <div class="w-48 h-48 md:w-56 md:h-56 mx-auto mb-4 bg-white p-5 rounded-2xl">
                            <img src="{{ asset('images/filter.png') }}" alt="Filter Cerdas Sesuai Kebutuhan"
                                class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105">
                        </div>
                    </div>
                    <div class="px-4 pb-6 md:px-6 md:pb-8">
                        <p class="text-center text-lg md:text-xl font-inter text-white leading-relaxed">
                            Filter Cerdas<br>
                            Sesuai Kebutuhan
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Section ulasan pengguna --}}
    <section class="bg-white py-8 sm:py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
            <!-- Header Section -->
            <div class="text-center mb-8 sm:mb-12 md:mb-16">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-[36px] font-medium font-sans text-[#06283D]">
                    Ulasan Pengguna
                </h2>
                <div class="flex justify-center mt-3 sm:mt-4">
                    <div class="w-16 sm:w-20 md:w-24 lg:w-32 h-0.5 bg-[#06283D]"></div>
                </div>
            </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 md:gap-10 max-w-7xl mx-auto">

                <!-- Review Card 1 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <!-- Image -->
                    <div class="overflow-hidden h-48 sm:h-56 md:h-64 lg:h-[251px]">
                        <img src="{{ asset('images/pengguna1.png') }}" alt="Ahmad - Pengguna KostMudah"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>

                    <!-- Content -->
                    <div class="p-4 sm:p-6 md:p-8">
                        <div class="space-y-3 sm:space-y-4">
                            <!-- Name -->
                            <h3
                                class="text-center font-inter text-xl sm:text-2xl md:text-3xl lg:text-[32px] font-semibold text-[#06283D]">
                                Ahmad
                            </h3>

                            <!-- Review Text -->
                            <p
                                class="text-center font-inter text-sm sm:text-base md:text-lg lg:text-[16px] text-gray-700 leading-relaxed">
                                Cepat dan mudah cari kos tanpa ribet. Fotonya juga sesuai!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Review Card 2 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div class="overflow-hidden h-48 sm:h-56 md:h-64 lg:h-[251px]">
                        <img src="{{ asset('images/pengguna2.png') }}" alt="Sandi - Pengguna KostMudah"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 sm:p-6 md:p-8">
                        <div class="space-y-3 sm:space-y-4">
                            <h3
                                class="text-center font-inter text-xl sm:text-2xl md:text-3xl lg:text-[32px] font-semibold text-[#06283D]">
                                Sandi
                            </h3>
                            <p
                                class="text-center font-inter text-sm sm:text-base md:text-lg lg:text-[16px] text-gray-700 leading-relaxed">
                                Pembayarannya aman, langsung konfirmasi setelah transfer.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Review Card 3 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div class="overflow-hidden h-48 sm:h-56 md:h-64 lg:h-[251px]">
                        <img src="{{ asset('images/pengguna3.png') }}" alt="Rahman - Pengguna KostMudah"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 sm:p-6 md:p-8">
                        <div class="space-y-3 sm:space-y-4">
                            <h3
                                class="text-center font-inter text-xl sm:text-2xl md:text-3xl lg:text-[32px] font-semibold text-[#06283D]">
                                Rahman
                            </h3>
                            <p
                                class="text-center font-inter text-sm sm:text-base md:text-lg lg:text-[16px] text-gray-700 leading-relaxed">
                                Banyak pilihan kos dekat kampus, tinggal pilih yang cocok.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Review Card 4 -->
                <div
                    class="bg-white rounded-xl sm:rounded-2xl lg:rounded-[20px] shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <div class="overflow-hidden h-48 sm:h-56 md:h-64 lg:h-[251px]">
                        <img src="{{ asset('images/pengguna4.png') }}" alt="Ratna - Pengguna KostMudah"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-4 sm:p-6 md:p-8">
                        <div class="space-y-3 sm:space-y-4">
                            <h3
                                class="text-center font-inter text-xl sm:text-2xl md:text-3xl lg:text-[32px] font-semibold text-[#06283D]">
                                Ratna
                            </h3>
                            <p
                                class="text-center font-inter text-sm sm:text-base md:text-lg lg:text-[16px] text-gray-700 leading-relaxed">
                                Sebagai pemilik kos, saya mudah dapat penyewa lewat KostMudah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Dots (Optional for Mobile) -->
            <div class="flex justify-center mt-8 sm:mt-12 md:hidden">
                <div class="flex space-x-2">
                    <div class="w-2 h-2 rounded-full bg-[#06283D] opacity-30"></div>
                    <div class="w-2 h-2 rounded-full bg-[#06283D] opacity-30"></div>
                    <div class="w-2 h-2 rounded-full bg-[#06283D] opacity-30"></div>
                    <div class="w-2 h-2 rounded-full bg-[#06283D] opacity-30"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section CTA --}}
    <section class="bg-[#06283D] py-12 sm:py-16 md:py-20 lg:py-24 xl:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
            <!-- Quote Text -->
            <div class="mb-8 sm:mb-12 md:mb-16 lg:mb-20">
                <p
                    class="font-bold font-nunito text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-[36px] text-center text-white leading-relaxed sm:leading-loose">
                    "KostMudah adalah platform pencarian kos terpercaya di Surabaya yang membantu mahasiswa dan pekerja
                    menemukan tempat tinggal dengan mudah, aman, dan cepat."
                </p>
            </div>

            <!-- CTA Button -->
            <div class="flex justify-center">
                <a href="#"
                    class="inline-flex items-center justify-center w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:w-[316px] h-14 sm:h-16 md:h-20 lg:h-[85px] px-4 sm:px-6 md:px-8 rounded-xl sm:rounded-2xl lg:rounded-[20px] bg-white text-[#06283D] font-bold font-poppins text-base sm:text-lg md:text-xl lg:text-2xl xl:text-[24px] text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:bg-gray-50 active:scale-95">
                    <span class="whitespace-nowrap">
                        Mulai Cari Sekarang
                        <span class="inline-block ml-1 sm:ml-2">››</span>
                    </span>
                </a>
            </div>

            <!-- Additional Info (Optional) -->
            <div class="mt-8 sm:mt-10 md:mt-12 text-center">
                <p class="font-inter text-white text-sm sm:text-base md:text-lg opacity-90">
                    Bergabung dengan <span class="font-semibold">10.000+</span> pengguna yang telah menemukan kos ideal
                </p>
            </div>
        </div>
    </section>


@endsection
