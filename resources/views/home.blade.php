@extends('layout.app')

@section('title', 'Home')

@section('content')
    <header>
        <h2 style="display: inline-block">HOME</h2>
        <form action="{{ route('logout') }}" method="post" style="display: inline-block">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </header>
    @if (session('updated'))
        <p>{{ session('updated') }}</p>
    @elseif (session('deleted'))
        <p>{{ session('deleted') }}</p>
    @endif
    <main>
        <a href="{{ route('showCreate') }}">Create</a>
        <table border="1">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infos as $info)
                    <tr>
                        <td>{{ $info->first_name }}</td>
                        <td>{{ $info->middle_name }}</td>
                        <td>{{ $info->last_name }}</td>
                        <td>{{ $info->age }}</td>
                        <td>
                            <a href="{{ route('showEdit', ['info' => $info]) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('deleteInfo', ['info' => $info]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
