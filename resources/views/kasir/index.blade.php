<!-- Tampilan daftar kasir -->
<h1>Daftar Kasir</h1>

<table>
    <thead>
        <tr>
            <th>Kode Kasir</th>
            <th>Nama</th>
            <th>Nomor HP</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kasirs as $kasir)
        <tr>
            <td>{{ $kasir->kodeKasir }}</td>
            <td>{{ $kasir->namaKasir }}</td>
            <td>{{ $kasir->HP }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
