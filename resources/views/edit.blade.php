@extends('layout.app')

@section('title', 'Edit')

@section('navbar')
    @include('layout.navbar')
@endsection

@section('content')
    <main class="flex flex-col items-center justify-center flex-grow min-w-full gap-4">
        <div
            class="flex xxs:w-[300px] w-[370px] sm:w-[500px] p-5 sm:p-8 bg-white rounded-lg shadow-xl relative justify-center dark:bg-gray-900">
            <form class="flex flex-col items-center justify-center w-full gap-7"
                action="{{ route('editInfo', ['info' => $info]) }}" method="post">
                @csrf
                @method('put')
                <div class="relative w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="first-name">First
                        Name</label>
                    <input
                        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" id="first-name" name="firstName" placeholder="First Name"
                        value="{{ old('firstName', $info->first_name) }}" autofocus />
                    @error('firstName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="middle-name">Middle
                        Name</label>
                    <input
                        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" id="middle-name" name="middleName" placeholder="Middle Name"
                        value="{{ old('middleName', $info->middle_name) }}" />
                    @error('middleName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="last-name">Last
                        Name</label>
                    <input
                        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" id="last-name" name="lastName" placeholder="Last Name"
                        value="{{ old('lastName', $info->last_name) }}" />
                    @error('lastName')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="age">Age</label>
                    <input
                        class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        type="text" id="age" name="age" placeholder="Age"
                        value="{{ old('age', $info->age) }}" />
                    @error('age')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-end w-full gap-6">
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('showHome') }}">
                        Go to Home
                    </a>
                    <button class="px-6 text-white btn btn-success btn-sm" type="submit">Update</button>
                </div>
            </form>
        </div>

    </main>
@endsection
