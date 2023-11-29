<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Nota;

class NotaController extends Controller {
    
    // Menampilkan daftar nota dengan informasi terkait dari Tenan, Kasir, dan BarangNota
    public function index() {
        $notas = Nota::with('tenan', 'kasir', 'barangNota.barang')->get();
        return view('nota.index', compact('notas'));
    }
    
    // ... (fungsi-fungsi lainnya sesuai kebutuhan)
}
