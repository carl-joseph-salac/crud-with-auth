@extends('layout.app')

@section('title', 'Login')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen bg-neutral-100">
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

        <main class="flex flex-col items-center justify-center flex-grow w-screen px-8">
            <h2 class="py-12 text-5xl font-bold text-gray-700">
                Good to see you again
            </h2>

            <div>
                @if (session('error'))
                    <p>{{ session('error') }}</p>
                @elseif (session('success'))
                    <p>{{ session('success') }}</p>
                @endif
            </div>

            <div class="flex-grow w-full mb-5 pt-8 px-8  bg-white rounded-lg shadow-lg sm:w-[600px] md:w-[640px] md:mb-40">
                <form class="flex flex-col items-center justify-center w-full" action="{{ route('loginUser') }}"
                    method="POST">
                    @csrf
                    <div class="relative flex flex-col w-full mb-9">
                        <label class="mb-3 text-lg font-semibold text-gray-500" for="email">Your Email</label>
                        <div class="relative">
                            <input
                                class="w-full py-3 pl-20 pr-4 text-lg font-semibold rounded-sm ring-1 ring-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 "
                                type="email" id="email" name="email" placeholder="e.g. vilt@stack.com"
                                value="{{ old('email') }}" autofocus />
                            <div class="absolute inset-y-0 left-0 flex items-center px-5 pointer-events-none border-e">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        @error('email')
                            <span class="absolute left-0 text-red-600 -bottom-7">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="relative flex flex-col w-full mb-9">
                        <label class="mb-3 text-lg font-semibold text-gray-500" for="password">Your Password</label>
                        <div class="relative">
                            <input
                                class="w-full py-3 pl-20 pr-4 text-lg font-semibold rounded-sm ring-1 ring-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500"
                                type="password" id="password" name="password" placeholder="e.g. viltstack123"
                                value="{{ old('password') }}" autofocus />
                            <div class="absolute inset-y-0 left-0 flex items-center px-5 pointer-events-none border-e">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        @error('password')
                            <span class="absolute left-0 text-red-600 -bottom-7">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="p-3 mb-10 text-lg font-bold text-white bg-green-600 rounded-full w-96" type="submit">
                        Sign in
                    </button>
                    <div class="flex justify-between w-full px-10 text-lg font-bold text-blue-700 underline">
                        <a href="{{ route('showRegister') }}">Don't have an account?</a>
                        <a href="#">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </main>

        {{-- <footer class="flex items-center justify-center w-full p-5 mb-3 font-bold bg-slate-500">
            <div class="flex items-center justify-between">
                <div class="w-16 h-16 bg-white rounded shadow-lg ">

                </div>
                <h2 class="text-xl">Footer</h1>
            </div>
        </footer> --}}
    </div>
@endsection
