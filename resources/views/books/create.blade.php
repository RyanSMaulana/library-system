@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h3>Tambah buku baru</h3>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 12px;">
            <label>Judul buku</label><br>
            <input type="text" name="title" placeholder="Judul buku"
            value="{{ old('title') }}">

            @error('title')
                <!-- <p>{{ $message }}</p> -->
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label for="category_id">Kategori</label><br>
            <select name="category_id" id="category_id">
                <option value="">Pilih kategori</option>

            @foreach ($categories as $category)
                <option
                value="{{ $category->id }}"
                @selected(old('category_id') == $category->id)
                >
                {{ $category->name }}
                </option>
            @endforeach
            </select>

            @error('category_id')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom: 12px;">
            <label>Author</label><br>
            <input type="text" name="author" placeholder="Author"
            value="{{ old('author') }}">

            @error('author')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>
        
        <div style="margin-bottom: 12px;">
            <label>Year</label><br>
            <input type="text" name="year" placeholder="Year"
            value="{{ old('year') }}">

            @error('year')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>
        
        <div style="margin-bottom: 12px;">
            <label>Stock</label><br>
            <input type="text" name="stock" placeholder="Stock"
            value="{{ old('stock') }}">

            @error('stock')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
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