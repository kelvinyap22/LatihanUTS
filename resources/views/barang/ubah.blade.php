```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Barang</title>
</head>
<body>

    <h2>Ubah Barang</h2>

    <form method="POST" action="{{ url('/update-barang/' . $barang->id) }}">
        @csrf
        @method('PUT')

        <label>Nama Barang</label>
        <br>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        <br><br>

        <label>Kode Barang</label>
        <br>
        <input type="text" name="kode_barang" value="{{ $barang->kode_barang }}" required>
        <br><br>

        <label>Stok</label>
        <br>
        <input type="number" name="jumlah_barang" value="{{ $barang->jumlah_barang }}" required>
        <br><br>

        <label>Harga</label>
        <br>
        <input type="number" name="harga_barang" value="{{ $barang->harga_barang }}" required>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="/daftar-barang">Kembali</a>

</body>
</html>
```
