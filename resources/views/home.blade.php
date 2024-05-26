@extends('layout.app')

@section('title', 'Home')

@section('header', 'HOME')

@section('navbar')
    @include('layout.navbar')
@endsection

@section('content')
    @if (session('updated'))
        <p>{{ session('updated') }}</p>
    @elseif (session('deleted'))
        <p>{{ session('deleted') }}</p>
    @endif
    <main class="flex flex-col items-center flex-grow w-full px-5 py-10 sm:px-0">
        <div class="w-full space-y-2 sm:w-3/4">
            <a class="self-start text-white btn btn-success btn-sm" href="{{ route('showCreate') }}">
                Create
            </a>
            <div class="overflow-x-auto overflow-y-auto shadow-md size-full sm:rounded-xl max-h-[750px]">
                <table class="w-full text-sm text-left text-gray-600 rtl:text-right dark:text-gray-400 ">
                    <thead class="text-xs text-gray-800 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">First Name</th>
                            <th scope="col" class="px-6 py-3">Middle Name</th>
                            <th scope="col" class="px-6 py-3">Last Name</th>
                            <th scope="col" class="px-6 py-3">Age</th>
                            <th scope="col" class="px-6 py-3">Edit</th>
                            <th scope="col" class="px-6 py-3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infos as $info)
                            <tr
                                class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <td class="px-6 py-1">{{ $info->first_name }}</td>
                                <td class="px-6 py-1">{{ $info->middle_name }}</td>
                                <td class="px-6 py-1">{{ $info->last_name }}</td>
                                <td class="px-6 py-1">{{ $info->age }}</td>
                                <td class="px-6 py-1">
                                    <a class="p-0 btn btn-link" href="{{ route('showEdit', ['info' => $info]) }}">Edit</a>
                                </td>
                                <td class="px-6 py-1">
                                    <form action="{{ route('deleteInfo', ['info' => $info]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="text-white btn btn-error btn-sm" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
