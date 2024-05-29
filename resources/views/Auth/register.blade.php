@extends('layout.app')

@section('title', 'Register')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-amber-50">
        <header class="flex items-center justify-start font-bold mt-14">
            <div class="flex items-center justify-center">
                <img class="size-7 me-1" src="{{ Vite::asset('resources/svg/register.svg') }}" alt="">
                <h1 class="text-3xl">Register</h1>
            </div>
        </header>
        <main class="flex flex-col items-center justify-center flex-grow min-w-full gap-4">
            <div
                class="flex xxs:w-[300px] w-[370px] sm:w-[500px] p-5 sm:p-8 bg-white rounded-lg shadow-xl relative justify-center">
                <div class="absolute flex items-center justify-center w-full gap-5 -top-24">
                    <img class="w-20 h-14" src="{{ Vite::asset('resources/svg/laravel.svg') }}" alt="Laravel">
                    <img class="w-20 h-20" src="{{ Vite::asset('resources/svg/tailwind-css.svg') }}" alt="Tailwind">
                </div>
                <form class="flex flex-col items-center justify-center w-full gap-8" action="{{ route('registerUser') }}"
                    method="post">
                    @csrf
                    <div class="relative w-full">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4 text-gray-500">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                                </svg>
                            </div>
                            <input type="text" name="name" id="name" placeholder="Name"
                                value="{{ old('name') }}" autofocus
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ps-10">
                        </div>
                        @error('name')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative w-full">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4 text-gray-500">
                                    <path
                                        d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                    <path
                                        d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                                </svg>
                            </div>
                            <input
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ps-10"
                                type="text" name="email" id="email" placeholder="Email"
                                value="{{ old('email') }}" />
                        </div>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="relative w-full">
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                    class="w-4 h-4 text-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ps-10"
                                type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-end w-full">
                        <a class="btn btn-link " href="{{ route('showLogin') }}">Already registered?</a>
                        <button class="px-6 text-white btn btn-success btn-sm" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
