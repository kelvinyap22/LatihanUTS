<html>
    <head></head>
    <body>
        <table border="1">
            <a href="/tambah-barang">Tambah</a>
            <tr>
                <th>Nama</th>
                <th>Kode</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            @foreach($barang as $barangs)
            <tr>
                <td>{{ $barangs->nama_barang }}</td>
                <td>{{ $barangs->kode_barang }}</td>
                <td>{{ $barangs->jumlah_barang }}</td>
                <td>{{ $barangs->harga_barang }}</td>
                <td>
                    <a href="/ubah-barang/{{ $barangs->id }}">Edit</a>
                    
                    <a href="/hapus-barang/{{ $barangs->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html> 