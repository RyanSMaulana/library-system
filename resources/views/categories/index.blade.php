@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <p>{{ $description }}</p>

    <ul>
    @foreach($categories as $category)
    <li>{{ $category }}</li>
    @endforeach
    </ul>
@endsection