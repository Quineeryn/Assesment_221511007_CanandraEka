<!-- Tampilan daftar nota -->
<h1>Daftar Nota</h1>

<table>
    <thead>
        <tr>
            <th>Kode Nota</th>
            <th>Tanggal Nota</th>
            <th>Jam Nota</th>
            <th>Tenan</th>
            <th>Kasir</th>
            <th>Jumlah Belanja</th>
            <th>Diskon</th>
            <th>Total</th>
            <th>Detail Barang</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notas as $nota)
        <tr>
            <td>{{ $nota->KodeNota }}</td>
            <td>{{ $nota->TglNota }}</td>
            <td>{{ $nota->JamNota }}</td>
            <td>{{ $nota->tenan->NamaTenan }}</td>
            <td>{{ $nota->kasir->Nama }}</td>
            <td>{{ $nota->JumlahBelanja }}</td>
            <td>{{ $nota->Diskon }}</td>
            <td>{{ $nota->Total }}</td>
            <td>
                <ul>
                    @foreach($nota->barangNota as $barangNota)
                        <li>
                            {{ $barangNota->jumlah }} x {{ $barangNota->barang->NamaBarang }} ({{ $barangNota->HargaSatuan }})
                        </li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
