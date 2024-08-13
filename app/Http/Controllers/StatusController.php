<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function dashboard()
    {
        // Mengambil semua data dari tabel users
        $statuses = Status::all();

        // Mengirim data ke view
        return view('admin-dashboard.index', compact('statuses'));
    }
}