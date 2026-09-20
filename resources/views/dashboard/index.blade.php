@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <p>{{ $description }}</p>

    <p>Jumlah buku: {{ $bookCount }}</p>

    <p>Jumlah member: {{ $categoriesCount }}</p>

    <p>Jumlah kategori: {{ $memberCount }}</p>
@endsection