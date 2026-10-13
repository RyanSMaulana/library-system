@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <p>Detail buku</p>
    <p>ID : {{ $book->id }}</p>
    <p><a href="{{ route('books.index') }}">balik</a></p>
@endsection