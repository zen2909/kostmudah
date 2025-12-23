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
                                        <div class="fixed top-6 right-6 z-50">
                                            <div role="alert"
                                                class="border-2 bg-red-100 p-4 text-red-900 shadow-[4px_4px_0_0]">
                                                <div class="flex items-start gap-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                        fill="currentColor" class="mt-0.5 size-4">
                                                        <path fill-rule="evenodd"
                                                            d="M6.701 2.25c.577-1 2.02-1 2.598 0l5.196 9a1.5 1.5 0 0 1-1.299 2.25H2.804a1.5 1.5 0 0 1-1.3-2.25l5.197-9ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 1 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>

                                                    <strong class="block flex-1 leading-tight font-semibold">
                                                        {{ $message }}
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    @enderror
                                </div>

                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class="peer py-3 ps-14 pe-16 block w-full border-b-2 border-gray-200 text-[24px] focus:border-blue-500 focus:outline-none focus:ring-0 @error('password') border-red-500 @else border-gray-200 @enderror"
                                        placeholder="Password">
                                    <span
                                        class="absolute inset-y-2 start-0 flex items-center text-[39px] text-gray-500 iconify"
                                        data-icon="carbon-password"></span>
                                    <span id="togglePasswordIcon" onclick="togglePassword()"
                                        class="absolute inset-y-2 end-0 flex items-center text-[39px] text-gray-500 iconify cursor-pointer hover:text-blue-500 transition"
                                        data-icon="ep:hide"></span>

                                    @error('password')
                                        <p class="text-red-500 text-[14px] font-sans font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <a class="text-info text-[16px] hover:underline">Lupa password?</a>
                                </div>

                                <button type="submit"
                                    class="w-full h-[60px] justify-center border border-blue-500 rounded-full bg-blue-500 text-white text-[32px] font-semibold hover:bg-transparent hover:text-blue-500 hover:border-blue-500 transition">
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

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const icon = document.getElementById('togglePasswordIcon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.setAttribute('data-icon', 'ep:view');
                } else {
                    passwordInput.type = 'password';
                    icon.setAttribute('data-icon', 'ep:hide');
                }
            }
        </script>
