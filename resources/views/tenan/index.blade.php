<!-- Tampilan daftar tenan -->
<h1>Daftar Tenan</h1>

<table>
    <thead>
        <tr>
            <th>Kode Tenan</th>
            <th>Nama Tenan</th>
            <th>Nomor HP</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tenans as $tenan)
        <tr>
            <td>{{ $tenan->kodeTenan }}</td>
            <td>{{ $tenan->namaTenan }}</td>
            <td>{{ $tenan->HP }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
