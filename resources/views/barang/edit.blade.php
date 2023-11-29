<!-- Form untuk mengedit barang -->
<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" id="KodeBarang" name="kodeBarang" value="{{ $barang->kodeBarang }}" required><br><br>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" id="NamaBarang" name="namaBarang" value="{{ $barang->namaBarang }}" required><br><br>

    <label for="Satuan">Satuan:</label>
    <input type="text" id="Satuan" name="Satuan" value="{{ $barang->Satuan }}" required><br><br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="number" id="HargaSatuan" name="hargaSatuan" value="{{ $barang->hargaSatuan }}" required><br><br>

    <label for="Stok">Stok:</label>
    <input type="number" id="Stok" name="stok" value="{{ $barang->stok }}" required><br><br>

    <button type="submit">Update Barang</button>
</form>
