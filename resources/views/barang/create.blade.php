<!-- Form untuk menambahkan barang baru -->
<h1>Tambah Barang Baru</h1>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf
    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" id="KodeBarang" name="kodeBarang" required><br><br>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" id="NamaBarang" name="namaBarang" required><br><br>

    <label for="Satuan">Satuan:</label>
    <input type="text" id="Satuan" name="Satuan" required><br><br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" id="HargaSatuan" name="hargaSatuan" required><br><br>

    <label for="Stok">Stok:</label>
    <input type="number" id="Stok" name="stok" required><br><br>

    <button type="submit">Tambah Barang</button>
</form>
