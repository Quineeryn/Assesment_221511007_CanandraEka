<!-- Tampilan daftar barang -->
<h1>Daftar Barang</h1>

<a href="{{ route('barang.create') }}">Tambah Barang Baru</a>

<table>
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barangs as $barang)
        <tr>
            <td>{{ $barang->kodeBarang }}</td>
            <td>{{ $barang->namaBarang }}</td>
            <td>{{ $barang->Satuan }}</td>
            <td>{{ $barang->hargaSatuan }}</td>
            <td>{{ $barang->stok }}</td>
            <td>
                <a href="{{ route('barang.edit', $barang->id) }}">Edit</a>
                <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
