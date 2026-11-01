@extends('layouts.app')

@section('title', 'Login Perpustakaan')

@section('content')
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

    <h1>Login Sistem Perpustakaan</h1>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <div>
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                required
            >
        </div>

        <button type="submit">Login</button>
    </form>
@endsection