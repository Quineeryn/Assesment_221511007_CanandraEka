<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kasir;

class KasirController extends Controller {
    
    // Menampilkan daftar kasir
    public function index() {
        $kasirs = kasir::all();
        return view('kasir.index', compact('kasirs'));
    }
}