@extends('layout.app')

@section('title', 'Login')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-amber-50">
        <header class="flex items-center justify-center font-bold mt-14">
            <div class="flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 me-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4.5h14.25M3 9h9.75M3 13.5h9.75m4.5-4.5v12m0 0-3.75-3.75M17.25 21 21 17.25" />
                </svg>
                <h1 class="text-3xl">Login</h1>
            </div>
        </header>

        <main class="flex flex-col items-center justify-center w-screen px-4 sm:px-8">
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
                    <p class="text-green-600  notification-message">
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
                            <input class="input" type="email" id="email" name="email"
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
                        <label class="label" for="password">Your
                            Password</label>
                        <div class="relative">
                            <input class="input" type="password" id="password" name="password" placeholder="e.g. carl123"
                                value="{{ old('password') }}" autofocus />
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

        <footer class="flex sm:flex-row flex-col items-center justify-around w-full p-5 sm:mb-16 font-bold sm:w-[600px]">
            <div class="flex items-center justify-between w-auto mb-5 sm:mb-0">
                <div
                    class="flex items-center justify-center bg-white rounded shadow-md w-14 shadow-slate-400 h-14 sm:me-3 me-6">
                    <svg height="2500" viewBox="0 -.11376601 49.74245785 51.31690859" width="2418"
                        xmlns="http://www.w3.org/2000/svg" class="w-8 h-8">
                        <path
                            d="m49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1 -.402.694l-9.209 5.302v10.509c0 .286-.152.55-.4.694l-19.223 11.066c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1 -.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054l-19.219-11.066a.801.801 0 0 1 -.402-.694v-32.916c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216zm-36.84-31.068v31.068l17.618 10.143v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483l-4.645-2.676-3.363-1.934zm8.81-5.994-8.007 4.609 8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764 4.645-2.674v-20.096l-3.363 1.936-4.646 2.675v20.096zm24.667-23.325-8.006 4.609 8.006 4.609 8.005-4.61zm-.801 10.605-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937zm-18.422 20.561 11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833z"
                            fill="#ff2d20" />
                    </svg>
                    {{-- <img src="{{ asset('svg/laravel.svg') }}" alt="Laravel Icon" class="w-full h-full"> --}}
                </div>
                <h2 class="text-2xl font-bold">Laravel</h1>
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center bg-white rounded shadow-md shadow-slate-400 w-14 h-14 me-3">
                    <svg height="1499" viewBox=".15 .13 799.7 479.69" width="2500" xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8">
                        <path
                            d="m400 .13c-106.63 0-173.27 53.3-199.93 159.89 39.99-53.3 86.64-73.28 139.95-59.96 30.42 7.6 52.16 29.67 76.23 54.09 39.2 39.78 84.57 85.82 183.68 85.82 106.62 0 173.27-53.3 199.92-159.9-39.98 53.3-86.63 73.29-139.95 59.97-30.41-7.6-52.15-29.67-76.22-54.09-39.2-39.78-84.58-85.82-183.68-85.82zm-199.93 239.84c-106.62 0-173.27 53.3-199.92 159.9 39.98-53.3 86.63-73.29 139.95-59.96 30.41 7.61 52.15 29.67 76.22 54.08 39.2 39.78 84.58 85.83 183.68 85.83 106.63 0 173.27-53.3 199.93-159.9-39.99 53.3-86.64 73.29-139.95 59.96-30.42-7.59-52.16-29.67-76.23-54.08-39.2-39.78-84.57-85.83-183.68-85.83z"
                            fill="#06b6d4" />
                    </svg>
                    {{-- <img src="{{ asset('svg/laravel.svg') }}" alt="Laravel Icon" class="w-full h-full"> --}}
                </div>
                <h2 class="text-2xl font-bold">Tailwind</h1>
            </div>
        </footer>
    </div>
@endsection
