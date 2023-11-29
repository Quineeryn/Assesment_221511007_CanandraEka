<?php

namespace App\Http\Controllers;



use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller {
    
    // Menampilkan daftar barang
    public function index() {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    // Menampilkan form untuk menambah barang
    public function create() {
        return view('barang.create');
    }

    // Menyimpan barang baru ke database
    public function store(Request $request) {
        $barang = Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    // Menampilkan form untuk mengedit barang
    public function edit($id) {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    // Menyimpan perubahan pada barang ke database
    public function update(Request $request, $id) {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return redirect()->route('barang.index');
    }

    // Menghapus barang dari database
    public function destroy($id) {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}

