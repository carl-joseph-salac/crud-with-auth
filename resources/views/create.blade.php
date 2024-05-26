@extends('layout.app')

@section('title', 'Create')

@section('header', 'CREATE')

@section('navbar')
    @include('layout.navbar')
@endsection

@section('content')
    <main>
        <form action="{{ route('createInfo') }}" method="post">
            @csrf
            <div>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="firstName" placeholder="First Name" value="{{ old('firstName') }}"
                    autofocus />
                @error('firstName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="middle-name">Middle Name</label>
                <input type="text" id="middle-name" name="middleName" placeholder="Middle Name"
                    value="{{ old('middleName') }}" />
                @error('middleName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="lastName" placeholder="Last Name"
                    value="{{ old('lastName') }}" />
                @error('lastName')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="age">Age</label>
                <input type="text" id="age" name="age" placeholder="Age" value="{{ old('age') }}" />
                @error('age')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Create</button>
            <a href="{{ route('showHome') }}">Go to Home</a>
        </form>
    </main>
@endsection
