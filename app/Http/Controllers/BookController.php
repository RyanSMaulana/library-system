<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $title = 'Daftar Buku';
        $description = 'Daftar buku yang tersedia di perpustakaan.';
        $stock = 25;
        $books = [
            [
                'judul' => 'Pemrograman PHP',
                'penulis' => 'Apri',
                'tahun' => 2022
            ],
            [
                'judul' => 'Laravel untuk Pemula',
                'penulis' => 'Ansyah',
                'tahun' => 2023
            ],
            [
                'judul' => 'Basis Data',
                'penulis' => 'Maul',
                'tahun' => 2021
            ],
            [
                'judul' => 'Algoritma dan Pemrograman',
                'penulis' => 'Ana',
                'tahun' => 2021
            ],
            [
                'judul' => 'Pemgrograman Berbasis Objek',
                'penulis' => 'Ian',
                'tahun' => 2021
            ]
        ];

        return view('books.index', compact('title', 'description','books','stock'));
    }

    public function bookDetail($id) {
        return view('books.show', compact('id'));
    }
}
