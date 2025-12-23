@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="container mx-auto bg-white">

        <div class="grid grid-cols-2 items-center justify-center h-screen">
            <div class=" bg-white">
                <img src="{{ asset('images/sign-up.png') }}">
            </div>

            <div class="bg-white grid-row-2 items-center">
                <div class="bg-white">
                    <div class="container mx-auto font-sans font-semibold text-[45px] text-center mb-5 mt-10">
                        <h2>Sign Up</h2>
                    </div>
                </div>

                <div class="bg-white">
                    <div class="flex items-center justify-center">
                        <div class=" w-130 mx-full space-y-6">
                            <form method="POST" action="{{ route('signup.penyewa') }}" class="space-y-6">
                                @csrf
                                <div class="relative">
                                    <input type="text" name="nama"
                                        class="peer py-2.5 sm:py-3 pe-0 ps-14 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-[24px] focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600 placeholder:font-sans placeholder:text-[24px] "
                                        placeholder="Nama">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px] mb-[6px]"
                                            data-icon="icon-park-outline:people"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="tel" name="no_telp"
                                        class="peer py-2.5 sm:py-3 pe-0 ps-14 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-[24px] focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600 placeholder:font-sans placeholder:text-[24px]"
                                        placeholder="08xxxxxxxxxx">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px] mb-[6px]"
                                            data-icon="ic:twotone-whatsapp"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="email" name="email"
                                        class="peer py-2.5 sm:py-3 pe-0 ps-14 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-[24px] focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600 placeholder:font-sans placeholder:text-[24px] "
                                        placeholder="Email">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px]"
                                            data-icon="ic:baseline-alternate-email"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="text" name="pekerjaan"
                                        class="peer py-2.5 sm:py-3 pe-0 ps-14 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-[24px] focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600 placeholder:font-sans placeholder:text-[24px]"
                                        placeholder="Pekerjaan">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px]"
                                            data-icon="material-symbols:work-outline"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="password" name="password"
                                        class="peer py-2.5 sm:py-3 pe-16 ps-14 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-[24px] focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600 placeholder:font-sans placeholder:text-[24px]"
                                        placeholder="Password">
                                    <div
                                        class="absolute inset-y-0 start-0 flex items-center peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px]" data-icon="carbon-password"></span>
                                    </div>

                                    <div
                                        class="absolute inset-y-0 end-0 flex items-center peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                        <span class="iconify text-gray-500 text-[39px]" data-icon="ep:hide"></span>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="flex justify-center w-full grid grid-rows-2">
                        <div class="flex">
                            <button type="button"
                                class="inline-block rounded-full bg-blue-500 mt-10 px-53 h-[60px] pb-auto pt-auto text-xs font-medium leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong font-medium font-sans text-[32px] text-">
                                Daftar
                            </button>
                        </div>

                        <div class="flex justify-center">
                            <h3 class="font-sans mt-10 text-[16px]">Sudah punya akun? <a
                                    class="font-sans mt-10 text-[16px] text-info ms-1 hover:underline"
                                    href="{{ route('signin.index') }}">
                                    Masuk</a>
                            </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endsection
