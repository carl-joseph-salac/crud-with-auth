@extends('layout.app')

@section('title', 'Login')

@section('content')
    <header>
        <h2>Login</h2>
    </header>
    <main>
        @if (session('error'))
            <p>{{ session('error') }}</p>
        @elseif (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form action="{{ route('loginUser') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Log in</button>
            <a href="{{ route('showRegister') }}">Register</a>
        </form>
    </main>
@endsection
