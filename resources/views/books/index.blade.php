@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <p>{{ $description }}</p>

    <ul>
    <!-- @foreach($books as $book)
    <li>
        {{ $book['judul'] }}
        - {{ $book['penulis'] }}
        - {{ $book['tahun'] }}
    </li>
    @endforeach -->

    @foreach($books as $book)
        <li>
        <h3>{{ $book->title }}</h3>
        <p>Penulis: {{ $book->author }}</p>
        <p>Tahun: {{ $book->year }}</p>
        <p>Stok: {{ $book->stock }}</p>
        </li>
    @endforeach
    </ul>

    <hr>
    <p>Simulasi Stok Buku</p>

    @if($stock > 0)
        <p>Stok tersedia: {{ $stock }}</p>
    @else
        <p>Stok habis.</p>
    @endif
@endsection