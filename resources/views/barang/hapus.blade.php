<html>
<head>
    <title>Hapus Barang</title>
</head>

<body>

<h1>Hapus Barang</h1>

<p>
    Apakah kamu yakin ingin menghapus barang:
    <strong>{{ $barang->nama_barang }}</strong>?
</p>

<form action="/hapus-barang/{{ $barang->id }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit">Ya, Hapus</button>

</form>

<a href="/daftar-barang">Batal</a>

</body>
</html>