@extends('layouts.app')

@section('title', 'Halaman Detail')

@section('content')

    <section class="max-w-md mx-auto">
        <div class="relative w-full">
            <img src="{{ asset('images/tester.png') }}" alt="gambar tester" class="object-cover">

            <div class="absolute top-48 left-0 w-full rounded-t-3xl z-10 overflow-hidden">
                <div class="w-full bg-white">
                    <div class="flex text-[18px] font-sans font-medium px-6 pt-6">
                        <h1>Kost Bu Jamilah,&nbsp;</h1>
                        <h1>Surabaya</h1>
                    </div>

                    <div class="w-full grid grid-cols-2 mt-2 px-6">
                        <div class="w-full  grid grid-cols-[auto_1fr] gap-2">
                            <div class="grid grid-rows-3">
                                <span class="iconify text-[16px] text-sky-500" data-icon="ci:location-outline"></span>
                                <span class="iconify text-[16px] text-yellow-500" data-icon="clarity:star-solid"></span>
                                <span class="iconify text-[16px] text-green-500"
                                    data-icon="fluent:presence-available-16-filled"></span>
                            </div>

                            <div class="grid grid-rows-3">
                                <span class="text-xs font-sans">Sukolilo,&nbsp;Surabaya</span>
                                <span class="text-xs font-sans">4,5/5<span class="text-gray-400">(100
                                        Reviewers)</span></span>
                                <span class="text-xs font-sans">3 Tersedia</span>
                            </div>
                        </div>
                        <div class="w-full grid grid-rows-[1fr_auto] gap-1">
                            <div class=" font-sans text-end">
                                <span class="text-[16px] font-semibold">Rp 1.000.000</span><br>
                                <span class="text-xs font-medium text-gray-400">/Perbulan</span>
                            </div>
                            <button class="flex justify-end hover:text-red-500 transition-colors">
                                <span class="iconify text-[26px] text-gray-400 active:text-red-500"
                                    data-icon="bxs:like"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 w-full px-6 mt-7">
                    <span class="font-sans text-[14px] font-medium">Fasilitas</span>
                    <button type="button" class="font-sans text-[14px] font-medium text-blue-500 text-end hover:underline"
                        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal"
                        data-hs-overlay="#hs-scale-animation-modal">
                        Lihat semua
                    </button>

                    <div id="hs-scale-animation-modal"
                        class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
                        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
                        <div
                            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-56px)] flex items-center">
                            <div
                                class="w-full flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                <div
                                    class="flex justify-between items-center py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                                        Modal title
                                    </h3>
                                    <button type="button"
                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-y-auto">
                                    <p class="mt-1 text-gray-800 dark:text-neutral-400">
                                        This is a wider card with supporting text below as a natural lead-in to additional
                                        content.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-2.5 px-6">
                    <div class="grid grid-cols-4 gap-10 items-start auto-rows-max ">
                        <div class="grid grid-rows-[auto_auto] justify-items-center">
                            <div class="flex w-[60px] h-[60px] justify-center items-center bg-lighter-blue rounded-[20px]">
                                <span class="iconify
                        w-[30px] h-[30px] text-utama"
                                    data-icon="mingcute:tv-1-fill"></span>
                            </div>
                            <div class="flex w-full mt-1.5 justify-center items-start mt-1.5">
                                <span class="text-[12px] font-sans text-center text-black">TV</span>
                            </div>
                        </div>
                        <div class="grid grid-rows-[auto_auto] justify-items-center">
                            <div class="flex w-[60px] h-[60px] justify-center items-center bg-lighter-blue rounded-[20px]">
                                <span class="iconify
                        w-[30px] h-[30px] text-utama"
                                    data-icon="mdi:cupboard"></span>
                            </div>
                            <div class="flex w-full mt-1.5 justify-center items-start mt-1.5">
                                <span class="text-[12px] font-sans text-center text-black">Lemari</span>
                            </div>
                        </div>
                        <div class="grid grid-rows-[auto_auto] justify-items-center">
                            <div class="flex w-[60px] h-[60px] justify-center items-center bg-lighter-blue rounded-[20px]">
                                <span class="iconify
                        w-[30px] h-[30px] text-utama"
                                    data-icon="fluent:bed-20-filled"></span>
                            </div>
                            <div class="flex w-full mt-1.5 justify-center items-start mt-1.5">
                                <span class="text-[12px] text-center font-sans text-black">Tempat Tidur</span>
                            </div>
                        </div>
                        <div class="grid grid-rows-[auto_auto] justify-items-center">
                            <div class="flex w-[60px] h-[60px] justify-center items-center bg-lighter-blue rounded-[20px]">
                                <span class="iconify
                        w-[30px] h-[30px] text-utama"
                                    data-icon="streamline:hotel-air-conditioner-solid"></span>
                            </div>
                            <div class="flex w-full mt-1.5 justify-center items-start mt-1.5">
                                <span class="text-[12px] font-sans text-center text-black">AC</span>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



        </div>
    </section>

@endsection
