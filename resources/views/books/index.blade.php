@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

    <p>{{ $description }}</p>

    <p><a href="{{ route('books.create') }}"><button>+ Tambah buku baru</button></a></p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration  }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->category?->name ?? 'Belum ada kategori' }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        @if($book->stock > 0)
                            <p>{{ $book->stock }}</p>
                        @else
                            <p>Stok habis</p>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}"><button>Detail</button></a>
                        <a href="{{ route('books.edit', $book->id) }}"><button>Edit</button></a>
                        <form
                            action="{{ route('books.destroy', $book) }}"
                            method="POST"
                            style="display:inline"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit" onclick="return confirm('hapus buku ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection