<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $title = 'Daftar Kategori';
        $description = 'Daftar kategori yang tersedia di perpustakaan:';
        $categories = [
            'Pendidikan',
            'Teknologi',
            'Fiksi',
            'Bisnis',
            'Sejarah'
        ];

        return view('categories.index', compact('title', 'description','categories'));
    }
}
