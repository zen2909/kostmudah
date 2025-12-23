@extends('layouts.app')

@section('title', 'Sign-in')

@section('content')

    <div class="container mx-auto bg-white">

        <div class="grid grid-cols-2 items-center justify-center h-screen">
            <div class=" bg-white">
                <img src="{{ asset('images/sign-in.png') }}" alt="Sign In llustration">
            </div>

            <div class="bg-white grid-rows-2 items-center">
                <div class="bg-white">
                    <div class="container mx-auto font-sans font-semibold text-[45px] text-center mb-5 mt-10">
                        <h2>Sign In</h2>
                    </div>
                </div>

                <div class="bg-white">
                    <div class="flex items-center justify-center">
                        <div class=" w-[520px] mx-auto space-y-6">
                            <form method="POST" action="{{ route('signin.penyewa') }}" class="space-y-6">
                                @csrf

                                <div class="relative">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="peer py-3 ps-14 block w-full border-b-2 border-gray-200 text-[24px]
                   focus:border-blue-500 focus:outline-none focus:ring-0 @error('email') border-red-500 @else border-gray-200 @enderror"
                                        placeholder="Email">
                                    <span
                                        class="absolute inset-y-2 start-0 flex items-center text-[39px] text-gray-500 iconify"
                                        data-icon="ic:baseline-alternate-email"></span>

                                    @error('email')
                                        <p class="text-red-500 text-[14px] font-sans font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <input type="password" name="password"
                                        class="peer py-3 ps-14 pe-16 block w-full border-b-2 border-gray-200 text-[24px]
                   focus:border-blue-500 focus:outline-none focus:ring-0 @error('password') border-red-500 @else border-gray-200 @enderror"
                                        placeholder="Password">
                                    <span
                                        class="absolute inset-y-2 start-0 flex items-center text-[39px] text-gray-500 iconify"
                                        data-icon="carbon-password"></span>
                                    <span
                                        class="absolute inset-y-2 end-0 flex items-center text-[39px] text-gray-500 iconify cursor-pointer"
                                        data-icon="ep:hide"></span>

                                    @error('password')
                                        <p class="text-red-500 text-[14px] font-sans font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <a class="text-info text-[16px] hover:underline">Lupa password?</a>
                                </div>

                                <button type="submit"
                                    class="w-full h-[60px] justify-center rounded-full bg-blue-500 text-white text-[32px] font-semibold">
                                    Masuk
                                </button>
                            </form>


                            <div class="w-full mt-5">
                                <span class="flex items-center">
                                    <span class="h-px flex-1 bg-gray-300"></span>

                                    <span class="shrink-0 px-10 text-gray-400 font-sans text-[14px]">Atau</span>

                                    <span class="h-px flex-1 bg-gray-300"></span>
                                </span>
                            </div>

                            <div class="w-full">
                                <div class="flex justify-center">
                                    <h3 class="font-sans text-[16px]">Belum punya akun?
                                        <a class="font-sans text-[16px] text-info ms-1 hover:underline"
                                            href="{{ route('signup.index') }}">Daftar
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection
