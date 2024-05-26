@extends('layout.app')

@section('title', 'Login')

@section('navbar')

@endsection

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-amber-50">
        <header class="flex items-center justify-center font-bold mt-14">
            <div class="flex items-center justify-center">
                <img class="size-7 me-1" src="{{ Vite::asset('resources/svg/login.svg') }}" alt="">
                <h1 class="text-3xl">Login</h1>
            </div>
        </header>

        <main class="flex flex-col items-center justify-center min-w-full px-4 sm:px-8">
            <h2 class="py-5 mb-2 text-3xl font-bold text-gray-700 sm:text-5xl sm:py-14 xxs:text-2xl">
                Good to see you again
            </h2>
            <div
                class="flex w-full p-5 sm:py-10 sm:px-8 bg-white rounded-lg shadow-xl sm:w-[600px] md:w-[640px] md:mb-8 relative">
                @if (session('error'))
                    <p class="text-red-600 notification-message">
                        {{ session('error') }}
                    </p>
                @elseif (session('success'))
                    <p class="text-green-600 notification-message">
                        {{ session('success') }}
                    </p>
                @endif
                <form class="flex flex-col items-center justify-center w-full" action="{{ route('loginUser') }}"
                    method="POST">
                    @csrf
                    <div class="relative flex flex-col w-full mb-10">
                        <label class="label" for="email">
                            Your Email
                        </label>
                        <div class="relative">
                            <input class="custom-input" type="email" id="email" name="email"
                                placeholder="e.g. carl@gmail.com" value="{{ old('email') }}" autofocus />
                            <div class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative flex flex-col w-full mb-10">
                        <label class="label" for="password">Your Password</label>
                        <div class="relative">
                            <input class="custom-input" type="password" id="password" name="password"
                                placeholder="e.g. carl123" value="{{ old('password') }}" autofocus />
                            <div class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <button
                        class="w-3/4 p-2 mb-12 text-lg font-bold text-white rounded-full sm:p-3 bg-gradient-to-r from-green-600 to-green-400 sm:w-96 hover:from-green-400 hover:to-green-600"
                        type="submit">
                        Sign in
                    </button>
                    <div
                        class="flex justify-between w-full text-sm font-bold text-blue-700 underline sm:px-10 sm:text-lg xxs:text-xs">
                        <a href="{{ route('showRegister') }}">Don't have an account?</a>
                        <a href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </main>

        <footer class="flex sm:flex-row flex-col items-center justify-around w-full p-5 sm:mb-auto font-bold sm:w-[600px]">
            <div class="flex items-center justify-between w-auto mb-5 sm:mb-0">
                <div
                    class="flex items-center justify-center bg-white rounded shadow-md w-14 shadow-slate-400 h-14 sm:me-3 me-6">
                    <img src="{{ Vite::asset('resources/svg/laravel.svg') }}" alt="Laravel Icon" class="w-8 h-8">
                </div>
                <h2 class="text-2xl font-bold">Laravel</h1>
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center bg-white rounded shadow-md shadow-slate-400 w-14 h-14 me-3">
                    <img src="{{ Vite::asset('resources/svg/tailwind-css.svg') }}" alt="Laravel Icon" class="w-8 h-8">
                </div>
                <h2 class="text-2xl font-bold">Tailwind</h1>
            </div>
        </footer>
    </div>
@endsection
