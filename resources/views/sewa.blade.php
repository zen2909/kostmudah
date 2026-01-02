@extends('layouts.app')

@section('title', 'Halaman Sewa')

@section('content')

    <div class="container min-w-full mx-auto px-4 sm:px-6 md:px-8">
        <div
            class="flex w-full max-w-lg sm:max-w-xl md:max-w-2xl lg:max-w-3xl h-[44px] border border-gray-300 rounded-full mt-6 mx-auto shadow-lg items-center px-[16px] mb-5">
            <div class="flex gap-2 items-center">
                <div class="flex items-center">
                    <span class="block iconify text-gray-400 w-[20px] h-[20px]" data-icon="material-symbols:search"></span>
                </div>
                <h3 class="font-sans text-[14px] text-gray-400">Cari Kost Anda</h3>
            </div>
        </div>

        <section class="w-full pt-2 pb-2">
            <div class="flex max-w-screen-lg mx-auto justify-center mb-2">
                <div
                    class="flex max-w-xl px-2 justify-start sm:min-w-full sm:px-3 md:px-4 lg:px-6 sm:justify-center gap-2 sm:gap-6 md:gap-8 overflow-x-auto scroll-smooth hide-scrollbar cursor-pointer">
                    <div
                        class="flex shrink-0 min-w-[110px] sm:min-w-[120px] md:min-w-[140px] h-[36px] sm:[40px] px-4 rounded-full border border-gray-600 items-center justify-center hover:bg-utama hover:text-white">
                        <span class="text-sm sm:text-md font-sans whitespace-nowrap">Rekomendasi</span>
                    </div>
                    <div
                        class="flex shrink-0 min-w-[110px] sm:min-w-[120px] md:min-w-[140px] h-[36px] sm:[40px] px-4 rounded-full border border-gray-600 items-center justify-center hover:bg-utama hover:text-white">
                        <span class="text-sm sm:text-md font-sans whitespace-nowrap">Termurah</span>
                    </div>
                    <div
                        class="flex shrink-0 min-w-[110px] sm:min-w-[120px] md:min-w-[140px] h-[36px] sm:[40px] px-4 rounded-full border border-gray-600 items-center justify-center hover:bg-utama hover:text-white">
                        <span class="text-sm sm:text-md font-sans whitespace-nowrap">Termahal</span>
                    </div>
                    <div
                        class="flex shrink-0 min-w-[110px] sm:min-w-[120px] md:min-w-[140px] h-[36px] sm:[40px] px-4 rounded-full border border-gray-600 items-center justify-center hover:bg-utama hover:text-white">
                        <span class="text-sm sm:text-md font-sans whitespace-nowrap whitespace-nowrap">Rating
                            Terbaik</span>
                    </div>
                </div>
            </div>
        </section>


        <div class="md:grid md:grid-cols-2 lg:grid-cols-4">
            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1 lg:w-full">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div
                        class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div
                        class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div
                        class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="w-full px-3 sm:px-4">
                <div class="max-w-3xl mx-auto">
                    <div
                        class=" mt-6 w-full max-w-md lg:max-w-[700px] h-full mx-auto rounded-2xl border-gray-200 border-2">
                        <div class="flex lg:flex-col gap-3 h-full p-2 lg:p-3 lg:gap-0">
                            <img src="{{ asset('images/tester.png') }}" alt="gambar kost"
                                class="w-[100px] sm:w-[110px] md:w-[120px] lg:w-full lg:justify-center rounded-2xl object-cover">

                            <div class="w-full lg:w-[291px] lg:mt-2">
                                <div class="truncate font-medium font-sans text-sm sm:text-xl mb-2">Kost Bu Jamilah</div>

                                <div class="grid grid-cols-[auto_1fr] gap-2 mb-1">
                                    <div class="flex items-center grid grid-rows-2 gap-1">
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-sky-500"
                                            data-icon="ci:location-outline"></span>
                                        <span class="iconify text-[20px] sm:text-[25px] lg:text-[30px] text-yellow-500"
                                            data-icon="clarity:star-solid"></span>
                                    </div>
                                    <div class="flex items-center grid grid-rows-2 min-w-0 gap-1">
                                        <span
                                            class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px] ">Surabaya,
                                            Indonesia</span>
                                        <span class="truncate font-sans text-[12px] sm:text-[16px] lg:text-[20px]">4,5/5
                                            <span class="text-gray-400">(1000
                                                Reviewer)</span></span>
                                    </div>
                                </div>

                                <div
                                    class="flex items-center pl-1 text-[14px] sm:text-[16px] lg:text-[20px] font-semibold font-sans">
                                    <span class="">Rp 1.000.000<span
                                            class="text-[12px] sm:text-[16px] lg:text-[20px] font-sans font-medum text-gray-400">/Perbulan</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
