@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <p>{{ $description }}</p>

    <ul>
    @foreach($members as $member)
    <li>{{ $member }}</li>
    @endforeach
    </ul>
@endsection