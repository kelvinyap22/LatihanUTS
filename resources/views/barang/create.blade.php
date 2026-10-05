<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>

    <h2>Tambah Barang</h2>

    <form method="POST" action="{{ url('/simpan-barang') }}">
        @csrf

        <label>Nama Barang</label>
        <br>
        <input type="text" name="nama_barang" required>
        <br><br>

        <label>Kode Barang</label>
        <br>
        <input type="text" name="kode_barang" required>
        <br><br>

        <label>Stok</label>
        <br>
        <input type="number" name="jumlah_barang" required>
        <br><br>

        <label>Harga</label>
        <br>
        <input type="number" name="harga_barang" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/daftar-barang">Kembali</a>

</body>
</html>

