@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h3>Tambah buku baru</h3>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div>
            <label>Judul buku</label>
            <input type="text" name="title" placeholder="Judul buku"
            value="{{ old('title') }}">

            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" placeholder="Author"
            value="{{ old('author') }}">

            @error('author')
                <p>{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label>Year</label>
            <input type="text" name="year" placeholder="Year"
            value="{{ old('year') }}">

            @error('year')
                <p>{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label>Stock</label>
            <input type="text" name="stock" placeholder="Stock"
            value="{{ old('stock') }}">

            @error('stock')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <!-- <input type="text" name="title">
        <input type="text" name="author">
        <input type="number" name="year">
        <input type="number" name="stock"> -->

        <button type="submit">
            Simpan
        </button>
    </form>
@endsection