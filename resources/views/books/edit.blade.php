@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h3>Edit buku</h3>
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 12px;">
            <label>Judul buku</label><br>
            <input type="text" name="title" placeholder="Judul buku"
            value="{{ $book->title }}">

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
                        @selected(old('category_id', $book->category_id) == $category->id)
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 12px;">
            <label>Author</label><br>
            <input type="text" name="author" placeholder="Author"
            value="{{ $book->author }}">

            @error('author')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>
        
        <div style="margin-bottom: 12px;">
            <label>Year</label><br>
            <input type="text" name="year" placeholder="Year"
            value="{{ $book->year }}">

            @error('year')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>
        
        <div style="margin-bottom: 12px;">
            <label>Stock</label><br>
            <input type="text" name="stock" placeholder="Stock"
            value="{{ $book->stock }}">

            @error('stock')
                <p style="color: red; margin: 4px 0;">{{ $message }}</p>
            @enderror
        </div>

        <!-- <input type="text" name="title" value="{{ $book->title }}">
        <input type="text" name="author" value="{{ $book->author }}">
        <input type="number" name="year" value="{{ $book->year }}">
        <input type="number" name="stock" value="{{ $book->stock }}"> -->

        <button type="submit">
            Update
        </button>
    </form>
@endsection