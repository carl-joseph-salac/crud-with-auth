@extends('layout.app')

@section('title', 'Register')

@section('content')
    <header>
        <h2>Register</h2>
    </header>
    <main>
        <form action="{{ route('registerUser') }}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" autofocus />
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" />
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" />
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Register</button>
            <a href="{{ route('showLogin') }}">Login</a>
        </form>
    </main>
@endsection
