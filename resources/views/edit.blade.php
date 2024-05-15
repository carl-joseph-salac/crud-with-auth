@extends('layout.app')

@section('title', 'Edit')

@section('content')
    <header>
        <h2>Edit</h2>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </header>
    <main>
        <form action="{{ route('editInfo', ['info' => $info]) }}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="firstName" placeholder="First Name" value="{{ old('firstName', $info->first_name) }}" autofocus/>
                @error('firstName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="middle-name">Middle Name</label>
                <input type="text" id="middle-name" name="middleName" placeholder="Middle Name" value="{{ old('middleName', $info->middle_name) }}"/>
                @error('middleName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="lastName" placeholder="Last Name" value="{{ old('lastName', $info->last_name) }}"/>
                @error('lastName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" id="age" name="age" placeholder="Age" value="{{ old('age', $info->age) }}"/>
                @error('age')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Edit</button>
            <a href="{{ route('showHome') }}">Go to Home</a>
        </form>
    </main>
@endsection
