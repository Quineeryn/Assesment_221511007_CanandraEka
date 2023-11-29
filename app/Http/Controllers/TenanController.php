<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tenan;

class TenanController extends Controller {
    
    // Menampilkan daftar tenan
    public function index() {
        $tenans = Tenan::all();
        return view('tenan.index', compact('tenans'));
    }
    
    // ... (fungsi-fungsi lainnya sesuai kebutuhan)
}
