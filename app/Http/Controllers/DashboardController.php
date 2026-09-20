<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Library System';
        $description = 'Ini merupakan aplikasi library system';
        $bookCount = 5;
        $categoriesCount = 5;
        $memberCount = 5;

        return view('dashboard.index', compact('title', 'description','bookCount','categoriesCount','memberCount'));
    }
}
