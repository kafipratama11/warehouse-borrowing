<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel users
        $items = Item::all();

        // Mengirim data ke view
        return view('admin-dashboard.products', compact('items'));
    }
}